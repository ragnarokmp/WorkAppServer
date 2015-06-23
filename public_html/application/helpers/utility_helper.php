<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Author: Team Ragnarok - Mobile programming 2014/2015
* Description: Utility functions
*/

/**
 * Genera il link per la cartella assets.
 *
 * @access public
 * @param folder, esempio css/
 * @return string url
 */
function asset_url($folder){

    return base_url().'assets/'.$folder;
}

/**
 * Genera il link per l'accesso ad una pagina del sistema
 *
 * @access public
 * @param pagina
 * @return string url
 */
function page_url($page){

    return base_url('index.php/'.$page);
}

/* End of file utility_helper.php */
/* Location: ./application/helpers/utility_helper.php */