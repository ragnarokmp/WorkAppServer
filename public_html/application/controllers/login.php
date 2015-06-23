<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Author: Team Ragnarok - Mobile programming 2014/2015
* Description: Login controller class
*/

class Login extends CI_Controller {

    /**
     * Index
     *
     * @access Valida i campi nel form e richiama il modello per inizializzare la sessione
     * @param
     * @author Team Ragnarok
     */
    public function index(){

        $this->load->library('session');
        $logged_in = $this->session->userdata("logged_in_user");

        if($logged_in){
            redirect('/dashboard');
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

            //Imposto le regole per la validazione
            $this->form_validation->set_rules('email', ' email ', 'required|valid_email');
            $this->form_validation->set_rules('password', ' password ', 'required');

            //Eseguo il controllo del form
            if ($this->form_validation->run() == TRUE){

                //Se i controlli sono positivi
                $this->load->model('login_model');
                $result = $this->login_model->validate();

                if($result){
                    redirect('/dashboard');
                }
            }
        }

        $data = array();
        if($this->session->flashdata('msg_user'))
            $data['msg_user'] = $this->session->flashdata('msg_user');

        $this->load->view('header_view');
        $this->load->view('login_view', $data);
        $this->load->view('footer_view');
    }

    function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */