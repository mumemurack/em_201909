<?php
class Controller_User_Login extends Controller_Base
{
	public function before()
	{
		parent::before();
	}

	public function action_index()
	{
		$params = Input::param();

		if (Auth::check())
		{
			Response::redirect('/user');
		}

		if (Arr::get($params, 'action') == 'login')
		{
			if (Auth::login(Arr::get($params, 'username'), Arr::get($params, 'password')))
			{
				$this->_view_data['page_type'] = SList::PAGE_COMPLETE;
				Response::redirect('/user');
			}
		}
		return $this->return();
	}
}
