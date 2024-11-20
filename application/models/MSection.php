<?php

class MSection extends CI_Model
{
    public $number_section;
    public $name_section;
    public $icon_section;
    public $text_section;
    public $updated_at;

    public function get()
    {
        $this->db->order_by('created_at', 'DESC');
        $result = $this->db->get('tb_section')->result_array();

        return $result;
    }

    public function getSortByNumber()
    {
        $this->db->order_by('number_section', 'ASC');
        $result = $this->db->get('tb_section')->result_array();

        return $result;
    }

    public function getById($id)
    {
        $result = $this->db->get_where('tb_section', ['id_section' => $id])->row_array();

        return $result;
    }

    public function create()
    {
        $post = $this->input->post();

        $this->number_section = $post['number_section'];
        $this->name_section = $post['name_section'];
        $this->icon_section = $post['icon_section'];
        $this->text_section = $post['text_section'];
        $this->updated_at = date('Y-m-d H:i:s');

        $query = $this->db->insert('tb_section', $this);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function udpate($id)
    {
        $post = $this->input->post();

        $this->number_section = $post['number_section'];
        $this->name_section = $post['name_section'];
        $this->icon_section = $post['icon_section'];
        $this->text_section = $post['text_section'];
        $this->updated_at = date('Y-m-d H:i:s');

        $query = $this->db->update('tb_section', $this, ['id_section' => $id]);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function destroy($id)
    {
        $query = $this->db->delete('tb_section', ['id_section' => $id]);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}
