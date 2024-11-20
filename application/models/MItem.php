<?php

class MItem extends CI_Model
{
    public $id_section;
    public $number_item;
    public $name_item;
    public $text_item;
    public $updated_at;

    public function get()
    {
        $this->db->order_by('created_at', 'DESC');
        $result = $this->db->get('tb_item')->result_array();

        return $result;
    }

    public function getByIdSectionAndSortByNumber($id_section)
    {
        $this->db->order_by('number_item', 'ASC');
        $result = $this->db->get_where('tb_item', ['id_section' => $id_section])->result_array();

        return $result;
    }

    public function getById($id)
    {
        $result = $this->db->get_where('tb_item', ['id_item' => $id])->row_array();

        return $result;
    }

    public function create()
    {
        $post = $this->input->post();

        $this->id_section = $post['id_section'];
        $this->number_item = $post['number_item'];
        $this->name_item = $post['name_item'];
        $this->text_item = $post['text_item'];
        $this->updated_at = date('Y-m-d H:i:s');

        $query = $this->db->insert('tb_item', $this);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function update($id)
    {
        $post = $this->input->post();

        $this->id_section = $post['id_section'];
        $this->number_item = $post['number_item'];
        $this->name_item = $post['name_item'];
        $this->text_item = $post['text_item'];
        $this->updated_at = date('Y-m-d H:i:s');

        $query = $this->db->update('tb_item', $this, ['id_item' => $id]);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function destroy($id)
    {
        $query = $this->db->delete('tb_item', ['id_item' => $id]);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}
