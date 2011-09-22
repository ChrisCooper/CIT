<?php
class Message extends CI_Model {
    
    var $series_id = -1;
    var $filename = "";
    var $title = "";
    var $author = "";
    var $date_recorded = "";
    var $date_uploaded = "";

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->helper('file');
    }
    
    static function count()
    {
        $CI =& get_instance();
        return $CI->db->count_all_results('messages');
    }
    
    function get_ten_entries_from_offset($offset=0)
    {   
        $this->db->select('*')
        ->from('messages')
        ->order_by("date_recorded", "DESC")
        ->limit(10, $offset+1);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            $res = $query->result();
           return $res;
        } else {
            return FALSE;
        }
    }
    
    function get_message_by_id($id) {
        
        $this->db->select('*')
        ->from('messages')
        ->where('id', $id);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            $res = $query->result();
            return $res[0]; 
        }
        return new Message;   
    }
    
    function fetch_series_filename_and_title($series_id){

        $this->db->select('filename, title')
        ->from('message_series')
        ->where('id', $series_id);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            $res = $query->result();
            return $res[0]; 
        }
        return new Message_series_model;    
    }
    
    function is_filled($get_name) {
        return strlen($this->input->get($get_name)) != 0;
    }
    
    function prepare_serach_query() {
        
        if ($this->message->is_filled('title')) {
            $this->db->like('title', $this->input->get('title'));
        }
        if ($this->message->is_filled('author')) {
            $this->db->like('author', $this->input->get('author'));
        }
        if ($this->message->is_filled('series_id') && strcmp($this->input->get('series_id'),"-1") != 0) {
            $this->db->where('series_id', $this->input->get('series_id'));
        } 
        if ($this->message->is_filled('date_recorded_after')) {
            $this->db->where('date_recorded >', $this->input->get('date_recorded_after'));
        }
        if ($this->message->is_filled('date_recorded_before')) {
            $this->db->where('date_recorded <', $this->input->get('date_recorded_before'));
        }
    }
    
    function get_ten_search_results_from_offset($offset=0) {
        $this->message->prepare_serach_query();
        
        $this->db->select('*')
        ->from('messages')
        ->order_by("date_recorded", "DESC")
        ->limit(10, $offset+1);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            $res = $query->result();
           return $res;
        } else {
            return FALSE;
        }
    }
    
    function count_search_results(){
        $this->message->prepare_serach_query();
        return $this->db->count_all_results('messages');
    }
}

?>