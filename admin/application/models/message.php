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
    
    function get_ten_entries_from_page($page_number=1)
    {
        if ($page_number < 1) {
            return FALSE;
        }
        
        $this->db->select('*')
        ->from('messages')
        ->order_by("title")
        ->limit(2, 2*($page_number-1));
        $query = $this->db->get();
        
        //$query = $this->db->query("SELECT * FROM messages ORDER BY title LIMIT 40, 10");
        
        if ($query->num_rows() > 0) {
            $res = $query->result();
            //echo $res;
            
            //print_r($res);
            //echo "</br>";
           return $res;
        } else {
            return FALSE;
        }
    }

    function get_and_set_filename() {
        $this->filename = filename_from_string($this->title, "../messages");
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