<?php

class Tracks extends CI_Controller {

        public function __construct()
        {
                parent::__construct();

                $this->load->model('tracks_model');
                
                //$this->load->helper('url_helper');
        }


        public function index($id = NULL) // create the main method to get albums from the db using the model's get_albums() method and pass the results to the view
        {

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

        public function view($id = NULL) {
                
                $data['track_list'] = $this->tracks_model->get_tracks($id);

                $data['album_title'] = $this->tracks_model->get_albuminfo($id);

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