<?php
class Controller_User_Register extends Controller_Base
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


		if (isset($params['action']))
		{
			$email = Arr::get($params, 'email');
			$password = Arr::get($params, 'password');


			//TODO:バリデーション

			if ($params['action'] == 'confirm')
			{
				$this->_view_data['page_type'] = SList::PAGE_CONFIRM;
			}
			elseif ($params['action'] == 'save')
			{
				$db = Database_Connection::instance();
				$db->start_transaction();
				try
				{
					$user_id = Auth::create_user(
						$email,
						$password,
						$email
					);

					$db->commit_transaction();

					if (Auth::login($email, $password))
					{
						$this->_view_data['page_type'] = SList::PAGE_COMPLETE;
					}
				}
				catch (\Exception $ex)
				{
					$db->rollback_transaction();
				}
			}
		}

		$this->_view_data['params'] = $params;
		return $this->return();
	}
}
