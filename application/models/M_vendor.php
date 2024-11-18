<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_vendor extends CI_Model
{
    public function getVendor($id = '')
    {
        if ($id) {
            return $this->db->get_where('vendor', ['id' => $id])->row_array();
        } else {
            return $this->db->get('vendor')->result();
        }
    }

    public function VenCode()
    {
        $this->db->select('RIGHT(vendor_code,4) as vencode', false);
        $this->db->order_by('vendor_code', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('vendor');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->vencode) + 1;
        } else {
            $kode = 1;
        }
        $batas = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $kodeven = "VEN-" . $batas;
        return $kodeven;
    }

    public function saveVen($data)
    {
        return $this->db->insert('vendor', $data);
    }

    public function updateVen($data, $id)
    {
        return $this->db->update('vendor', $data, ['id' => $id]);
    }
}


/* End of file M_vendor_model.php and path \application\models\M_vendor_model.php */
