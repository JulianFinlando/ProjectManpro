<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Calmodel extends CI_Model {

public function get_events($start, $end)
{
    return $this->db->where("start >=", $start)->where("end <=", $end)->get("mou");
}

public function add_event($data)
{
    $this->db->insert("mou", $data);
}

public function get_event($id)
{
    return $this->db->where("ID", $id)->get("mou");
}

public function update_event($id, $data)
{
    $this->db->where("ID", $id)->update("mou", $data);
}

public function delete_event($id)
{
    $this->db->where("ID", $id)->delete("mou");
}

}		
?>