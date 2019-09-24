<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    function __construct()
    {
    	parent::__construct();
    }

    public function get_all_user()
    {
        // Urutkan berdasar abjad
        $this->db->order_by('id',"desc");
        $query = $this->db->get('user');
        return $query->result();
    }

    public function create_user($username,$password,$nama,$role)
    {
        $data = array(
            'username'     => $username,
            'password'     => $password,
            'nama'         => $nama,
            'role'         => $role
        );
        
        return $this->db->insert('user', $data);
    }
    public function update_user($username,$password,$nama,$role)
    {
        // mengedit user
        
        $data = array(
            'password'     => $password,
            'nama'         => $nama,
            'role'         => $role
            );
        $this->db->where('username', $username);
        $result=$this->db->update('user',$data);    

        return $result;
    }

    public function delete_user($id)
    {
        // menghapus User
        $this->db->where('id', $id);
        $result = $this->db->delete('user');
        return $result;
    }

}