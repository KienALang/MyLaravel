<?php
namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller
{
	
	public function getIndex(){
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		//Or We can use Post::latest()->limit(4)->get();﻿

		return view('pages/welcome')->withPosts($posts);
	}

	public function getAbout(){
		$data = 'Kenny';
		return view('pages.about')->withData($data);
	}

	public function getContact(){
		return view('pages.contact');
	}

	public function postContact(){

	}
}