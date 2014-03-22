<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class auth_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function authenticate($username, $password)
    {
        $result = $this->db->select('*')
        ->from('users')
        ->where('username', $username)
        ->where('password', $password)
        ->get()
        ->row();

        if (count($result) != 1) {
            return false;
        } else {
            return $result;
        }
    }

    function all()
    {
        return $this->db->select('*')
        ->from('users')
        ->get()
        ->result();
    }

    function get_by_id($id)
    {
        return $this->db->select('*')
        ->from('users')
        ->where('id', $id)
        ->get()
        ->row();
    }

}