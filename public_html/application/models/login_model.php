<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Author: Team Ragnarok - Mobile programming 2014/2015
* Description: Login model class
*/

class Login_model extends CI_Model{

    function __construct(){

        parent::__construct();

        $this->load->database();

        $this->load->library('session');
        $this->load->library('encrypt');
    }

    /**
     * Index
     *
     * @access Si occupa di validare i dati di login e di impostare la sessione
     * @param
     * @return boolean
     */
    public function validate(){

        // grab user input
        $email      = $this->security->xss_clean($this->input->post('email'));
        $password   = $this->security->xss_clean($this->input->post('password'));

        // Prep the query
        $this->db->where('email', $email);
        $this->db->where('password', md5($password));

        //used for check if registration is active (registration confirm module)
        //$this->db->where('active', TRUE);

        // Run the query
        $query = $this->db->get('user');

        // Let's check if there are any results
        if($query->num_rows() == 1){

            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                'logged_in_user'    => TRUE,
                'user_id'           => $row->iduser,
                'hash_user'         => $row->hash_user
            );

            $this->session->set_userdata($data);

            return TRUE;
        }

        // If the previous process did not validate
        // then return false.
        return FALSE;
    }
}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */