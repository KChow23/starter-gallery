<?php

/**
 * code/MY_Controller.php
 * Default application controller
 */
class Application extends CI_Controller{

    protected $data = array(); //Parameters for view compotents
    protected $id; // ID for our content
    protected $choices = array( //menu nav
        'Home' => '/',
        'Gallery' => '/gallery',
        'About' => '/about'
    );

    /**
     * Constructor
     * Initializes our view parameters and loads common helpers
     */
    function __construct() {
        parent::__construct();
        $this->data = array();
        $this->data['pagetitle'] = "Sample Image Gallery";
    }

    /**
     * Render this page
     */
    function render (){
        $this->data['menubar'] = build_menu_bar($this->choices);
        $this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
        $this->data['data'] = $this->data;
        $this->parser->parse('_template',$this->data);
    }


}


