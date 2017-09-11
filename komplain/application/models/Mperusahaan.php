<?php

/*
 * 
 */
class MPerusahaan extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    /** Get All User
     * @return boolean
     */
    function getAllPerusahaan() {
        $query = $this->db->get("perusahaan");
        return checkRes($query);
    }

    function getAllKategori() {
        $query = $this->db->get("kategori");
        return checkRes($query);
    }

    function getPerusahaan($id) {

        $query = $this->db->get_where("perusahaan", array('id_perusahaan'=>$id));
        return checkRow($query);
    }

    function getKategori($id) {

        $query = $this->db->get_where("kategori", array('id_kategori'=>$id));
        return checkRow($query);
    }

    function getUser($id_user) {

        $this->db->join('user_level', 'user_level.id_level= user.id_level', 'inner');
        $query = $this->db->get_where("user", array('id_user'=>$id_user));
        return checkRow($query);
    }

    function cek($username,$password){
            $this->db->where("username",$username);
            $this->db->where("password",$password);
            return $this->db->get("perusahaan");
    }

    function getUsername($username) {
        $query = $this->db->get_where("user", array('username'=>$username));
        return checkRow($query);
    }

    function getEmail($email) {
        $query = $this->db->get_where("user", array('email'=>$email));
        return checkRow($query);
    }
    
    /** Get User Profile by Order Id
     * @param unknown $id_user
     * @return boolean
     */
    function getUserOrderId($order_id) {
        $this->db->join('user', 'order.id_user = user.id_user','inner');
        $query = $this->db->get_where("order", array('order.order_id'=> $order_id));
        return checkRow($query);
    }

    /** Register User
     * @param unknown $data
     */
    function insertPerusahaan($data) {
       //unset($data['id_user']);
       $this->db->insert("perusahaan",$data);
       return $this->db->insert_id();
    }

    function insertKategori($data) {
       //unset($data['id_user']);
       $this->db->insert("kategori",$data);
       return $this->db->insert_id();
    }

    function updatePerusahaan($data,$id){
        
        $this->db->where('id_perusahaan',$id);
        $this->db->update('perusahaan',$data);
    }

    function updateKategori($data,$id){
        
        $this->db->where('id_kategori',$id);
        $this->db->update('kategori',$data);
    }
    
    
    function login($username, $password) {
        $this->db->select('*');
        $query = $this->db->get_where('user', array(
            'username' => $username,
            'password' => md5($password)
        ));
        // echo $this->db->last_query();
        if ($query->num_rows() == 1) {
            $row = $query->row();
            $id_user = $row->id_user;
            $this->user_login($id_user);
            //echo $this->db->last_query();exit;
            return $query->row(); // if data is true
        } else {
            return false; // if data is wrong
        }
    }

    function loginDonatur($username, $password) {
        $this->db->select('*');
        $query = $this->db->get_where('donatur', array(
            'username' => $username,
            'password' => md5($password)
        ));
        // echo $this->db->last_query();
        if ($query->num_rows() == 1) {
            $row = $query->row();
            $id_donatur = $row->id_donatur;
            $this->user_login($id_donatur);
            //echo $this->db->last_query();exit;
            return $query->row(); // if data is true
        } else {
            return false; // if data is wrong
        }
    }
    
    /** Check if user insert Address & others
     * @param unknown $id_user
     */
    function checkUserDetails($id_user) {
        $this->db->where('address is NOT NULL',null, false);
        $query = $this->db->get_where('user', array('id_user'=> $id_user));
        if(checkRow($query)) {
            return checkRow($query);
        } else {
            return false;
        }
    }
    
    function user_login($id_user) {
        $data['id_user'] = $id_user;
        $data['login'] = date('Y-m-d H:i:s');
        $this->db->insert('user_log', $data);
        return $this->db->insert_id();
    }
    
    function user_logout($id_user) {
        $last = $this->check_last_login($id_user);
        $data['logout'] = date('Y-m-d H:i:s');
        $this->db->update('user_log', $data, array(
            'id_user' => $id_user,
            'login' => $last->login
        ));
    }
    
    function check_last_login($id_user) {
        $this->db->order_by("id_log", "desc");
        $this->db->limit(1);
        $query = $this->db->get_where('user_log', array(
            'id_user' => $id_user,
            'logout' => NULL,
            'DATE(login)' => date('Y-m-d')
        ));
        $this->db->last_query();
        return $query->row();
    }

    function checkUserId($id_user){
        $query = $this->db->get_where("user", array('id_user'=>$id_user));
        //echo $this->db->last_query();
        return checkRow($query);
    }

    function delete($id){
        //unset($data['id']);
        $this->db->delete('perusahaan', array('id_perusahaan' => $id));
    }

    function deleteKategori($id){
        //unset($data['id']);
        $this->db->delete('kategori', array('id_kategori' => $id));
    }

}
