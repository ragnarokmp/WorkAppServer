<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Author: Team Ragnarok - Mobile programming 2014/2015
* Description: Dashboard controller class
*/

class Dashboard extends CI_Controller {

    function __construct(){

        parent::__construct();

        $this->load->library('session');
        $logged_in = $this->session->userdata("logged_in_user");

        if(! $logged_in){
            redirect('/login');
        }

        $this->load->library('form_validation');
    }

    /**
     * Index
     *
     * @access public
     * @author Team Ragnarok
     */
    public function index(){

        redirect('/exercise');
    }

    /**
     * Effettua il logout
     *
     * @access public
     * @param
     * @author Team Ragnarok
     */
    public function logout(){

        $this->load->library('session');
        $this->session->sess_destroy();

        redirect('/login');
    }
}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */