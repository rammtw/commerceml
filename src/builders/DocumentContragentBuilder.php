<?php

namespace Rammtw\commerceml\builders;

use Rammtw\commerceml\DocumentContragent;
use Rammtw\commerceml\helpers\DocumentHelper;

class DocumentContragentBuilder
{
	protected $element;

	public function __construct(\DOMElement $element)
	{
		$this->element = $element;
	}

	public function build()
	{
		$ret = DocumentContragent::createFrom(
			(new ContragentBuilder($this->element))->build()
		);

		$value = DocumentHelper::findFirstLevelChildsByTagNameOne($this->element, "Роль");
		if ($value) {
			$ret->setRole($value->nodeValue);
		}

		$value = DocumentHelper::findFirstLevelChildsByTagNameOne($this->element, "РасчетныйСчет");
		if ($value) {
			$x = (new ScoreBuilder($value))->build();
			if ($x) {
				$ret->setScore($x);
			}
		}

		$value = DocumentHelper::findFirstLevelChildsByTagNameOne($this->element, "Склад");
		if ($value) {
			$x = (new StoreBuilder($value))->build();
			if ($x) {
				$ret->setStore($x);
			}
		}

		return $ret;
	}
}
