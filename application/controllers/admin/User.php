<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Admin_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->helper('language');

    $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load(array('auth', 'ion_auth'));
  }

  public function index()
  {
    $this->template->set('title', 'Admin | Profile');
    $this->template->load('admin/templates/profile', 'admin/profile', $this->data);
  }

  public function update_profile()
  {
    $this->form_validation->set_rules('first_name', 'First name', 'trim|required');
    $this->form_validation->set_rules('last_name', 'Last name', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

    if ($this->form_validation->run() == TRUE) {
      $user_id = $this->input->post('user_id');
      $new_data = array(
                  'first_name' => $this->input->post('first_name'),
                  'last_name' => $this->input->post('last_name'),
                  'email' => $this->input->post('email'));
      $this->ion_auth->update($user_id, $new_data);
      $this->session->set_flashdata('message', "<div style='color:#00a65a;'>" . $this->ion_auth->messages() . "</div>");
      redirect(site_url('admin/user/update_profile'));
    } else {
      $this->template->set('title', 'Admin | Update Profile');
			$this->template->load('admin/templates/profile', 'admin/update_profile', $this->data);
    }
  }

	public function update_password()
	{

    $this->form_validation->set_rules('old', $this->lang->line('change_password_validation_old_password_label'), 'required');
		$this->form_validation->set_rules('new', $this->lang->line('change_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[new_confirm]');
		$this->form_validation->set_rules('new_confirm', $this->lang->line('change_password_validation_new_password_confirm_label'), 'required');

    if ($this->form_validation->run() == TRUE) {
      $identity = $this->session->userdata('identity');

      $change = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));

      $messages = array('success' => $this->ion_auth->messages(),
                       'error' => $this->ion_auth->errors());

      if ($change)
			{
				//if the password was successfully changed
        $this->ion_auth->logout();
        $this->session->set_flashdata('message', "<div style='color: green;'>" . $this->ion_auth->messages() . "</div>");
        redirect('login', 'refresh');
			}
			else
			{
				$this->session->set_flashdata('message', "<div style='color: red;'>" . $this->ion_auth->errors() . "</div>");
        redirect('admin/user/update_password', 'refresh');
			}
    } else {
      // display the form
			// set the flash data error message if there is one
      $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');


			$this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');

      $this->data['old_password'] = array(
				'name' => 'old',
				'id'   => 'old',
				'type' => 'password',
        'class' => 'form-control',
        'placeholder' => 'Old password',
        'autofocus' => 'autofocus'
			);

			$this->data['new_password'] = array(
				'name'    => 'new',
				'id'      => 'new',
				'type'    => 'password',
				'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
        'class' => 'form-control',
        'placeholder' => 'New password'
			);

      $this->data['new_password_confirm'] = array(
				'name'    => 'new_confirm',
				'id'      => 'new_confirm',
				'type'    => 'password',
				'pattern' => '^.{'.$this->data['min_password_length'].'}.*$',
        'class' => 'form-control',
        'placeholder' => 'Confirm New Password'
			);

      $this->data['user_id'] = array(
				'name'  => 'user_id',
				'id'    => 'user_id',
				'type'  => 'hidden',
				'value' => $this->data['current_user']->id,
			);

      $this->template->set('title', 'Admin | Update Password');
			$this->template->load('admin/templates/profile', 'admin/update_password', $this->data);
    }
	}

}
