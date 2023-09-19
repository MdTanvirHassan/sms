<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Staff_model'); // Load the Staff_model
    }

    public function index()
    {
        // Load the staff_model and retrieve data
        $data['staff_id'] = $this->Staff_model->getAll();

        // Check if data is found
        if (!$data['staff_id']) {
            $this->show_404();
            return;
        }

        // Load a view to display the data
        $this->load->view('home', $data);
    }


}
