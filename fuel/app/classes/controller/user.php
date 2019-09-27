<?php
class Controller_User extends Controller_User_Base
{
	public function before()
	{
		parent::before();
	}

	public function action_index()
	{
		return $this->return();
	}
}
