<?php
class Model_User extends Model_Base
{
	protected static $_table_name = 'em_user';
	protected static $_primary_key = 'id';

	protected static $config = array(
		'id' => array(
			'rule' => '',
			'label' => 'id',
			'default' => '',
		),
		'username' => array(
			'rule' => '',
			'label' => 'username',
			'default' => '',
		),
		'password' => array(
			'rule' => '',
			'label' => 'password',
			'default' => '',
		),
		'group' => array(
			'rule' => '',
			'label' => 'group',
			'default' => '',
		),
		'email' => array(
			'rule' => '',
			'label' => 'email',
			'default' => '',
		),
		'last_login' => array(
			'rule' => '',
			'label' => 'last_login',
			'default' => '',
		),
		'login_hash' => array(
			'rule' => '',
			'label' => 'login_hash',
			'default' => '',
		),
		'profile_fields' => array(
			'rule' => '',
			'label' => 'profile_fields',
			'default' => '',
		),
		'created_at' => array(
			'rule' => '',
			'label' => 'created_at',
			'default' => '',
		),
		'updated_at' => array(
			'rule' => '',
			'label' => 'updated_at',
			'default' => '',
		),
	);
}
