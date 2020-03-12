<?php
class Event_model extends CI_Model
{
    public function insert()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'caption' => $this->input->post('caption'),
            'date' => $this->input->post('date'),
            'status' => $this->input->post('status'),
            'price' => $this->input->post('price'),
            'location' => $this->input->post('location')
        );

        return $this->db->insert('events', $data);
    }

    public function getEvents(){
        $this->db->select("*");
        $this->db->from('events');
        $query = $this->db->get();
        return $query->result();
    }

    public function  getEventDetails($id){
        $this->db->where('id', $id);
        $row = $this->db->get('events')->row();

        log_message("debug", $this->db->last_query());
        return $row;
    }

    public function  getSubDetails($id){
        $this->db->select("*");
        $this->db->where('id', $id);
        $result = $this->db->get('events')->result();

        log_message("debug", $this->db->last_query());
        return $result;
    }

    public function insertEventDetails($id){
        $data = array(
            'user_id' => '<?= $this->session->id ?>',
            'évent_id' => '',
            'status' => 'YES'
            
        );

        return $this->db->insert('subscriptions', $data);
    }

}
