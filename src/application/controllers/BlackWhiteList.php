<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**

 * Desarrollo del controlador: clientsController

 *

 * @author 

 */
use business\Response\Response;

class BlackWhiteList extends CI_Controller {


    public function __construct() {
        parent::__construct();
        require_once config_item('business-client-class');
        require_once config_item('business-response-class');

        $this->load->model('black_and_white_list_model', 'blackWhiteList');
    }

    public function insert_profile_in_white_list() {
        $datas = $this->input->post();
        return Response::ResponseOK()->toJson();
    }

    public function insert_profile_in_black_list() {
        $datas = $this->input->post();
        return Response::ResponseOK()->toJson();
    }

    public function delete_profile_in_white_list() {
        $datas = $this->input->post();
        return Response::ResponseOK()->toJson();
    }

    public function delete_profile_in_black_list() {
        $datas = $this->input->post();
        return Response::ResponseOK()->toJson();
    }

}
