<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_assets extends CI_Model
{
    public function getAll($id = '')
    {
        if ($id) {
            return $this->db->get_where('assets', ['id' => $id])->row_array();
        } else {
            return $this->db->get('assets')->result();
        }
    }
}


/* End of file M_assets_model.php and path \application\models\M_assets_model.php */
