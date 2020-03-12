<?php

defined('BASEPATH') or exit('No direct script access allowed');

class UserDashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Commonmodel');
        $this->load->model('User_model', 'users');
        $this->load->model('Profile_model');
        if(!$this->session->userdata("id"))
            return redirect(base_url(). 'user/login');

    }

    public function index()
    {

        $this->load->view('user/dashboard_view');
    }

    public function profile(){
        $userid = $this->session->userdata('id');
        $data = $this->Profile_model->getprofile($userid);
//        $profile = $this->Profile_model->getprofile($userid);
//        echo '<pre>';
//        print_r($data); die();
        $this->load->view('user/profile_view', $data);
    }

    public function update(){
        $this->form_validation->set_rules('firstname','First Name');
        $this->form_validation->set_rules('lastname','Last  Name');
        $this->form_validation->set_rules('email', 'Email');
        $this->form_validation->set_rules('gender', 'Gender');
        $this->form_validation->set_rules('phone','Phone Number','numeric|exact_length[10]');
        if($this->form_validation->run()){
            $firstname = $this->input->post('firstname');
            $lastname=$this->input->post('lastname');
            $email=$this->input->post('email');
            $gender=$this->input->post('gender');
            $phone=$this->input->post('phone');
            $userid = $this->session->userdata('id');
            $this->Profile_model->update_profile($firstname,$lastname,$gender,$email,$phone,$userid);
            $this->session->set_flashdata(SUCCESS_MESSAGE,'Profile updated successfully.');
            return redirect('UserDashboard/profile');

        } else {
            $this->session->set_flashdata(ERROR_MESSAGE, 'Something went wrong. Please try again with valid format.');
            redirect('UserDashboard/profile');
        }

    }



    public function viewSubscription()
    {
        $data = new stdClass();
        $userid = $this->session->userdata('id');
        $this->load->model('Subscription_model', 'getSub');
        $data->list = $this->getSub->subscription($userid);

//        echo "<pre>";
//        print_r($data); die();
        $this->load->view('user/subscriptions_view', $data);
    }


}
