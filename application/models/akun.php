<?php
class akun extends CI_Model{

    function registrasi($data){
        return $this->db->insert('users',$data);
    }

	function login_a($username,$password){
        //query awal
        // $this->db->where('username',$username);
        // $this->db->where('password',$password);
        // $periksa = $this->db->get('users');

        //coba tak gabung ae query e
        $periksa = $this->db->get_where('users',array('username'=>$username,'password'=>$password));
        if($periksa->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    }

    function kontakkami($data){
        return $this->db->insert('kontak',$data);
    }


     //function cekid_regis($username){
    //     $this->db->where('username',$username);
    //     $cek = $this->db->get('users')->result_array();
    //     if(isset($cek[0])){
    //         return true;
    //     }
    //     else{
    //         return false;
    //     }
    // }

}
?>