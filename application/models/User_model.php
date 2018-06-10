<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user by user_id
     */
    public function login_user($username,$password){
 
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
       
        if($query=$this->db->get())
        {
            return $query->row_array();
        }
        else{
          return false;
        }
       
       
      }
      
    function get_user($user_id)
    {
        $query = $this->db->get_where("users",array("user_id"=>$user_id));
        $data = $query->result(); 
        return $data;

        // return $this->db->get_where('users',array('user_id'=>$user_id))->row_array();
    }
        
    /*
     * Get all users
     */
    function get_all_users()
    {
        $this->db->order_by('user_id', 'desc');
        return $this->db->get('users')->result_array();
    }
        
    /*
     * function to add new user
     */
    function add_user($params)
    {
        $this->db->insert('users',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update user
     */
    function update_user($user_id,$params)
    {
        $this->db->where('user_id',$user_id);
        $this->db->update('users',$params);
        return $this->db->affected_rows();
    }
    
    /*
     * function to delete user
     */
    function delete_user($user_id)
    {
        return $this->db->delete('users',array('user_id'=>$user_id));
    }
}
