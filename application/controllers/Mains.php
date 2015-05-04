<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mains extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
   public function __construct(){
     parent::__construct();
     $this->load->model("Main");
   }
	public function index()
	{
		$this->load->view('index');
	}

  public function register(){
    //json_decode
    if ($this->input->post('validate') == 'login')
    {
      if ($this->Main->validate_login($this->input->post()))
      {
        $this->Main->login($this->input->post());
        redirect("/login_page");
        exit();
      }


    }
    else
    {
      $result = $this->Main->validate_data($this->input->post());
      if($result)
      {
        $this->Main->create($this->input->post());
        $this->Main->login($this->input->post());
        redirect("/login_page");
        exit();
      }
    }
    redirect("/");
  }


  //public function '] = 'Mains';
  public function order_index(){
    $this->load->view('order_index');
  }

  public function single_product(){
    $this->load->view('single_product');
  }

  public function checkout(){
    $this->load->view('checkout');
  }

  public function admin_login(){
    $this->load->view ('admin_login');
  }

  public function admin_orders(){
    $this->load->view ('admin_orders');
  }

  public function admin_products(){
    $this->load->view ('admin_products');
  }

  public function admin_shipping(){
    $this->load->view ('admin_shipping');
  }

  public function admin_single_product(){
    $this->load->view ('admin_single_product');
  }





  public function destroy(){
    $this->Main->destroy();
  }



}
