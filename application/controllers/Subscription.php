<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Subscription extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata("id"))
            return redirect(base_url(). 'user/login');
        $this->load->model('commonmodel');
        $this->load->model('Subscription_model', 'SubscriptionModel');
        $this->load->model('Event_model', 'EventModel');
        $this->load->model('commonmodel', 'UserModel');
        $this->UserModel->table = "users";
        $this->EventModel->table = "events";

    }

    public function index()
    {

        $this->load->view('payment_view');
    }

    public function details(){
        $user = $this->UserModel->get_by('id', $this->session->userdata['id']);
        $username = $this->UserModel->get_by('firstname', $this->session->userdata['firstname']);
        $event = $this->EventModel->getEventDetails('id' === 'id');
//        $data = $this->Event_model->getEventDetails($id);
        $subscription = array(
            'user_id' => $user->id,
            'user_name' => $username->firstname,
            'event_id' => $event->id,
            'event_name' => $event->name,
            'status' => 'YES'

        );
//        echo "<pre>";
//        print_r($subscription); die();
        if ($this->SubscriptionModel->insert($subscription)){
            redirect(base_url() . 'subscription');
        } else{
            redirect(base_url() . 'event/details/' . $event->id);
        }


    }
}
