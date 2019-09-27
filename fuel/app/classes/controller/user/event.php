<?php
class Controller_User_Event extends Controller_User_Base
{
	public function before()
	{
		parent::before();
	}

	public function action_index()
	{
		$this->_view_data['events'] = Util::to_array(Model_Event::find(array(
			'where' => array(
				'event_user_id' => $this->_login_user->id,
			),
			'order_by' => array('event_register_time' => 'asc'),
		)));
		return $this->return();
	}

	public function action_create()
	{
		return $this->action_edit();
	}

	public function action_edit()
	{
		$params = Input::param();
		$event_id = Arr::get($params, 'id');

		$event = Model_Event::find_one_by(array(
			'event_id' => $event_id,
			'event_user_id' => $this->_login_user->id,
		));
		if ( ! $event)
		{
			if ($event_id) Response::redirect('/user/event');
			$event = Model_Event::forge(array());
		}

		if (isset($params['action']))
		{
			$event->set($params);
			$event->event_register_time = date('Y-m-d H:i:s');
			$event->event_update_time = date('Y-m-d H:i:s');
			$event->event_user_id = $this->_login_user->id;

			//todo:バリデーション

			if ($params['action'] == 'confirm')
			{
				$this->_view_data['page_type'] = SList::PAGE_CONFIRM;
			}
			if ($params['action'] == 'save')
			{
				$db = Database_Connection::instance();
				$db->start_transaction();
				try
				{
					$event->save(false);
		
					$db->commit_transaction();

					$this->_view_data['page_type'] = SList::PAGE_COMPLETE;
				}
				catch (\Exception $ex)
				{
					$db->rollback_transaction();
				}
			}
		}

		$this->_view_data['params'] = $params;
		$this->_view_data['event'] = $event->to_array();
		return $this->return();
	}

	public function action_delete()
	{
		$params = Input::param();
		$event_id = Arr::get($params, 'id');

		$event = Model_Event::find_one_by(array(
			'event_id' => $event_id,
			'event_user_id' => $this->_login_user->id,
		));
		if ( ! $event)
		{
			Response::redirect('/user/event');
		}

		if (isset($params['action']))
		{
			if ($params['action'] == 'delete')
			{
				$db = Database_Connection::instance();
				$db->start_transaction();
				try
				{
					$event->delete();
		
					$db->commit_transaction();

					$this->_view_data['page_type'] = SList::PAGE_COMPLETE;
				}
				catch (\Exception $ex)
				{
					$db->rollback_transaction();
				}
			}
		}

		$this->_view_data['params'] = $params;
		$this->_view_data['event'] = $event->to_array();
		return $this->return();
	}
}
