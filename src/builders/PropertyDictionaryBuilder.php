<?php

namespace rammtw\commerceml\builders;

use rammtw\commerceml\PropertyDictionary;
use rammtw\commerceml\helpers\DocumentHelper;

class PropertyDictionaryBuilder
{
	protected $element;

	public function __construct(\DOMElement $element)
	{
		$this->element = $element;
	}

	public function build()
	{
		$ret = new PropertyDictionary();

		$value = DocumentHelper::findFirstLevelChildsByTagNameOne($this->element, "ИдЗначения");
		if ($value) {
			$ret->setValueId($value->nodeValue);
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
