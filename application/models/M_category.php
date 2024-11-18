<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_category extends CI_Model
{
    public function getCat($id = '')
    {
        if ($id) {
            return $this->db->get_where('kategori', ['id' => $id])->row_array();
        } else {
            return $this->db->get('kategori')->result();
        }
    }

    public function saveCate($data)
    {
        return $this->db->insert('kategori', $data);
    }

    public function updateCate($data, $id)
    {
        return $this->db->update('kategori', $data, ['id' => $id]);
    }
}


/* End of file M_category_model.php and path \application\models\M_category_model.php */
