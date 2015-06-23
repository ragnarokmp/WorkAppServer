<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Author: Team Ragnarok - Mobile programming 2014/2015
* Description: Form validation extended
*/

class MY_Form_validation extends CI_Form_validation {

    function __construct(){
        parent::__construct();
    }

    /**
     * Check if email exist in database
     *
     * @access    public
     * @param    string
     * @return    bool
     */
    public function check_email_exist($email){

        $CI = & get_instance();

        $CI->load->database();
        $CI->load->library('encrypt');

        $CI->db->where('username', $email);

        // Run the query
        $query = $CI->db->get('users');

        // Let's check if there are any results
        if($query->num_rows() > 0){
            // If there is a user, return false
            return FALSE;
        }
        return TRUE;
    }
}

/* End of file MY_Form_validation.php */
/* Location: ./application/helpers/MY_Form_validation.php */ 