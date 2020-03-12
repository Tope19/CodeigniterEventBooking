<?php
class Subscription_model extends CI_Model{
    public function insert(){
        $user = $this->UserModel->get_by('id', $this->session->userdata['id']);
        $username = $this->UserModel->get_by('firstname', $this->session->userdata['firstname']);
        $event = $this->EventModel->getEventDetails('id' === 'id');
        $subscription = array(
            'user_id' => $user->id,
            'user_name' => $username->firstname,
            'event_id' => $event->id,
            'event_name' => $event->name,
            'status' => 'YES'

        );
        return $this->db->insert('subscriptions', $subscription);
    }
        
        public function subscribed(){
            $this->db->order_by('id','asc');
            $this->db->select("*");
            $this->db->from('subscriptions');
            $query = $this->db->get();
            return $query->result();
        }

        public function subscription($userid){
            $query = $this->db->select('*')->where('user_id', $userid)->from('subscriptions')->get();

            return $query->result();
        }

}