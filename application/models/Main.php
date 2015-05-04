<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Model{

//mechanism for validating_data and returns true/false to caller.
  public function __construct(){
    parent::__construct();
    $this->load->helper(array('form','url'));
    $this->load->library('form_validation');
  }

	public function validate_data($data){
  //  $this->load->helper(array('form', 'url'));
	//	$this->load->library('form_validation');
    //Validation criteria for inputs 1-8;
    $this->form_validation->set_rules('input1', 'input1', 'required');
    $this->form_validation->set_rules('input2', 'input2', 'required');
    $this->form_validation->set_rules('input3', 'input3', 'required');
    $this->form_validation->set_rules('input4', 'input4', 'required');
    $this->form_validation->set_rules('input5', 'input5', 'required');
    $this->form_validation->set_rules('input6', 'input6', 'required');
    $this->form_validation->set_rules('input7', 'input7', 'required');
    $this->form_validation->set_rules('input8', 'input8', 'required');
    if (!$this->form_validation->run())
		{
      //return validation_errors();
      $this->session->set_flashdata("validations", validation_errors());
      return false;
		}
		else
		{
      return true;
		}
  }
//mechanics for validating a salt encoded login.
  public function validate_login($data){
    // $query = "SELECT input2,salt FROM table.field where input = ?";
    // $value = array($data['input1']);
    // $get_fields = $this->db->query($query,$value)->row_array();
    // $convertedpw = md5($data['input2'],$get_fields ['salt']);
    // if (  $convertedpw == $get_fields['input2']){
    //   return true;
    // }
    $this->session->set_flashdata("validations", "Username and/or Password is incorrect");
     return false;

    //$this->form_validation->set_rules('input1','input1', 'required'); //'trim|required|is_unique[table.field]
  }

//inserts data into a database
  public function create($data){
    //https://crackstation.net/hashing-security.htm for password generation!
    //$salt = $salt = base64_encode(mcrypt_create_iv(PBKDF2_SALT_BYTE_SIZE, MCRYPT_DEV_URANDOM));
  //  $convertedpw = md5($data['input2'],$get_fields ['salt']); <-- encrypts the password data here.
  //  $query = "INSERT into table.field (......,.....,.....,.....) values (????)"
    //  $values = ($data[''],)
      //$this->db->query($query,$values);
  }
//sets the session user data
  public function get_user($data){
    // $query = "SELECT id from table.field where input.type = ?"
    // $values = array($data['type']);
    // return $this->db->query($query,$values)->row_array;
  }
// gets all
  public function get_all(){
  //  $query = "SELECT * FROM table";
  //  return $this->db->query($query)->result_array;
  }

  public function destroy_session(){
    $this->session->sess_destroy();
  }

  public function update($data){
  //  UPDATE table_name SET column1=value, column2=value2,...WHERE some_column=some_value
  }
//other helpful sqls: SELECT DISTINCT 

}
