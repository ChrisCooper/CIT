<?php
class Message_series_model extends CI_Model {

    var $title = "";
    var $filename = "";
    var $ministry = "";

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->helper('file');
    }
    
    static function count()
    {
        $CI =& get_instance();
        return $CI->db->count_all_results('message_series');
    }
    
    function get_dropdown_info() {
        $this->db->select('id, title')
        ->from('message_series');
        $query = $this->db->get();
        
        $res = $query->result();
        
        foreach ($res as $series) {
            if (strlen($series->title) > 27) {
                $series->title = substr($series->title, 0, 24) . '...';
            }


        }
        
        return $res;
    }
}

?>