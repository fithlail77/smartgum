<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Asset extends CI_Controller
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
                $data['menu'] = 'Assets';
                $data['title'] = 'Manajemen Asssets';
                $data['user'] = $user;
                $data['aset'] = $this->m_assets->getAll();

                $this->load->view('include/header', $data);
                $this->load->view('include/sidebar', $data);
                $this->load->view('admin/aset', $data);
                $this->load->view('include/footer');
            } else if ($user['role_id'] == 3) {
                redirect('user/manager');
            } else {
                redirect('user');
            }
        }
    }
}

/* End of file Asset.php and path \application\controllers\Asset.php */
