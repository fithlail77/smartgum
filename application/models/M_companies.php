<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_companies extends CI_Model
{
    public function getComp($comp_id = '')
    {
        if ($comp_id) {
            return $this->db->get_where('companies', ['comp_id' => $comp_id])->row_array();
        } else {
            return $this->db->get('companies')->result();
        }
    }

    public function saveComp($data)
    {
        return $this->db->insert('companies', $data);
    }

    public function updateComp($data, $id)
    {
        return $this->db->update('companies', $data, ['comp_id' => $id]);
    }
}


/* End of file M_companies_model.php and path \application\models\M_companies_model.php */
