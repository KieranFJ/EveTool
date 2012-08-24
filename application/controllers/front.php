<?php

class Front extends CI_Controller {
    
    function index() {
        
        $this->data['title'] = "Front Page";
        
        $this->load->view('includes/template', $this->data['title']);
        
    }
    
}


?>
