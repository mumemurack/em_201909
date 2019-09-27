<?php
class Controller_User_Logout extends Controller_Base
{
	public function before()
	{
		parent::before();
	}

	public function action_index()
	{
		Auth::logout();
		Response::redirect('/');
		return $this->return();
	}
}
