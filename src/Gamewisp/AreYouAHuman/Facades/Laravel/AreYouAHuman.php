<?php 
namespace Gamewisp\AreYouAHuman\Facades\Laravel;


use Illuminate\Support\Facades\Facade;

class AreYouAHuman extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'areyouahuman';
	}

}
