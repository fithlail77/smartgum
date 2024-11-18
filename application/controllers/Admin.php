<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $username = $this->session->userdata('username');
        $user = $this->db->get_where('users', ['username' => $username])->row_array();

        if ($username == '') {
            redirect('auth');
        } else {
            if ($user['role_id'] == 1) {
                $data['menu'] = 'Beranda';
                $data['title'] = 'Web Dashboard System';
                $data['user'] = $user;
                $data['auth'] = $this->m_auth->getUser();
                $this->load->view('include/header', $data);
                $this->load->view('include/sidebar', $data);
                $this->load->view('admin/index', $data);
                $this->load->view('include/footer');
            } else if ($user['role_id'] == 3) {
                redirect('user/manager');
            } else {
                redirect('user');
            }
        }
    }

    public function user()
    {
        $username = $this->session->userdata('username');
        $user = $this->db->get_where('users', ['username' => $username])->row_array();

        if ($username == '') {
            redirect('auth');
        } else {
            if ($user['role_id'] == 1) {
                $data['menu'] = 'user';
                $data['title'] = 'User Managements';
                $data['user'] = $user;
                $data['auth'] = $this->m_auth->getUser();
                $data['role'] = $this->db->get('user_role')->result();

                $this->load->view('include/header', $data);
                $this->load->view('include/sidebar', $data);
                $this->load->view('admin/user', $data);
                $this->load->view('include/footer');
            } else if ($user['role_id'] == 3) {
                redirect('user/manager');
            } else {
                redirect('user');
            }
        }
    }
}

/* End of file Admin.php and path \application\controllers\Admin.php */
