<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 1/14/2016
 * Time: 12:26 AM
 */

class Images extends CI_Model {
    // Our constructor and we call its super constructor
    function __construct()
    {
        parent::__construct();
    }
    //Returns all images, in descending order of post date
    function all(){
        $this->db->order_by("id", "desc");
        $query = $this->db->get('images');
        return $query->result_array();
    }
    //Return the 3 latest images
    function newest(){
        $this->db->order_by("id", "desc");
        $this->db->limit(3);
        $query = $this->db->get('images');
        return $query->result_array();

    }
}