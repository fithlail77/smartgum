<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Road extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $username = $this->session->userdata('username');
        $user = $this->db->get_where('users', ['username' => $username])->row_array();

        if ($username == '') {
            redirect('auth');
        } else {
            if ($user['role_id'] == 1) {
                $data['menu'] = 'Infrastruktur Jalan';
                $data['title'] = 'Web Dashboard System';
                $data['user'] = $user;
                $data['auth'] = $this->m_auth->getUser();

                $this->load->view('include/header', $data);
                $this->load->view('include/sidebar', $data);
                $this->load->view('admin/road', $data);
                $this->load->view('include/footer');
            } else {
                $data['menu'] = 'Infrastruktur Jalan';
                $data['title'] = 'Web Dashboard System';
                $data['user'] = $user;
                $data['auth'] = $this->m_auth->getUser();

                $this->load->view('include/header', $data);
                $this->load->view('include/sidebar-mgr', $data);
                $this->load->view('manager/road', $data);
                $this->load->view('include/footer');
            }
        }
    }
}
