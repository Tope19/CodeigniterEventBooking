<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Commonmodel');
        $this->load->model('User_model', 'users');
        if(!$this->session->userdata("id"))
            return redirect(base_url(). 'user/login');

    }

    public function index()
    {
        $data = new stdClass();
        $data->list = $this->users->getallusers();
        $this->load->view('admin/dashboard_view',$data);
    }



    public function viewevents()
    {
        $this->load->model('Event_model', 'getEvents');
        $data['results'] = $this->getEvents->adminevents();
        $this->load->view('admin/adminevent_view', $data);
    }

    public function subscribers()
    {
        $this->load->model('Subscription_model', 'getSubscribed');
        $data['results'] = $this->getSubscribed->subscribed();
        $this->load->view('admin/subscribers_view', $data);
    }

}
