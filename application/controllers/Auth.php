<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

   public function index()
   {
      $data['title'] = 'Z8Games - Free Gaming, Evolved.';

      $this->load->view('templates/header', $data);
      $this->load->view('landing');
      $this->load->view('templates/footer');
   }

   public function registration()
   {
      $data['title'] = 'Z8Games - Free Gaming, Evolved.';
      $this->load->view('templates/header', $data);
      $this->load->view('signup');
      $this->load->view('templates/footer');
   }
}
