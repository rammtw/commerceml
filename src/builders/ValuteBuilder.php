<?php

namespace Rammtw\commerceml\builders;

use Rammtw\commerceml\Valute;
use Rammtw\commerceml\helpers\DocumentHelper;

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
