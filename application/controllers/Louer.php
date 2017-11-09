<?php
class Louer extends CI_Controller {

  function __construct(){
      parent::__construct();
      $this->load->model('Dvd_model');
      $this->load->helper('url_helper');
  }
  public function view($numD = NULL)
          {
                  $this->load->model('Dvd_model', '', TRUE);
                $data['Dvd'] = $this->Dvd_model->getByNum($numD);
                  $this->load->view('header.php');
                  $this->load->view('view.php', $data);
          }
public function index()
        {
                $this->load->model('Dvd_model', '', TRUE);
                $titre['query'] = $this->Dvd_model->get_dvd();
                $this->load->view('header.php');
                $this->load->view('louer.html', $titre);
        }

public function add($numD = NULL){
                $this->load->model('Dvd_model', '', TRUE);
                $this->load->helper('form');
                $this->load->library('form_validation');
                $data['Dvd'] = $this->Dvd_model->getByNum($numD);

         $this->form_validation->set_rules('titreD','titreD', 'required');
         $this->form_validation->set_rules('auteurD', 'auteurD' , 'required');
         $this->form_validation->set_rules('annéeD', 'annéeD', 'required');
         $this->form_validation->set_rules('catégorieD', 'catégorieD', 'required');
         $this->form_validation->set_rules('nombreD', 'nombreD', 'required');
         $this->form_validation->set_rules('societeD', 'societeD', 'required');

         if($this->form_validation->run()=== false){
             $this->load->view('header.php');
             $this->load->view('create.php',$data);

         }
         else{
             $this->Dvd_model->set_news($numD);
             redirect( base_url() . '/Louer/index');

         }
     }

public function delete($numD = NULL)
      {
          $this->load->model('Dvd_model', '', TRUE);
          $news_item = $this->Dvd_model->get_dvd($numD);
          $this->Dvd_model->delete($numD);
          redirect( base_url() . '/Louer/index');
      }
}
