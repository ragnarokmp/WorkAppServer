<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Author: Team Ragnarok - Mobile programming 2014/2015
* Description: Exercise controller class
*/

class Exercise extends CI_Controller {

    function __construct(){

        parent::__construct();

        $this->load->model('exercise_model');
    }

    /**
     * Index
     *
     * @access public
     * @author Team Ragnarok
     */
    public function index(){

        $this->load->model('exercise_model');

        $data['exercises'] = $this->exercise_model->getAllExercise();

        $this->load->view('header_view');
        $this->load->view('exercise_view', $data);
        $this->load->view('footer_view');
    }

    /**
     * Restituisce la lista degli esercizi presenti sul database
     *
     * @access public
     * @author Team Ragnarok
     */
    public function getAllExercise(){

        $exercises = $this->exercise_model->getAllExercise();

        $root = array(
            "root" => $exercises,
        );

        echo json_encode($root);
    }
}

/* End of file exercise.php */
/* Location: ./application/controllers/exercise.php */