<?php
class Controller_Base extends Controller
{
	public $_template = 'index';
	public $_login_user = array();
	public $_view_data = array();

	public function before()
	{
		$session = Session::forge('cookie');
		$session->set_config('cookie_path', '/');

		$this->_template = str_replace('Controller_', '', Request::main()->controller).'_';
		if ($this->_template == 'Index_') $this->_template = '';
		$this->_template .= Request::active()->action;
		$this->_view_data['page'] = strtolower($this->_template);
		$this->_template = str_replace('_', DS, strtolower($this->_template));

		$this->_view_data['login_user'] = null;
		if (Auth::check())
		{
			$user_id = Auth::get_user_id();
			$this->_login_user = Model_User::find_by_pk(Arr::get($user_id, 1));
			$this->_view_data['login_user'] = $this->_login_user->to_array();
		}

		$this->_view_data['info_messages'] = array();
		$this->_view_data['error_messages'] = array();

		$this->_view_data['page_type'] = SList::PAGE_DEFAULT;
	}

	public function return()
	{
		return Response::forge(View::forge($this->_template, $this->_view_data));
	}
}
