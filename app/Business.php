<?php 

namespace App;

use App\Users\Person;

class Business
{
	protected $staff;

	public function __construct(Staff $staff)
	{
		$this->staff = $staff;
	}

	public function hire(Person $person)
	{
		$this->staff->add($person);
	}

	public function staff()
	{
		return $this->staff;
	}
}