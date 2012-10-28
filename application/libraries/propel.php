<?php

class CI_Propel
{
	public function CI_Propel()
	{
		set_include_path(get_include_path().PATH_SEPARATOR.APPPATH.'models/'); //EDIT for Virtual hosts
		require dirname(__FILE__) . DIRECTORY_SEPARATOR . "propel" .DIRECTORY_SEPARATOR . 'Propel.php';
		Propel::init(APPPATH ."config".DIRECTORY_SEPARATOR."propeligniter-conf.php");
	}
}