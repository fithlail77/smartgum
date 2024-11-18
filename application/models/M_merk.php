<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_merk extends CI_Model
{
    public function getMerk($id = '')
    {
        if ($id) {
            return $this->db->get_where('merk', ['id' => $id])->row_array();
        } else {
            return $this->db->get('merk')->result();
        }
    }

    public function saveMerk($data)
    {
        return $this->db->insert('merk', $data);
    }

    public function updateMerk($data, $id)
    {
        return $this->db->update('merk', $data, ['id' => $id]);
    }
}


/* End of file M_merk_model.php and path \application\models\M_merk_model.php */
