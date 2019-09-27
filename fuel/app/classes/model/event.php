<?php
class Model_Event extends Model_Base
{
	protected static $_table_name = 'em_event';
	protected static $_primary_key = 'event_id';
	protected static $_properties = array(
		'event_id',
		'event_title',
		'event_abstract',
		'event_user_id',
		'event_content',
		'event_register_time',
		'event_update_time',


	);
}
