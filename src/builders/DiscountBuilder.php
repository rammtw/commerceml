<?php

namespace Rammtw\commerceml\builders;

use Rammtw\commerceml\Discount;
use Rammtw\commerceml\helpers\DocumentHelper;

class DiscountBuilder
{
    protected $element;

    public function __construct(\DOMElement $element)
    {
        $this->element = $element;
    }

    public function build()
    {
        $ret = new Discount();

        $value = DocumentHelper::findFirstLevelChildsByTagNameOne($this->element, "Наименование");
        if ($value) {
            $ret->setName($value->nodeValue);
        }

        $value = DocumentHelper::findFirstLevelChildsByTagNameOne($this->element, "Сумма");
        if ($value) {
            $ret->setAmount($value->nodeValue);
        }

        $value = DocumentHelper::findFirstLevelChildsByTagNameOne($this->element, "Процент");
        if ($value) {
            $ret->setProcent($value->nodeValue);
        }

        $value = DocumentHelper::findFirstLevelChildsByTagNameOne($this->element, "УчтеноВСумме");
        if ($value) {
            $ret->setIsAccounted($value->nodeValue);
        }

        return $ret;
    }
}
