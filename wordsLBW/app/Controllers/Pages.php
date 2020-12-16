<?php

namespace App\Controllers;


class Pages extends BaseController
{
	protected $definition;
	protected $thesaurus;
	protected $about;

    public function __construct() {
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
        return $this->thesaurus->index();
	}

	public function about()
	{
        return $this->about->index();
	}

    public function createWordDef()
    {
		$input = $this->request->getVar('input');
        return $this->definition->createWordDef($input);
	}
	
	public function createAntonym()
    {
		$input = $this->request->getVar('input');
        
	}
	
	public function createSynonym()
    {
		$input = $this->request->getVar('input');
    }


}
