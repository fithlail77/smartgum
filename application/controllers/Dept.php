<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dept extends CI_Controller
{

    public function index()
    {
        $username = $this->session->userdata('username');
        $user = $this->db->get_where('users', ['username' => $username])->row_array();

        if ($username == '') {
            redirect('auth');
        } else {
            if ($user['role_id'] == 1) {
                $data['menu'] = 'Departemen';
                $data['title'] = 'Manajemen Departemen';
                $data['user'] = $user;
                $data['dept'] = $this->m_dept->getDept();
                $data['comp'] = $this->m_companies->getComp();

                $this->load->view('include/header', $data);
                $this->load->view('include/sidebar', $data);
                $this->load->view('admin/departemen', $data);
                $this->load->view('include/footer');
            } else if ($user['role_id'] == 3) {
                redirect('user/manager');
            } else {
                redirect('user');
            }
        }
    }

    public function addDept()
    {
        $data = [
            'company' => $this->input->post('addComp'),
            'dept_code' => $this->input->post('addEstCode'),
            'name' => $this->input->post('addEst'),
            'createdAt' => date('Y-m-d'),
            'createdBy' => $this->session->userdata('username')
        ];

        $this->m_dept->saveDept($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Tambah Data Berhasil!</div>');
        redirect('dept');
    }

    public function editDept()
    {
        $data = [
            'company' => $this->input->post('editComp'),
            'dept_code' => $this->input->post('editEstCode'),
            'name' => $this->input->post('editEst')
        ];

        $id = $this->input->post('iddept');
        $this->m_dept->updateDept($data, $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Ubah Data Berhasil!</div>');
        redirect('dept');
    }
}

/* End of file Dept.php and path \application\controllers\Dept.php */
