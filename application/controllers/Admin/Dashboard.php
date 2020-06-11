<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
         $this->load->model('Dashboard_model');
    }

    public function index() {
        //  echo 'me';exit;
        $this->load->view('templates/header.php');
        $this->load->view('admin/dashboard/index.php');
        $this->load->view('templates/footer.php');
    }

    public function loaction() {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('location');
        $location['location'] = $query->result_array();
        $this->load->view('templates/header.php');
        $this->load->view('admin/dashboard/add_location.php', $location);
        $this->load->view('templates/footer.php');
    }

    public function add_location() {
        $data = array(
            'name' => $this->input->post('name'),
            'address' => $this->input->post('address')
        );
        $this->db->insert('location', $data);
        if ($this->db->affected_rows() > 0) {
            $lid = $insert_id = $this->db->insert_id();
            $res = array('status' => 200, 'msg' => 'Add record successfully!');
        } else {
            $res = array('status' => 500, 'msg' => 'record not saved !');
        }
        echo json_encode($res);
    }

    public function addClass() {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('class');
        $class['class'] = $query->result_array();
        $this->load->view('templates/header.php');
        $this->load->view('admin/dashboard/add_class.php',$class);
        $this->load->view('templates/footer.php');
    }
    
    public function add_class(){
         $data = array(
            'name' => $this->input->post('name'),
            'date'=>date('Y-m-d')
        );
        $this->db->insert('class', $data);
        if ($this->db->affected_rows() > 0) {
            $res = array('status' => 200, 'msg' => 'Add record successfully!');
        } else {
            $res = array('status' => 500, 'msg' => 'record not saved !');
        }
        echo json_encode($res);
    }
    
    public function schedule(){
       $data['Location']=  $this->Dashboard_model->get_location();
      // print_r($lcation); exit;
       $data['class']=    $this->Dashboard_model->get_classes();
       $this->load->view('templates/header.php');
       $this->load->view('admin/dashboard/schedule.php',$data);
       $this->load->view('templates/footer.php');  
    }

}

?>
