<?php

/**
 * Albums.php
 *
 * Controller to load the albums_model and run the methods within that model and pass the data returned to the view.
 *
 * PHP version 5
 *
 *
 * @category   WebElevate 5.1
 * @package    SSWD Assessment 1 - PHP Web App (19th Nov 2017)
 * @author     Therese Kavanagh <therese.kavanagh@webelevate.ie>
 * @copyright  2017 Therese Kavanagh
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    Version 1.0
 */

/**
 * Albums Class
 */

class Albums extends CI_Controller {

        /**
         * constructor to load the albums_model
         */

        public function __construct()
        {
                parent::__construct();

                $this->load->model('albums_model');
                
        }

        /**
         * default method to get list of albums from the db using the model's get_albums() method and pass the results to the view 
         */

        public function index() 
        {

                $data['album'] = $this->albums_model->get_albums();

                $this->load->view('albums/index', $data); // passing data into the view

        }

        /**
         * view method to get the matching album from the db based on the 'album_id' passed in the url as $id & using the model's get_albums() method and pass the results to the view 
         */

        public function view($id = NULL) {

                $data['album_item'] = $this->albums_model->get_albums($id);

                /*
                 * if no id is passed in the url then show the 404 error page 
                 */

                if (empty($data['album_item']))
                {
                        show_404();
                }

                $data = $this->albums_model->get_albums($id);

                $this->load->view('albums/album', $data);
        }

}

?>