<?php
class M_pengguna extends CI_Model{
	function get_pengguna(){
		$hsl=$this->db->query("SELECT * FROM tbl_user");
		return $hsl;
	}
	function simpan_pengguna($nama,$username,$password,$level,$telpon,$email){
		$hsl=$this->db->query("INSERT INTO tbl_user(user_nama,user_username,user_password,user_level,user_status,user_telpon,user_email) VALUES ('$nama','$username',md5('$password'),'$level','1','$telpon','$email')");
		return $hsl;
	}
	function update_pengguna_nopass($kode,$nama,$username,$level,$telpon,$email){
		$hsl=$this->db->query("UPDATE tbl_user SET user_nama='$nama',user_username='$username',user_level='$level',user_telpon='$telpon',user_email='$email'  WHERE user_id='$kode'");
		return $hsl;
	}
	function update_pengguna($kode,$nama,$username,$password,$level,$telpon,$email){
		$hsl=$this->db->query("UPDATE tbl_user SET user_nama='$nama',user_username='$username',user_password=md5('$password'),user_level='$level',user_telpon='$telpon',user_email='$email' WHERE user_id='$kode'");
		return $hsl;
	}
	function update_status($kode){
		$hsl=$this->db->query("UPDATE tbl_user SET user_status='0' WHERE user_id='$kode'");
		return $hsl;
	}
}