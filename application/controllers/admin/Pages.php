<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Admin_Controller {

  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    // Load dashboard
    $this->template->set('title', 'Admin | Pages');
    $this->template->load('admin/templates/dashboard', 'admin/dashboard', $this->data);
  }

  public function datatable()
  {
    // Load sample datatable and form
    $this->template->set('title', 'Admin | Datatable');
    $this->template->load('admin/templates/datatable', 'admin/datatable', $this->data);
  }

  public function blank()
  {
    $this->template->set('title', 'Admin | Blank Page');
    $this->template->load('admin/templates/blank_page', 'admin/blank_page', $this->data);
  }

}
