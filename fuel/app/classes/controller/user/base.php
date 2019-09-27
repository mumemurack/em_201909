<?php
class Controller_User_Base extends Controller_Base
{
	public function before()
	{
		if ( ! Auth::check())
		{
			Response::redirect('/');
		}

		parent::before();
	}
}
