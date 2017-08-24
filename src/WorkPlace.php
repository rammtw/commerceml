<?php

namespace irpsv\commerceml;

class WorkPlace
{
	protected $organisation;
	protected $post; // должность

	public function setOrganisation(RequisitiesOrganisation $value)
	{
		$this->organisation = $value;
	}

	public function getOrganisation(): ?RequisitiesOrganisation
	{
		return $this->organisation;
	}

	public function setPost(string $value)
	{
		$this->post = $value;
	}

	public function getPost(): ?string
	{
		return $this->post;
	}
}
