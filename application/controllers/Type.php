<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Type extends CI_Controller
{

    public function index()
    {
        $username = $this->session->userdata('username');
        $user = $this->db->get_where('users', ['username' => $username])->row_array();

        if ($username == '') {
            redirect('auth');
        } else {
            if ($user['role_id'] == 1) {
                $data['menu'] = 'Tipe Aset';
                $data['title'] = 'Manajemen Tipe Aset';
                $data['user'] = $user;
                $data['type'] = $this->m_type->getType();

                $this->load->view('include/header', $data);
                $this->load->view('include/sidebar', $data);
                $this->load->view('admin/tipe', $data);
                $this->load->view('include/footer');
            } else if ($user['role_id'] == 3) {
                redirect('user/manager');
            } else {
                redirect('user');
            }
        }
    }

    public function addType()
    {
        $data = [
            'tipe' => $this->input->post('addType'),
            'createdAt' => date('Y-m-d'),
            'createdBy' => $this->session->userdata('username')
        ];

        $this->m_type->saveType($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Tambah Data Berhasil!</div>');
        redirect('type');
    }

    public function editType()
    {
        $data = [
            'tipe' => $this->input->post('editType')
        ];

        $id = $this->input->post('idtype');
        $this->m_type->updateType($data, $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Ubah Data Berhasil!</div>');
        redirect('type');
    }
}

/* End of file Type.php and path \application\controllers\Type.php */
