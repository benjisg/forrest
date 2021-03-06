<?php namespace Omniphx\Forrest\Providers\Laravel;

use Omniphx\Forrest\Interfaces\InputInterface;
use Input;

class LaravelInput implements InputInterface {
	
	/**
	 * Get input from response
	 * @param  string $parameter
	 * @return mixed
	 */
	public function get($parameter){
		return Input::get($parameter);
	}
}