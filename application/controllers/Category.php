<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{

    public function index()
    {
        $username = $this->session->userdata('username');
        $user = $this->db->get_where('users', ['username' => $username])->row_array();

        if ($username == '') {
            redirect('auth');
        } else {
            if ($user['role_id'] == 1) {
                $data['menu'] = 'Kategori';
                $data['title'] = 'Manajemen Kategori Barang';
                $data['user'] = $user;
                $data['cate'] = $this->m_category->getCat();

                $this->load->view('include/header', $data);
                $this->load->view('include/sidebar', $data);
                $this->load->view('admin/category', $data);
                $this->load->view('include/footer');
            } else if ($user['role_id'] == 3) {
                redirect('user/manager');
            } else {
                redirect('user');
            }
        }
    }

    public function addCat()
    {
        $data = [
            'kategori' => $this->input->post('addCate'),
            'createdAt' => Date('Y-m-d'),
            'createdBy' => $this->session->userdata('username')
        ];

        $this->m_category->saveCate($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Tambah Data Berhasil!</div>');
        redirect('category');
    }

    public function editCat()
    {
        $data = [
            'kategori' => $this->input->post('editCate')
        ];

        $id = $this->input->post('idcat');
        $this->m_category->updateCate($data, $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Ubah Data Berhasil!</div>');
        redirect('category');
    }
}

/* End of file Category.php and path \application\controllers\Category.php */
