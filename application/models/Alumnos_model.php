<?php
class Alumnos_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_alumno($alumno = FALSE)
{
        if ($alumno === FALSE)
        {
                $query = $this->db->get('alumnos');
                return $query->result_array();
        }

        $query = $this->db->get_where('alumnos', array('alumno' => $alumno));
        return $query->row_array();
}
}