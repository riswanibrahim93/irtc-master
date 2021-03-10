<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Default method
	 */
	public function index()
    {
        return view('welcome.index');
	}

	public function summo()
	{
		return view('welcome.sumoRobot');
	}

	public function lineFollower()
	{
		return view('welcome.lineFollower');
	}

	public function cinematography() {
		return view('welcome.cinematography');
	}

	public function gameDevelopment() {
		return view('welcome.game-development');
	}

	public function internetOfThings() {
		return view('welcome.internetOfThings');
	}

	public function startupSummit() {
		return view('welcome.startupSummit');
	}
}
