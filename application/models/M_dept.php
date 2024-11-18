<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dept extends CI_Model
{
    public function getDept($dept_id = '')
    {
        if ($dept_id) {
            return $this->db->get_where('dept', ['dept_id' => $dept_id])->row_array();
        } else {
            return $this->db->get('dept')->result();
        }
    }

    public function saveDept($data)
    {
        return $this->db->insert('dept', $data);
    }

    public function updateDept($data, $id)
    {
        return $this->db->update('dept', $data, ['dept_id' => $id]);
    }
}


/* End of file M_dept_model.php and path \application\models\M_dept_model.php */
