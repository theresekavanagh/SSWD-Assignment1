<?php
class Albums extends CI_Controller {

        

        public function __construct()
        {
                parent::__construct();

                $this->load->model('albums_model');
                
                //$this->load->helper('url_helper');
        }

        /*public function index($artist_id = NULL)
        {
                $data['album'] = $this->albums_model->get_albums($artist_id);

                if (empty($data['album_item']))
                {
                        show_404();
                } 

                $data['title'] = $data['album_item']['title'];

                $this->load->view('templates/header', $data);
                $this->load->view('albums/index', $data);
                $this->load->view('templates/footer');
        }

        public function view($artist_id = NULL)
        {
                $data['album_item'] = $this->albums_model->get_albums($artist_id);
        }*/

        public function index() // create the main method to get albums from the db using the model's get_albums() method and pass the results to the view
        {
                

                $data['album'] = $this->albums_model->get_albums();

                //$data['artist_name'] = $albums['artist_name'];
                //$data['album_name'] = $albums['album_name'];

                //if (empty($data['album_item']))
                //{
                //        show_404();
                //} 

                //var_dump($data);

                /* think this should go in the view

                foreach ($data as $album_item) {

                        foreach ($album_item as $album_info) {

                                //echo $album_info['album_name'] . " by " .$album_info['artist_id'] . "<br>";

                                echo "what's going on?";

                                 $albumName = $album_info['album_name'];
                                 $albumArtist = $album_info['artist_name'];


                                
                                
                        }


                }*/


                $this->load->view('albums', $data); // passing data into the view

                //$data['title'] = $data['album_name']['title'];

                //$this->load->view('templates/header', $data);
                //$this->load->view('albums/index', $data);
                //$this->load->view('templates/footer');
        }

        /*public function view()
        {
                $data['album_item'] = $this->albums_model->get_albums();
                echo "is this even working?";
        }*/

        

}



?>