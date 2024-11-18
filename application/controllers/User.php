<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $username = $this->session->userdata('username');
        $user = $this->db->get_where('users', ['username' => $username])->row_array();

        if ($username == '') {
            redirect('auth');
        } else {
            if ($user['role_id'] == 2) {
                $data['menu'] = 'Beranda';
                $data['title'] = 'Dashboard Manajemen Aset';
                $data['user'] = $user;
                $data['auth'] = $this->m_auth->getUser();
                $this->load->view('include/header', $data);
                $this->load->view('include/sidebar-user', $data);
                $this->load->view('admin/index', $data);
                $this->load->view('include/footer');
            } else {
                redirect('user/manager');
            }
        }
    }

    public function manager()
    {
        $username = $this->session->userdata('username');
        $user = $this->db->get_where('users', ['username' => $username])->row_array();

        if ($username == '') {
            redirect('auth');
        } else {
            if ($user['role_id'] == 3) {
                $data['menu'] = 'Beranda';
                $data['title'] = 'Dashboard Manajemen Aset';
                $data['user'] = $user;
                $data['auth'] = $this->m_auth->getUser();
                $this->load->view('include/header', $data);
                $this->load->view('include/sidebar-mgr', $data);
                $this->load->view('admin/index', $data);
                $this->load->view('include/footer');
            }
        }
    }
}
