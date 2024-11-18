<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_divisi extends CI_Model
{
    public function getDiv($div_id = '')
    {
        if ($div_id) {
            return $this->db->get_where('divisi', ['div_id' => $div_id])->row_array();
        } else {
            return $this->db->get('divisi')->result();
        }
    }

    public function saveDiv($data)
    {
        return $this->db->insert('divisi', $data);
    }

    public function updateDiv($data, $id)
    {
        return $this->db->update('divisi', $data, ['div_id' => $id]);
    }
}


/* End of file M_divisi_model.php and path \application\models\M_divisi_model.php */
