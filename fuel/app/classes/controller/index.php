<?php
class Controller_Index extends Controller_Base
{
	public function before()
	{
		parent::before();
	}

	public function action_index()
	{
		$this->_view_data['events'] = Util::to_array(Model_Event::find(array(
			'limit' => 5,
			'order_by' => array('event_register_time' => 'desc'),
		)));
		return $this->return();
	}
}
