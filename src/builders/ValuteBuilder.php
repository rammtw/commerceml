<?php

namespace rammtw\commerceml\builders;

use rammtw\commerceml\Valute;
use rammtw\commerceml\helpers\DocumentHelper;

class ValuteBuilder
{
	protected $element;

	public function __construct(\DOMElement $element)
	{
		$this->element = $element;
	}

	public function build()
	{
		return new Valute(
			$this->element->nodeValue
		);
	}
}
