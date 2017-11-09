<?php
class Soc_model extends CI_Model {


        public function get_soc()
        {
          $this->load->database();
          $query = $this->db->query('SELECT * FROM Société');
                return $query->result();
        }
      }
