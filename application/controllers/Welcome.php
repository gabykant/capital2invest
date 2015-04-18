<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('ion_auth','form_validation'));
        $this->load->helper(array('url','language'));
        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
        $this->lang->load('auth');
    }


    public function index(){
        $this->data['message'] = '';
        $this->data['identity'] = array('name' => 'identity',
                        'id' => 'identity',
                        'type' => 'text',
                        'value' => $this->form_validation->set_value('identity'),
                );
                $this->data['password'] = array('name' => 'password',
                        'id' => 'password',
                        'type' => 'password',
                );
        $this->form_validation->set_rules('identity', 'Identity', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == true) {
            
            $remember = (bool) $this->input->post('remember');

            if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)) {
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                //$user_group = $this->ion_auth->get_users_groups($this->session->userdata("user_id"));
                if($this->ion_auth->is_admin()) { echo "<h1>Admin</h1>";}
                else{    echo "<h1>User</h1>";}
                exit(0);
                //redirect('dashboard', 'refresh');
            }else{
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect('/', 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
            }
        }
        $this->load->view('auth/login', $this->data);
    }
    public function register() {
        $this->data['message_create'] = '';
        
//        if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
//            redirect('welcome', 'refresh');
//	}

        $tables = $this->config->item('tables','ion_auth');

        //validate form input
        $this->form_validation->set_rules('first_name', $this->lang->line('create_user_validation_fname_label'), 'required');
        //$this->form_validation->set_rules('last_name', $this->lang->line('create_user_validation_lname_label'), 'required');
        $this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email|is_unique['.$tables['users'].'.email]');
        $this->form_validation->set_rules('phone', $this->lang->line('create_user_validation_phone_label'), 'required');
        //$this->form_validation->set_rules('company', $this->lang->line('create_user_validation_company_label'), 'required');
        $this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
        $this->form_validation->set_rules('password_confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required');

        if ($this->form_validation->run() == true) {
            //$username = strtolower($this->input->post('first_name')) . ' ' . strtolower($this->input->post('last_name'));
            $username = strtolower($this->input->post('first_name'));
            $email    = strtolower($this->input->post('email'));
            $password = $this->input->post('password');

            $additional_data = array(
                    'first_name' => $this->input->post('first_name'),
//                    'last_name'  => $this->input->post('last_name'),
//                    'company'    => $this->input->post('company'),
                    'phone'      => $this->input->post('phone'),
            );
        }
        if ($this->form_validation->run() == true && $this->ion_auth->register($username, $password, $email, $additional_data)){
            //check to see if we are creating the user
            //redirect them back to the admin page
            $this->session->set_flashdata('message', $this->ion_auth->messages());
            redirect("dashboard", 'refresh');
        }else {
            //display the create user form
            //set the flash data error message if there is one
            $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

            $this->data['identity'] = array('name' => 'email',
                'id' => 'identity',
                'type' => 'text',
                'value' => $this->form_validation->set_value('identity'),
            );
            $this->data['password'] = array('name' => 'password',
                'id' => 'password',
                'type' => 'password',
            );
            $this->data['first_name'] = array(
                'name'  => 'first_name',
                'id'    => 'first_name',
                'type'  => 'text',
                'value' => $this->form_validation->set_value('first_name'),
            );
            $this->data['last_name'] = array(
                    'name'  => 'last_name',
                    'id'    => 'last_name',
                    'type'  => 'text',
                    'value' => $this->form_validation->set_value('last_name'),
            );
            $this->data['email'] = array(
                    'name'  => 'email',
                    'id'    => 'email',
                    'type'  => 'text',
                    'value' => $this->form_validation->set_value('email'),
            );
            $this->data['company'] = array(
                    'name'  => 'company',
                    'id'    => 'company',
                    'type'  => 'text',
                    'value' => $this->form_validation->set_value('company'),
            );
            $this->data['phone'] = array(
                    'name'  => 'phone',
                    'id'    => 'phone',
                    'type'  => 'text',
                    'value' => $this->form_validation->set_value('phone'),
            );
            $this->data['password'] = array(
                    'name'  => 'password',
                    'id'    => 'password',
                    'type'  => 'password',
                    'value' => $this->form_validation->set_value('password'),
            );
            $this->data['password_confirm'] = array(
                    'name'  => 'password_confirm',
                    'id'    => 'password_confirm',
                    'type'  => 'password',
                    'value' => $this->form_validation->set_value('password_confirm'),
            );
            $this->data['city'] = array(
                    'name'  => 'city',
                    'id'    => 'city',
            );
            $this->data['city_op'] = array(
                    '1' => 'Yaounde'
            );
            $this->data['town'] = array(
                    'name'  => 'town',
                    'id'    => 'town',
                    'type'  => 'text',
            );
            $this->data['pays'] = array(
                    'name'  => 'pays',
                    'id'    => 'pays',
                    'type'  => 'text',
            );
                $this->load->view('auth/register', $this->data);
        }
    }
    
    public function register2() {
        $data['message'] = '';
        $data['attribute'] = '';
        $this->load->view('auth/register-project', $data);
    }
}
