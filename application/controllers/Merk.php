<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Merk extends CI_Controller
{

    public function index()
    {
        $username = $this->session->userdata('username');
        $user = $this->db->get_where('users', ['username' => $username])->row_array();

        if ($username == '') {
            redirect('auth');
        } else {
            if ($user['role_id'] == 1) {
                $data['menu'] = 'Merk';
                $data['title'] = 'Manajemen Merk';
                $data['user'] = $user;
                $data['merk'] = $this->m_merk->getMerk();

                $this->load->view('include/header', $data);
                $this->load->view('include/sidebar', $data);
                $this->load->view('admin/merk', $data);
                $this->load->view('include/footer');
            } else if ($user['role_id'] == 3) {
                redirect('user/manager');
            } else {
                redirect('user');
            }
        }
    }

    public function addMerk()
    {
        $data = [
            'merk' => $this->input->post('addMerk'),
            'createdAt' => Date('Y-m-d'),
            'createdBy' => $this->session->userdata('username')
        ];

        $this->m_merk->saveMerk($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Tambah Data Berhasil!</div>');
        redirect('merk');
    }

    public function editMerk()
    {
        $data = [
            'merk' => $this->input->post('editMerk')
        ];

        $id = $this->input->post('idmerk');
        $this->m_merk->updateMerk($data, $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Ubah Data Berhasil!</div>');
        redirect('merk');
    }
}

/* End of file Merk.php and path \application\controllers\Merk.php */
