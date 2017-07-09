<?php
namespace App\Http\Controllers;

class PagesController extends Controller
{
	
	public function getIndex(){
		return view('pages/welcome');
	}

	public function getAbout(){
		$first = 'Kenny';
		$last = 'Alan';
		$full = $first . " " . $last;
		$email = 'alangkien96@gmail.com';
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $full;

		return view('pages.about')->withData($data);
	}

	public function getContact(){
		return view('pages.contact');
	}

	public function postContact(){

	}
}