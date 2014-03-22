<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class client_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function all()
    {
        return $this->db->select('*')
        ->from('clients')
        ->get()
        ->result();
    }

    function get_by_id($id)
    {
        return $this->db->select('*')
        ->from('clients')
        ->where('id', $id)
        ->get()
        ->row();
    }

}