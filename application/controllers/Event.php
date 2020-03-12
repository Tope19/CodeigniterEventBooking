<?php

defined('BASEPATH') or exit('No direct script access allowed');

class  Event extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('Event_model');
        $this->load->model('Payment_model');
    }

    public function page(){
        $query = $this->Event_model->getEvents();
        $data['EVENTS'] = null;
        if ($query){
            $data['EVENTS'] = $query;
        }
        $this->load->view('event_view', $data);
    }

    public function details($id){

       $data = $this->Event_model->getEventDetails($id);


//        echo '<pre>';
//        print_r($data);
//        die();
        $this->load->view('details', $data);
    }

    public function create(){
        if(!$this->session->userdata("id")){ 
            return redirect(base_url(). 'user/login');
        }



if($this->input->post()){ 
        $this->form_validation->set_rules('name', 'Event Name', 'required');
        $this->form_validation->set_rules('caption', 'Event Caption', 'required');
        $this->form_validation->set_rules('date', 'Event Date', 'required');
        $this->form_validation->set_rules('status', 'Select Event Status', 'required');
        $this->form_validation->set_rules('price', 'Event Price');
        $this->form_validation->set_rules('location', 'Event Location', 'required');

        if ($this->form_validation->run() === false){
            $this->load->view('admin/add_event');
        } else{
            $post_data = $this->input->post();
            $this->Event_model->insert($post_data);

            $this->session->set_flashdata(SUCCESS_MESSAGE, 'Event Succesfully Created!');
            // redirect(base_url() . 'admin/event/create');
        }
    }

    $this->load->model('Event_model', 'adminevents');
        $data['results'] = $this->adminevents->getEvents();
        $this->load->view('admin/add_event', $data);
}

    public function bookEvent($event_id){
        if (!$this->session->userdata("id"))
            return redirect(base_url(). 'user/login');

        $page_data = new stdClass();
        $page_data->data = $this->Event_model->getEventDetails($event_id);


        $this->load->view('payment_view', $page_data);
    }

}
