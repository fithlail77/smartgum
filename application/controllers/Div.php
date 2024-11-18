<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Div extends CI_Controller
{

    public function index()
    {
        $username = $this->session->userdata('username');
        $user = $this->db->get_where('users', ['username' => $username])->row_array();

        if ($username == '') {
            redirect('auth');
        } else {
            if ($user['role_id'] == 1) {
                $data['menu'] = 'Divisi';
                $data['title'] = 'Manajemen Divisi';
                $data['user'] = $user;
                $data['div'] = $this->m_divisi->getDiv();
                $data['dept'] = $this->m_dept->getDept();

                $this->load->view('include/header', $data);
                $this->load->view('include/sidebar', $data);
                $this->load->view('admin/divisi', $data);
                $this->load->view('include/footer');
            } else if ($user['role_id'] == 3) {
                redirect('user/manager');
            } else {
                redirect('user');
            }
        }
    }

    public function addDiv()
    {
        $est = $this->input->post('addEst');
        $div = $this->input->post('addDiv');

        $data = [
            'div_code' => "$est-$div",
            'divisi' => $div,
            'dept_code' => $est,
            'createdAt' => date('Y-m-d'),
            'createdBy' => $this->session->userdata('username')

        ];

        $this->m_divisi->saveDiv($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Tambah Data Berhasil!</div>');
        redirect('div');
    }

    public function editDiv()
    {
        $est = $this->input->post('editEst');
        $div = $this->input->post('editDiv');

        $data = [
            'div_code' => "$est-$div",
            'divisi' => $div,
            'dept_code' => $est
        ];

        $id = $this->input->post('iddiv');
        $this->m_divisi->updateDiv($data, $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Ubah Data Berhasil!</div>');
        redirect('div');
    }
}

/* End of file Div.php and path \application\controllers\Div.php */
