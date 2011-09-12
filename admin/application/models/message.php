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
        $this->load->helper('filename');
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
        ->order_by("title")
        ->limit(10, $offset+1);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            $res = $query->result();
            foreach ($res as $message){
                //$message->series_filename = $this->fetch_series_filename($message->series_id);
            }
           return $res;
        } else {
            return FALSE;
        }
    }
    
    function fetch_series_filename($series_id){

        $this->db->select('filename')
        ->from('message_series')
        ->where('id', $series_id);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            $res = $query->result();
            return $res[0]->filename; 
        }
        return "";    
    }
    
    function delete_model_by_id($delete_id) {
        if ($delete_id === FALSE) {
            return;
        }
        $this->db->select('filename')
        ->from('messages')
        ->where("id", $delete_id);
        $query = $this->db->get();
        $res = $query->result();
        
        $filename = $res[0]->filename;
        
        unlink(set_realpath("../messages/") . $filename);
        
        $this->db->delete('messages', array('id' => $delete_id));
    }

    function get_and_set_filename() {
        $this->filename = filename_from_string($this->title, "../messages", "mp3");
        return $this->filename;
    }

    function insert_self()
    {
        $this->series_id = $this->input->post('series_id');
        $this->date_uploaded = date('Y-m-d');

        $this->db->insert('messages', $this);
    }

    function update_entry()
    {
        $this->series_id = $this->input->post('series_id');
        $this->title = $this->input->post('title');
        $this->author = $this->input->post('author');
        $this->date_recorded = date();
        $this->date_uploaded = date();

        $this->db->update('entries', $this, array('id' => $hits->input->post('id')));
    }

}

?>