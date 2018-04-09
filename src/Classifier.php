<?php

namespace Rammtw\commerceml;

use Rammtw\commerceml\Group;
use Rammtw\commerceml\Property;
use Rammtw\commerceml\PriceType;
use Rammtw\commerceml\Contragent;

class Classifier extends Model
{
	protected $id;
	protected $name;
	protected $desc;
	protected $owner;
	protected $groups = [];
	protected $properties = [];
	protected $priceTypes = [];

	public function setId(string $value)
	{
		$this->id = $value;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setName(string $value)
	{
		$this->name = $value;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setDesc(string $value)
	{
		$this->desc = $value;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setOwner(Contragent $value)
	{
		$this->Owner = $value;
	}

	public function getOwner()
	{
		return $this->Owner;
	}

	public function addGroup(Group $value)
	{
		$this->groups[] = $value;
	}

	public function getGroups()
	{
		return $this->groups;
	}

	public function addProperty(Property $value)
	{
		$this->properties[] = $value;
	}

	public function getProperties()
	{
		return $this->properties;
	}

	public function addPriceType(PriceType $value)
	{
		$this->priceTypes[] = $value;
	}

	public function getPriceTypes()
	{
		return $this->priceTypes;
	}
}
