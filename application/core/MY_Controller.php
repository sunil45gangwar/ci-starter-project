<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }
}

/**
 * Admin Controller Class
 */
class Admin_Controller extends MY_Controller
{

  function __construct()
  {
    parent::__construct();
    if (!$this->ion_auth->logged_in()) {
      redirect('auth/login', 'refresh');
    }
    if (!$this->ion_auth->is_admin()) {
      $this->session->set_flashdata('message', 'You must be an administrator to view this page');
      redirect('auth/login');
    }
    $this->data['current_user'] = $this->ion_auth->user()->row();
  }

}

/**
 * Member Class
 */
class Member_Controller extends MY_Controller
{

  function __construct()
  {
    parent::__construct();
  }

}
