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
        $this->load->helper('filename');
    }
    
    static function count()
    {
        $CI =& get_instance();
        return $CI->db->count_all_results('message_series');
    }
    
    function get_ten_entries_from_offset($offset=0)
    {   
        $this->db->select('*')
        ->from('message_series')
        ->order_by("title")
        ->limit(10, $offset+1);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            $res = $query->result();
           return $res;
        } else {
            return FALSE;
        }
    }
    
    function delete_model_by_id($delete_id) {
        if ($delete_id === FALSE) {
            return;
        }
        $this->db->select('filename')
        ->from('message_series')
        ->where("id", $delete_id);
        $query = $this->db->get();
        $res = $query->result();
        
        $filename = $res[0]->filename;
        
        unlink(set_realpath("../message_series/") . $filename);
        
        $this->db->delete('message_series', array('id' => $delete_id));
    }

    function get_and_set_filename() {
        $this->filename = filename_from_string($this->title, "../message_series", "png");
        return $this->filename;
    }

    function insert_self()
    {

        $this->db->insert('message_series', $this);
    }
}

?>