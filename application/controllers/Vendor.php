<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vendor extends CI_Controller
{

    public function index()
    {
        $username = $this->session->userdata('username');
        $user = $this->db->get_where('users', ['username' => $username])->row_array();

        if ($username == '') {
            redirect('auth');
        } else {
            if ($user['role_id'] == 1) {
                $data['menu'] = 'Supplier';
                $data['title'] = 'Manajemen Supplier';
                $data['user'] = $user;
                $data['ven'] = $this->m_vendor->getVendor();
                $data['vencode'] = $this->m_vendor->VenCode();

                $this->load->view('include/header', $data);
                $this->load->view('include/sidebar', $data);
                $this->load->view('admin/vendor', $data);
                $this->load->view('include/footer');
            } else if ($user['role_id'] == 3) {
                redirect('user/manager');
            } else {
                redirect('user');
            }
        }
    }

    public function addVen()
    {
        $data = [
            'vendor_code' => $this->input->post('addCodeVen'),
            'vendor' => $this->input->post('addVen'),
            'createdAt' => date('Y-m-d'),
            'createdBy' => $this->session->userdata('username')
        ];

        $this->m_vendor->saveVen($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Tambah Data Berhasil!</div>');
        redirect('vendor');
    }

    public function editVen()
    {
        $data = [
            'vendor' => $this->input->post('editVen')
        ];

        $id = $this->input->post('idven');
        $this->m_vendor->updateVen($data, $id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Ubah Data Berhasil!</div>');
        redirect('vendor');
    }
}

/* End of file Vendor.php and path \application\controllers\Vendor.php */
