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
}

?>