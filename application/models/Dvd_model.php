<?php
class Dvd_model extends CI_Model {


        public function get_dvd()
        {
          $this->load->database();
          $query = $this->db->query('SELECT * FROM Dvd');
                return $query->result();
        }
        public function getByNum($numD){
                $this->load->database();
  $query = $this->db->get_where('Dvd',array('numD'=>$numD));
  return $query->row_array();
  }

  public function set_news($numD=0){
  $test=$this->input->post('numD');
        $this->load->helper('url');

        $data = array(

            'titreD' => $this->input->post('titreD'),
            'auteurD' => $this->input->post('auteurD'),
            'annéeD' => $this->input->post('annéeD'),
            'catégorieD' => $this->input->post('catégorieD'),
            'nombreD' => $this->input->post('nombreD'),
            'societeD' => $this->input->post('societeD'),
        );
        if($test) {
          $this->db->where('numD',$test);
    return $this->db->update('Dvd', $data);

        }else{

                return $this->db->insert('Dvd',$data);

        }
    }
    public function delete($numD) {
        return $this->db->where('numD',$numD)->delete(Dvd);
    }

      }
      ?>
