<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Company extends CI_Controller
{

    public function index()
    {
        $username = $this->session->userdata('username');
        $user = $this->db->get_where('users', ['username' => $username])->row_array();

        if ($username == '') {
            redirect('auth');
        } else {
            if ($user['role_id'] == 1) {
                $data['menu'] = 'Perusahaan';
                $data['title'] = 'Manajemen Perusahaan';
                $data['user'] = $user;
                $data['comp'] = $this->m_companies->getComp();

                $this->load->view('include/header', $data);
                $this->load->view('include/sidebar', $data);
                $this->load->view('admin/companies', $data);
                $this->load->view('include/footer');
            } else if ($user['role_id'] == 3) {
                redirect('user/manager');
            } else {
                redirect('user');
            }
        }
    }

    public function addComp()
    {
        $data = [
            'comp_code' => $this->input->post('addAlias'),
            'name' => $this->input->post('addComp'),
            'createdAt' => date('Y-m-d'),
            'createdBy' => $this->session->userdata('username')
        ];

        $this->m_companies->saveComp($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Tambah Data Berhasil!</div>');
        redirect('company');
    }

    public function editComp()
    {
        $data = [
            'comp_code' => $this->input->post('editAlias'),
            'name' => $this->input->post('editComp')
        ];

        $id = $this->input->post('idcomp');
        $this->m_companies->updateComp($data, $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Ubah Data Berhasil!</div>');
        redirect('company');
    }
}

/* End of file Company.php and path \application\controllers\Company.php */
