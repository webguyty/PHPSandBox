<?php
class Person
{
	private $name;
	private $email;
	private static $ageLimit = 40;

	public function __construct($name, $email)
	{
		$this->name = $name;
		$this->email = $email;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name . '<br>';
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email . '<br>';
	}

	public static function getAgeLimit()
	{
		return self::$ageLimit;
	}
}

$person1 = new Person('John Doe', 'John@gmail.com');

// $person1->setName('John');

// echo $person1->getName();
// echo $person1->getEmail();

class Customer extends Person
{
	private $balance;

	public function __construct($name, $email, $balance)
	{
		parent::__construct($name, $email, $balance);
		$this->balance = $balance;

		echo 'A new ' . __CLASS__ . 'has been created<br>';
	}

	public function setBalance($balance)
	{
		$this->balance = $balance;
	}

	public function getBalance()
	{
		return $this->balance . '<br>';
	}
}

// Static props and methods
// echo Person::$ageLimit;
echo Person::getAgeLimit();

// $customer1 = new Customer('John Doe', 'JohnDoe@gmail.com', 300);

// echo $customer1->getBalance();
