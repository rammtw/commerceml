<?php

namespace Rammtw\commerceml;

class Analog extends Product
{
	protected $catalogId;
	protected $classifierId;

	public function setCatalogId(string $value)
	{
		$this->catalogId = $value;
	}

	public function getCatalogId()
	{
		return $this->catalogId;
	}

	public function setClassifierId(string $value)
	{
		$this->classifierId = $value;
	}

	public function getClassifierId()
	{
		return $this->classifierId;
	}
}
