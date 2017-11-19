<?php

/**
 * Tracks.php
 *
 * Controller to load the tracks_model and run the methods within that model and pass the data returned to the view.
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

class Tracks extends CI_Controller {

        /**
         * constructor to load the tracks_model
         */

        public function __construct()
        {
                parent::__construct();

                $this->load->model('tracks_model');
                
        }

        /**
         * default method to show 404 error page if no album_id is passed in the url 
         */

        public function index($id = NULL)
        {

                //$data['tracks'] = $this->tracks_model->getTracks();

                //$data['album_title'] = $this->tracks_model->getAlbumInfo();

                if (empty($data['track_list']))
                {
                        show_404();
                }

                $this->load->view('tracks/track_list', $data);
                //$data['track'] = $this->tracks_model->get_tracks();

                //$this->load->view('tracks/index', $data); // passing data into the view

                /*$data['track_list'] = $this->tracks_model->get_tracks($id);

                if (empty($data['track_list']))
                {
                        show_404();
                }
                $data = $this->tracks_model->get_tracks($id);

                var_dump($data);

                $this->load->view('tracks/track_listing', $data);*/

        }

        /**
         * view method to get the matching tracks and album name from the db based on the album_id passed in the url as $id using the model's getTracks() and getAlbumInfo() methods and pass the results to the view 
         */

        public function view($id = NULL) {
                
                $data['track_list'] = $this->tracks_model->get_tracks($id);
                $data['album_title'] = $this->tracks_model->get_album_info($id);

                /*
                 * if no id is passed in the url then show the 404 error page 
                 */
                if (empty($data['track_list']))
                {
                        show_404();
                }
                //$data = $this->tracks_model->get_tracks($id);

                //var_dump($data);

                $this->load->view('tracks/track_list', $data);
        }

}

?>