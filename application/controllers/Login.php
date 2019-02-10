<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
	        parent::__construct();
					@session_start();
	    }

	public function index()
	{
		$this->load->view('Login');

	}

	public function login_facebook(){
        // Load login & profile view
        $postData = json_decode($_POST['response']);

        if(!empty($postData->id)){
          echo "Login Success";

          @session_start();
          $_SESSION['profileId'] = $postData->id;
					$_SESSION['profileFname'] = $postData->first_name;
          $_SESSION['profileLname'] = $postData->last_name;
          $_SESSION['profileEmail'] = $postData->email;
					$_SESSION['Status'] = 'MPMPage';

					// return true;

        }else{
          echo "Login Fail";

        }
    }

		public function Logout()
		{
			$this->load->view('Login');
			@session_start();
			@session_destroy();
			redirect("Login");

		}

	// public function saveUserData() {
	// 		// Decode json data and get user profile data
	// 		// การส่ง Post รูปแบบ Json
	// 		$postData = json_decode($_POST['response']);
	//
	// 		// Preparing data for database insertion
	// 		$userData['oauth_provider'] = $_POST['oauth_provider'];
	// 		$userData['oauth_uid']         = $postData->id;
	// 		$userData['first_name']     = $postData->first_name;
	// 		$userData['last_name']         = $postData->last_name;
	// 		$userData['email']             = $postData->email;
	// 		$userData['gender']         = $postData->gender;
	// 		$userData['locale']         = $postData->locale;
	// 		$userData['cover']             = $postData->cover->source;
	// 		$userData['picture']         = $postData->picture->data->url;
	// 		$userData['link']             = $postData->link;
	//
	// 		// Insert or update user data
	// 		 $userID = $this->Facebook_Model->checkUser($userData);
	//
	// 		return true;
	// }

}
