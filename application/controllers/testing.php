<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testing extends CI_Controller
{

  // public function __construct()
  // {

  //   parent::__construct();

  //   //cek session login
  //   if ($this->session->userdata("id") == "") {
  //     redirect('/auth');
  //   }
  // }

  public function index()
  {
    //load view form login
    $this->load->view('testing');
  }
}
