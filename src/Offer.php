<?php

namespace irpsv\commerceml;

class Offer extends Product
{
	protected $prices;
	protected $count;
	protected $storeCounts = []; // остаткиПоСкладам

	public function addPrice(Price $value)
	{
		$this->prices[] = $value;
	}

	public function getPrices(): array
	{
		return $this->prices;
	}

	public function setCount(int $value)
	{
		$this->count = $value;
	}

	public function getCount(): ?int
	{
		return $this->count;
	}

	public function addStoreCount(StoreCount $value)
	{
		$this->storeCounts[] = $value;
	}

	public function getStoreCounts(): array
	{
		return $this->storeCounts;
	}

	public static function createFrom(Product $product)
	{
		$offer = new self();
		if ($product->getId()) {
			$offer->setId($product->getId());
		}
		if ($product->getName()) {
			$offer->setName($product->getName());
		}
		if ($product->getDesc()) {
			$offer->setDesc($product->getDesc());
		}
		if ($product->getBarcode()) {
			$offer->setBarcode($product->getBarcode());
		}
		if ($product->getArticul()) {
			$offer->setArticul($product->getArticul());
		}
		if ($product->getBaseScale()) {
			$offer->setBaseScale($product->getBaseScale());
		}
		if ($product->getContragentProductId()) {
			$offer->setContragentProductId($product->getContragentProductId());
		}
		if ($product->getVendor()) {
			$offer->setVendor($product->getVendor());
		}
		foreach ($product->getGroupsIds() as $item) {
			$offer->addGroupId($item);
		}
		foreach ($product->getPictures() as $item) {
			$offer->addPicture($item);
		}
		foreach ($product->getPropertyValues() as $item) {
			$offer->addPropertyValue($item);
		}
		foreach ($product->getTaxRates() as $item) {
			$offer->addTaxRate($item);
		}
		foreach ($product->getExcises() as $item) {
			$offer->addExcise($item);
		}
		foreach ($product->getAccessories() as $item) {
			$offer->addAccessory($item);
		}
		foreach ($product->getAnalogs() as $item) {
			$offer->addAnalog($item);
		}
		foreach ($product->getProductChars() as $item) {
			$offer->addProductChar($item);
		}
		foreach ($product->getRequisiteValues() as $item) {
			$offer->addRequisiteValue($item);
		}

		return $offer;
	}
}
