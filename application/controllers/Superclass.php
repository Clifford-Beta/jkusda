<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superclass extends CI_Controller {

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
public function index()
	{
		
		$this->load->view('pages/index');
		

	}
public function calendar()
	{
		// $this->load->view('templates/header');
		$this->load->view('pages/calendar/body');
				// $this->load->view('templates/footer');


	}
public function login(){
	$this->load->view('pages/registrar');

}

public function membercheck()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/membercheck');
		$this->load->view('templates/footer');

	}

	public function checkmember(){

	  	$data=$this->input->post();
			$data['api-key']='KA83T9iQm4oK0Jjcnid4X7AQOvxFmwl5';
		$url= "http://localhost/jkusda_api/memberget";
		$ch = curl_init($url);
# Setup request to send json via POST.
	$payload = json_encode($data);


//echo 'payload is '.$payload;

curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
# Return response instead of printing.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
# Send request.
$result = curl_exec($ch);
curl_close($ch);
# Print response.
//echo 'result ---> '.$result;

if(json_decode($result,true)['status'] != false){
	$data = json_decode($result,true)['message'][0];
	// $data['message'] = 'ndimi';
	$this->load->view('templates/header', $data);
	$this->load->view('pages/edit_info', $data);
	$this->load->view('templates/footer', $data);
}else{
	// redirect(/);
	// $data["message"]=json_decode($result,true)['message'];
	$data["message"]="Oops!! Something Went Wrong";
	$data["hint"]="";
	$this->load->view('templates/header', $data);
	$this->load->view('pages/msg', $data);
	$this->load->view('templates/footer', $data);

}

	}

public function form_validate()
	{

		$data=$this->input->post();
		$data['name'] = $data['fname'].' '.$data['lname'];
		$data['api-key']='KA83T9iQm4oK0Jjcnid4X7AQOvxFmwl5';
		if($data['year_of_study']==7){
			$data['type']=2;
		}else{
			$data['type']=1;
		}
		$url= "http://localhost/jkusda_api/register";
		$ch = curl_init($url);
# Setup request to send json via POST.
	$payload = json_encode($data);


//echo 'payload is '.$payload;

curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
# Return response instead of printing.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
# Send request.
$result = curl_exec($ch);
curl_close($ch);
# Print response.
//echo 'result ---> '.$result;

if(json_decode($result,true)['status'] != false){

$data["message"]="Submitted Successfully";
$data["hint"]="";
	$this->load->view('templates/header',$data);
	$this->load->view('pages/msg',$data);
	$this->load->view('templates/footer',$data);

}else{
	// var_dump(json_decode($result,true)['message']);
	  $data["message"]="Oops!! something went wrong";
		$data["hint"]="";
		$this->load->view('templates/header',$data);
		$this->load->view('pages/msg',$data);
		$this->load->view('templates/footer',$data);
}

	}


	public function edited()
		{

			$data=$this->input->post();
			$data['api-key']='KA83T9iQm4oK0Jjcnid4X7AQOvxFmwl5';
			if($data['year_of_study']==7){
				$data['type']=2;
			}else{
				$data['type']=1;
			}
			$url= "http://localhost/jkusda_api/edit_member";
			$ch = curl_init($url);
	# Setup request to send json via POST.
		$payload = json_encode($data);


	//echo 'payload is '.$payload;

	curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
	curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
	# Return response instead of printing.
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	# Send request.
	$result = curl_exec($ch);
	curl_close($ch);
	# Print response.
	//echo 'result ---> '.$result;

	if(json_decode($result,true)['status'] != false){
		// $data['message'] = json_decode($result,true);
		$data['message'] = "Success!!";
		$data["hint"]="";
		// // $data['message'] = 'ndimi';
		// $this->load->view('templates/header', $data);
		// $this->load->view('pages/edit_info', $data);
		// $this->load->view('templates/footer', $data);
		$this->load->view('templates/header',$data);
		$this->load->view('pages/msg',$data);
		$this->load->view('templates/footer',$data);
	}else{
		// var_dump(json_decode($result,true)['message']);
		// $data["message"]=json_decode($result,true)['message'];
			$data["message"]="Oops!! Something went wrong ";
			$data["hint"]="Check your internet connection or you may have not changed your details.";
		$this->load->view('templates/header',$data);
		$this->load->view('pages/msg',$data);
		$this->load->view('templates/footer',$data);

	}

		}
	}
