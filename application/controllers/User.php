<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('commonmodel');
	}

	public function index()
	{
		//	$this->load->view('login_view');
	}

	public function register()
	{

		$this->form_validation->set_rules('firstname', 'First Name', 'required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm_pass', 'Confirm Password', 'required|matches[password]');
		$this->form_validation->set_rules('gender', 'Gender', 'required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'required');

		if ($this->form_validation->run() === false) {

			$this->load->view('register_view');
		} else {

			$post_data = $this->input->post();
			$post_data['password'] = md5($this->input->post('password'));
			unset($post_data['confirm_pass']);
			$this->commonmodel->register($post_data);

			$this->session->set_flashdata(SUCCESS_MESSAGE, 'Your registration was successful! Please login');

			redirect(base_url() . 'user/login');
		}
	}

	public function login()
	{

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === false) {
			$this->load->view('login_view');
		} else {
			//get email
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user_data = $this->commonmodel->authenticate($email, $password);

			if ($user_data != null && is_object($user_data)) {

				$session_data = array(
					'id' => $user_data->id,
					'email' => $user_data->email,
					'phone' => $user_data->phone,
					'firstname' => $user_data->firstname,
					'lastname' => $user_data->lastname,
					'userstatus' => $user_data->user_status,
					'logged_in' => TRUE
				);
                if($user_data->user_status == "ADMIN"){
                    $this->session->set_userdata($session_data);

                    $this->session->set_flashdata(SUCCESS_MESSAGE, 'Login was successful');
                    redirect(base_url() . 'dashboard');

                } else if ($user_data->user_status == "USER") {
                    $this->session->set_userdata($session_data);

                    $this->session->set_flashdata(SUCCESS_MESSAGE, 'Login was successful');
                    redirect(base_url() . 'UserDashboard');
                }

			} else {
				$this->session->set_flashdata(ERROR_MESSAGE, 'login is Invalid');
				redirect(base_url() . 'user/login');
			}
		}
	}



	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata(SUCCESS_MESSAGE, 'Your logged out');
		redirect(base_url() . 'user/login');
	}

	public function check_email_exists($email)
	{
		$this->form_validation->set_message('check_email_exists', 'Email Already exist');

		if ($this->User_model->check_email_exists($email)) {
			return true;
		} else {
			return false;
		}
	}
}
