<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Author: Team Ragnarok - Mobile programming 2014/2015
* Description: Exercise model class
*/

class Exercise_model extends CI_Model{

    function __construct(){

        parent::__construct();

        $this->load->database();
    }

    /**
     * Index
     *
     * @access Recupera dal database tutti gli esercizi
     * @param
     * @return array
     */
    public function getAllExercise(){

        // Run the query
        $query = $this->db->get('exercise');

        $result = array();

        if ($query->num_rows() > 0){

            foreach ($query->result() as $row){

                $array = array(

                    "intExId"		=> $row->idexercise,
                    "name" 	        => $row->name,
                    "series" 		=> $row->series,
                    "repetition"    => $row->repetitions,
                    "recovery"		=> $row->pause,
                    "muscles"		=> $row->muscles,
                    "frequency"		=> $row->frequency,
                    "usedWeight"	=> $row->used_weight,
                );

                array_push($result, $array);
            }
        }

        return $result;
    }
}

/* End of file exercise_model.php */
/* Location: ./application/models/exercise_model.php */