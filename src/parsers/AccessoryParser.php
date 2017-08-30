<?php

namespace irpsv\commerceml\parsers;

use irpsv\commerceml\Accessory;

class AccessoryParser
{
	protected $model;
	protected $document;

	public function __construct(Accessory $model, \DOMDocument $document)
	{
		$this->model = $model;
		$this->document = $document;
	}

	public function parse(): \DOMElement
	{
		$ret = (new ProductParser($this->model, $this->document))->parse();

		$value = $this->model->getCatalogId();
		if ($value) {
			$node = $this->document->createElement("ИдКаталога", $value);
			$ret->appendChild($node);
		}

		$value = $this->model->getClassifierId();
		if ($value) {
			$node = $this->document->createElement("ИдКлассификатора", $value);
			$ret->appendChild($node);
		}

		$value = $this->model->getCount();
		if ($value) {
			$node = $this->document->createElement("Количество", $value);
			$ret->appendChild($node);
		}

		return $ret;
	}
}
