<?php

/**
 * Description of MY_Controller
 *
 * @author sahmed
 */

class MY_Controller extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
        // Get all menu/submenu items
        $data['menu_items'] = Menu::get_menu_submenu();
        //echo "<pre>", print_r($menu_items, true) , "</pre>";
        
        // Convert each item in $data to variable
        $this->load->vars($data);  
    }
}
