<?php

/**
 * Created by PhpStorm.
 * User: deoye
 * Date: 1/25/19
 * Time: 4:55 PM
 */
class Websubscriptions extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('commonmodel', 'SubscriptionModel');
        $this->load->model('commonmodel', 'PaymentsModel');

        $this->SubscriptionModel->table = "subscriptions";
        $this->PaymentsModel->table = "payments";


    }

    function payments()
    {

        log_message("debug", "RETURN _URL END");
        $reference = $this->input->get('reference');
        $transaction = $this->input->get('transaction_id');
        $user = self::customer();


        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                "accept: application/json",
                "authorization: Bearer " . PAYSTACK_SECRET_KEYS,
                "cache-control: no-cache"
            ),
            CURLOPT_SSL_VERIFYPEER => FALSE
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);


        if ($err) {
            // there was an error contacting the Paystack API
            log_message("debug", print_r($err, true));
            $this->toastr->error("Unable to Connect to Paystack");
            redirect(base_url() . 'dashboard');
//            print_r($err);
//			die('Curl returned error: ' . $err);
        }

        $tranx = json_decode($response, true);

        $existingPayment = $this->PaymentsModel->get_by('payment_reference', $reference);
        $new_payment = null;
        if ($existingPayment == null) {
            // Save to db.
            $payment_id = "";
            $plan_meta = $tranx['data']['metadata']['custom_fields'][1];


            $plan = $this->SubscriptionModel->get($plan_meta['value']);
            $markup = $this->markup->get_by('type', $plan->type);
            $exchange = $this->exchange->get_by('status', "ACTIVE");
            if ($payment_id == "") {
                $payment_id = self::generateRandomNumber(10);
            }
            $payment_payload = array(
                'payment_reference' => $reference,
                'payment_id' => $payment_id,
                'user_id' => $user->id,
                'user_name' => $user->name,
                'payment_method' => $tranx['data']['channel'],
                'status' => $tranx['data']['status'],
                'response_description' => $tranx['data']['gateway_response'],
                'currency_code' => $tranx['data']['currency'],
                'transaction_date' => $tranx['data']['transaction_date'],
                'message' => $tranx['message'],
                'amount' => $tranx['data']['amount'] / 100,
                'payment_date' => $tranx['data']['paid_at'], // The time the person paid on paystack.
                'exr' => $exchange->exr,
                'device'=>"WEB",
                'official_exr' => $exchange->official_exr,
                'markup' => $markup->markup
            );
//                echo "<pre>";
            $new_payment = $this->PaymentsModel->insert($payment_payload);
        }
        if (!$tranx['status']) {
            // there was an error from the API
            log_message("debug", print_r($tranx['message'], true));
//			die('API returned error: ' . $tranx->message);
            $this->toastr->error("Payment was unsuccessful");
            redirect(base_url() . 'dashboard');
        }

        if ('success' == $tranx['data']['status']) {
//			echo "<pre>";
//			print_r($tranx->data);
//			die();
            // transaction was successful...
            // please check other things like whether you already gave value for this ref
            // if the email matches the customer who owns the product etc
            // Give value


            if ($new_payment != null) {
                $user = $this->customer();

                $adjustment = 0;
                $code = "";
                $retailPlan = "";
                $amount = $tranx['data']['amount'] / 100; //Amount Paid for Products
                if ($plan->type == "MPG") {
                    $adjustment = round($amount / (int)$exchange->exr / $markup->markup, 2, PHP_ROUND_HALF_UP);
                    $code = "RILD";
                    $retailPlan = "PAYGo";
                } else if ($plan->type == "MUP") {
                    $adjustment = 5;
                    $code = "UILD";
                    $retailPlan = "Unltd_Persnl";
                } else if ($plan->type == "MUB") {
                    $adjustment = 5;
                    $code = "UILD";
                    $retailPlan = "Unltd_Busnss";
                }


                $accountReload = array(
                    "username" => TALKIE_USERNAME,
                    "check" => md5(TALKIE_PRIVATE_KEY . $user->account_id),
                    "account" => $user->account_id,
                    "customer" => TALKIE_CUSTOMER_NAME,
                    "dnisSet" => TALKIE_DNIS_SET,
                    "adjustment" => $adjustment,
                    "transCode" => $code,
                    "description" => "",
                    "expireDays" => "",
                    "productName" => "",
                    "retailPlan" => $retailPlan,
                    "forceRenew" => false,
                );
//                    echo "<pre>";
//                    print_r($accountReload);
//                    die();
                $reloadUserAccount = $this->TALKIE_API_CALL("requestAccountReload", $accountReload);
                if ($reloadUserAccount->status == "SUCCESS") {
                    $this->toastr->success("Payment Successful");
                    redirect(base_url() . 'dashboard');
                } else {
                    $this->toastr->success("Payment Successful but account top up unsuccessful, " . $reloadUserAccount->message . ", Please contact support");
                    redirect(base_url() . 'dashboard');
                }
            } else {
                $this->toastr->warning("Unable to record payments, please contact support");
                redirect(base_url() . 'dashboard');
            }
        } else {
            $this->toastr->warning("Payment Confirmation Unsuccessful");
            redirect(base_url() . 'dashboard');
        }
    }

    function updateExpiry($date, $timming)
    {

        $interval = new DateInterval($timming);
        $next = $date->add($interval);
        return $next;
    }

}
