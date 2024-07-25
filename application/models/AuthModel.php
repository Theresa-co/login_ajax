<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthModel extends CI_Model
{

  function auth_check($username, $password)
  {
    $this->db->select("*");
    $this->db->from("tb_user");
    $this->db->where("username", $username);
    $query = $this->db->get();
    $user = $query->row();

    if (!empty($user)) {

      if (password_verify($password, $user->password)) {

        return $query->result();
      } else {

        return FALSE;
      }
    } else {

      return FALSE;
    }
  }
}
