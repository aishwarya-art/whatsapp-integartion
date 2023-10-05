<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
use Twilio\Rest\Client;
require_once APPPATH.'libraries/vendor/autoload.php';
class Twilio extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->library('twilio_lib');
        }

	public function index()
	{

        $recipient_number = "registered twilio number";
        $sender_number = "twilio account number";
        $message = "Your appointment is coming up on 30/06/2014 at 4:15 PM";
        $send = $this->twilio->sendmessage($recipient_number, $sender_number, $message);
        return true;
	}
}
