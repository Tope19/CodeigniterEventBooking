<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile_model extends CI_Model{

    public function getprofile($userid){
        $query = $this->db->select('firstname,lastname,email,gender,phone')
            ->where('id',$userid)
            ->from('users')
            ->get();
        return $query->row();
    }

    public function update_profile($firstname,$lastname,$gender,$email,$phone,$userid){
        $data = array(
            'firstname' =>$firstname,
            'lastname' => $lastname,
            'gender' => $gender,
            'email' => $email,
            'phone' => $phone
        );

        $query = $this->db->where('id', $userid)
            ->update('users', $data);

        return $query->row();


    }


}