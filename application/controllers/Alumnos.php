<?php
class Alumnos extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('alumnos_model');
                $this->load->helper('url_helper');
        }

       
        public function index()
{
    $data['alumnos'] = $this->alumnos_model->get_alumno();
        $data['title'] = 'Alumnos';

        $this->load->view('templates/header', $data);
        $this->load->view('alumnos/index', $data);
        $this->load->view('templates/footer');
}

        public function view($alumno = NULL)
        {
                $data['alumno_item'] = $this->alumnos_model->get_alumno($alumno);

        if (empty($data['alumno_item']))
        {
                show_404();
        }

        $data['title'] = $data['alumno_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('alumnos/view', $data);
        $this->load->view('templates/footer');

        }
}