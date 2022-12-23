<?php
class Topsis_model extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
  }

  public function get_tabel_topsis()
  {

    $this->db->select('*')
     ->from('topsis_alternatives')
     ->join('topsis_evaluations', 'topsis_alternatives.id_alternative = topsis_evaluations.id_alternative', 'left')
     ->join('topsis_criterias', 'topsis_evaluations.id_criteria=topsis_criterias.id_criteria', 'left');
     $query = $this->db->get();
     return $query->result_array();

    // $this->db->join('topsis_alternatives', 'topsis_alternatives.id_alternative=topsis_evaluation.id_alternative', 'left');
    // $this->db->join('topsis_criterias', 'topsis_criterias.id_criteria=topsis_evaluation.id_criteria', 'left');

    // $query = $this->db->get('topsis_evaluations');
    // return $query->result_array();
  }

  public function get_nama_crit()
  {

    $this->db->select('*')
     ->from('topsis_criterias');
     $query = $this->db->get();
     return $query->result_array();

    // $this->db->join('topsis_alternatives', 'topsis_alternatives.id_alternative=topsis_evaluation.id_alternative', 'left');
    // $this->db->join('topsis_criterias', 'topsis_criterias.id_criteria=topsis_evaluation.id_criteria', 'left');

    // $query = $this->db->get('topsis_evaluations');
    // return $query->result_array();
  }
  public function get_nama_alt()
  {

    $this->db->select('*')
     ->from('topsis_evaluations')
     ->join('topsis_alternatives', 'topsis_alternatives.id_alternative = topsis_evaluations.id_alternative', 'left');
     $query = $this->db->get();
     return $query->result_array();

    // $this->db->join('topsis_alternatives', 'topsis_alternatives.id_alternative=topsis_evaluation.id_alternative', 'left');
    // $this->db->join('topsis_criterias', 'topsis_criterias.id_criteria=topsis_evaluation.id_criteria', 'left');

    // $query = $this->db->get('topsis_evaluations');
    // return $query->result_array();
  }

  public function get_tabell1()
  {

    $sql = "
    SELECT 
    b.name,c.criteria,a.value,c.weight,c.attribute
  FROM 
    topsis_evaluations a
    JOIN 
      topsis_alternatives b USING(id_alternative)
    JOIN 
      topsis_criterias c USING(id_criteria)
    ";
    $query = $this->db->query($sql);
    return $query;

    // $this->db->join('topsis_criterias', 'topsis_criterias.id_criteria=topsis_evaluations.id_criteria', 'left');
    // $this->db->join('topsis_alternatives', 'topsis_alternatives.id_alternative=topsis_evaluations.id_alternative', 'left');
    // $query = $this->db->get('topsis_evaluations');
    // return $query->result_array();

  }

  public function get_bobot()
  {
    $query = $this->db->get('bobot_saw');
    return $query->result_array();
  }

  public function min_harga()
  {
    $this->db->select_min('harga');
    $query = $this->db->get('data');
    if ($query->num_rows() > 0) {
      return $query->row()->harga;
    } else {
      return 0;
    }
  }

  public function max_harga()
  {
    $this->db->select_max('harga');
    $query = $this->db->get('data');
    if ($query->num_rows() > 0) {
      return $query->row()->harga;
    } else {
      return 0;
    }
  }

  public function max_ram()
  {
    $this->db->select_max('ram');
    $query = $this->db->get('data');
    if ($query->num_rows() > 0) {
      return $query->row()->ram;
    } else {
      return 0;
    }
  }

  public function max_memori()
  {
    $this->db->select_max('memori');
    $query = $this->db->get('data');
    if ($query->num_rows() > 0) {
      return $query->row()->memori;
    } else {
      return 0;
    }
  }

  public function min_memori()
  {
    $this->db->select_min('memori');
    $query = $this->db->get('data');
    if ($query->num_rows() > 0) {
      return $query->row()->memori;
    } else {
      return 0;
    }
  }

  public function max_processor()
  {
    $this->db->select_max('processor');
    $query = $this->db->get('data');
    if ($query->num_rows() > 0) {
      return $query->row()->processor;
    } else {
      return 0;
    }
  }

  public function max_kamera()
  {
    $this->db->select_max('kamera');
    $query = $this->db->get('data');
    if ($query->num_rows() > 0) {
      return $query->row()->kamera;
    } else {
      return 0;
    }
  }

  public function min_kamera()
  {
    $this->db->select_min('kamera');
    $query = $this->db->get('data');
    if ($query->num_rows() > 0) {
      return $query->row()->kamera;
    } else {
      return 0;
    }
  }

  public function set_data()
  {
    $data = array(
      'nama' => $this->input->post('nama'),
      'harga' => $this->input->post('harga'),
      'ram' => $this->input->post('ram'),
      'memori' => $this->input->post('memori'),
      'processor' => $this->input->post('processor'),
      'kamera' => $this->input->post('kamera'),
    );

    return $this->db->insert('data', $data);
  }

  public function get_data_id($id = FALSE)
  {
    $query = $this->db->get_where('data', array('id' => $id));
    return $query->row_array();
  }

  public function update_data($id)
  {
    $data = array(
      'nama' => $this->input->post('nama'),
      'harga' => $this->input->post('harga'),
      'ram' => $this->input->post('ram'),
      'memori' => $this->input->post('memori'),
      'processor' => $this->input->post('processor'),
      'kamera' => $this->input->post('kamera'),
    );

    $this->db->where('id', $id);
    return $this->db->update('data', $data);
  }

  public function update_data_bobot()
  {
    $data = array(
      'C1' => $this->input->post('C1'),
      'C2' => $this->input->post('C2'),
      'C3' => $this->input->post('C3'),
      'C4' => $this->input->post('C4'),
      'C5' => $this->input->post('C5'),
    );

    return $this->db->update('bobot_saw', $data);
  }

  public function delete_data($id)
  {
    return $this->db->delete('data', array('id' => $id));
  }

  public function get_all()
  {
    $this->db->order_by('nilai', 'desc');
    $this->db->limit(7);
    $this->db->join('data', 'data.id=hasil_saw.id', 'right');
    return $this->db->get('hasil_saw');
  }
}
