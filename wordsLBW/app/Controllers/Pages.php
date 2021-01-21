<?php

namespace App\Controllers;


class Pages extends BaseController
{
	protected $definition;
	protected $thesaurus;
	protected $about;

	public function __construct()
	{
		$this->definition = new Definition();
		$this->thesaurus = new Thesaurus();
		$this->about = new About();
	}

	public function index()
	{
		return $this->definition->index();
	}

	public function thesaurus()
	{

		$temp = $this->request->getVar('input');
		if (isset($_SESSION['input']) && $_SESSION['input'] !=0) {
			if (isset($temp) && $temp != "") {
				$input = $this->request->getVar('input');
			} else {
				$input = $_SESSION['input'];
			}
			return $this->thesaurus->createRes($input);
		} else {
			return $this->thesaurus->index();
		}
	}

	public function about()
	{
		return $this->about->index();
	}

	public function createWordDef()
	{
		$input = $this->request->getVar('input');
		$_SESSION['input'] = $input;
		return $this->definition->createWordDef($input);
	}

	public function createRes()
	{
		$input = $this->request->getVar('input');
		return $this->thesaurus->createRes($input);
	}

	public function createSynonym()
	{
		$input = $this->request->getVar('input');
	}
}
