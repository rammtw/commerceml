<?php

namespace Rammtw\commerceml\builders;

use Rammtw\commerceml\TaxRate;
use Rammtw\commerceml\helpers\DocumentHelper;

class TaxRateBuilder
{
	protected $element;

	public function __construct(\DOMElement $element)
	{
		$this->element = $element;
	}

	public function build()
	{
		$ret = new TaxRate();

		$value = DocumentHelper::findFirstLevelChildsByTagNameOne($this->element, "Ставка");
		if ($value) {
			$ret->setRate($value->nodeValue);
		}

		$value = DocumentHelper::findFirstLevelChildsByTagNameOne($this->element, "Наименование");
		if ($value) {
			$ret->setName($value->nodeValue);
		}

		if ($ret->isEmpty()) {
			return null;
		}
		else {
			return $ret;
		}
	}
}
