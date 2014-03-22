<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class portfolio_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function all()
    {
        return $this->db->select('*')
        ->from('portfolio')
        ->get()
        ->result();
    }

    function get_by_id($id)
    {
        return $this->db->select('*')
        ->from('portfolio')
        ->where('id', $id)
        ->get()
        ->row();
    }

    function get_works_with_client($filter)
    {
        $this->db->select('*')
        ->from('portfolio')
        ->join('clients', 'portfolio.client_id = clients.id', 'left');

        if(isset($filter['category_id'])) {
            $this->db->where('portfolio.category_id', $filter['category_id']);
        }

        if(isset($filter['id'])) {
            $this->db->where('portfolio.id', $filter['id']);
        }

        return $this->db->get()
        ->result();
    }

    function get_categories()
    {
        return array(
                array('id' => 1, 'category_name' => 'Marka Mimarileri'),
                array('id' => 2, 'category_name' => 'Web Sayfaları'),
                array('id' => 3, 'category_name' => 'Afişler'),
                array('id' => 4, 'category_name' => 'Baskılar'),
                array('id' => 5, 'category_name' => 'Filmler'),
                array('id' => 6, 'category_name' => 'Diğerleri')
            );
    }

    function get_category($id)
    {
        if ($id == 1) {
            return 'Marka Mimarileri';
        } else if ($id == 2) {
            return 'Web Sayfaları';
        } else if ($id == 3) {
            return 'Afişler';
        } else if ($id == 4) {
            return 'Baskılar';
        } else if ($id == 5) {
            return 'Filmler';
        } else if ($id == 6) {
            return 'Diğerleri';
        }
    }

    function get_client_categories($client_id)
    {
        return $this->db->select('category_id')
        ->from('portfolio')
        ->where('client_id', $client_id)
        ->group_by('category_id')
        ->get()
        ->result();
    }

}