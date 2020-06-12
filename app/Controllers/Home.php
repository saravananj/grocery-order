<?php
/**
 * @desc Home controller that renders the React app
 * @author Saravanan Jayabalan [https://saravananj.com]
 */
namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home/index');
	}
}
