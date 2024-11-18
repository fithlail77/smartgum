<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('admin/user');
        }

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['menu'] = 'Login';
            $data['title'] = 'Halaman Login';
            $this->load->view('include/auth-header', $data);
            $this->load->view('auth/index');
            $this->load->view('include/auth-footer');
        } else {
            $this->_cekLogin();
        }
    }

    private function _cekLogin()
    {
        $username = $this->input->post('username');
        $pass = $this->input->post('password');
        $user = $this->db->get_where('users', ['username' => $username])->row_array();

        //jika user ada
        if ($user) {
            //jika user aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($pass, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);

                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else if ($user['role_id'] == 3) {
                        redirect('user/manager');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username Tidak Aktif!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username Tidak Terdaftar!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Terima Kasih</div>');
        redirect('auth');
    }
}

/* End of file Auth.php and path \application\controllers\Auth.php */
