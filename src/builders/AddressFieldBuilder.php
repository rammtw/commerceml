<?php

namespace rammtw\commerceml\builders;

use rammtw\commerceml\AddressField;
use rammtw\commerceml\helpers\DocumentHelper;

class AddressFieldBuilder
{
	protected $element;

	public function __construct(\DOMElement $element)
	{
		$this->element = $element;
	}

	public function build()
	{
		$ret = new AddressField();

		$value = DocumentHelper::findFirstLevelChildsByTagNameOne($this->element, "Тип");
		if ($value) {
			$ret->setType($value->nodeValue);
		}

		$value = DocumentHelper::findFirstLevelChildsByTagNameOne($this->element, "Значение");
		if ($value) {
			$ret->setValue($value->nodeValue);
		}

		if ($ret->isEmpty()) {
			return null;
		}
		else {
			return $ret;
		}
	}
}
