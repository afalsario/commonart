<?php

class Profile extends Eloquent{

    protected $table = 'profiles';

	public function aboutSnippit() 
	{
		
		$about_me = $this->about_me; 

		if (strlen($about_me) > 100)  {
			return substr($this->about_me, 0, 100)  . "..." . PHP_EOL ;
		} else {
			return substr($this->about_me, 0, 100) . PHP_EOL ;
		}
		
	}
}
