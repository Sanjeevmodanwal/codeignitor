<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Dashboard_model extends CI_Model {

    public function get_location() {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('location');
        return $query->result_array();
    }

    public function get_classes() {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('class');
        return $query->result_array();
    }

    public function get_schedule_data() {
        $this->db->select('*');
       
        $this->db->from('location');
       //$this->db->order_by('id', 'DESC');
        $this->db->join('schedule', 'schedule.location_id = location.id');
        $this->db->join('class', 'class.id = schedule.class_id');
        $this->db->order_by('schedule.id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

}
