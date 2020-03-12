<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Payment_model extends CI_Model{

    public function getuserdetails($userid){
        $query = $this->db->select('firstname,lastname,email,phone')
            ->where('id',$userid)
            ->from('users')
            ->get();
        return $query->row();
    }

    public function getPrice($userid,$price){
        $data = array(
            'price' => $price
        );

        $query = $this->db->get('price', $userid)
            ->from('events', $data);

        return $query->row();

    }


}