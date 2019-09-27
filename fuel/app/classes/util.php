<?php
class Util
{
	public static function to_array($models)
	{
		$return = array();

		if (is_array($models))
		{
			foreach ($models as $index => $model)
			{
				//TODO:クラスのチェック
				$return[$index] = $model->to_array();
			}
		}

		return $return;
	}
	
	public static function date($format = 'Y-m-d H:i:s', $date = null)
	{
		$return = '';
		if ($date != '' && $date != '0000-00-00 00:00:00')
		{
			$new_date = new DateTime();
			$return = $new_date->format($format);
		}
		return $return;
	}

}
