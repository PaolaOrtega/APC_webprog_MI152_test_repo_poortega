<?php
class User_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_users($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('users');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('users', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_users_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('users');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array();
    }
    
    public function delete_users($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('users');
    }
}