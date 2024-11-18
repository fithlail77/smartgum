<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_type extends CI_Model
{
    public function getType($id = '')
    {
        if ($id) {
            return $this->db->get_where('tipe', ['tipe_id' => $id])->row_array();
        } else {
            return $this->db->get('tipe')->result();
        }
    }

    public function saveType($data)
    {
        return $this->db->insert('tipe', $data);
    }

    public function updateType($data, $id)
    {
        return $this->db->update('tipe', $data, ['tipe_id' => $id]);
    }
}


/* End of file M_type_model.php and path \application\models\M_type_model.php */
