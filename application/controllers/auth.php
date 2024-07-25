<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function index()
  {
    //load view form login
    $this->load->view('auth');
  }

  public function auth_check()
  {
    //load model M_user
    $this->load->model('AuthModel');

    $username = $this->input->post('username');
    $password = $this->input->post('password');

    //cek login via model
    $check = $this->AuthModel->auth_check($username, $password);

    if (!empty($check)) {

      foreach ($check as $user) {

        //looping data user
        $session_data = array(
          'id'        => $user->id,
          'username'  => $user->username,
        );
        //buat session berdasarkan user yang login
        $this->session->set_userdata($session_data);
      }

      echo "success";
    } else {

      echo "error";
    }
  }
}
