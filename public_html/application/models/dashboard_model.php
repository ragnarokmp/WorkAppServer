<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Author: Team Ragnarok - Mobile programming 2014/2015
* Description: Dashboard model class
*/

class Dashboard_model extends CI_Model{

    function __construct(){

        parent::__construct();

        $this->load->library('session');
        $this->load->database();
    }
}

/* End of file dashboard_model.php */
/* Location: ./application/models/dashboard_model.php */