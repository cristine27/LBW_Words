<?php

namespace App\Controllers;

class Thesaurus extends BaseController
{
    protected $randomWord;
    protected $sinonim;
    protected $antonim;
    protected $sinonimExample;
    protected $antonimExample;
    protected $placeholder;

    public function __construct()
    {
        $this->randomWord = $this->getRandom();
        $this->placeholder = 'Type your word';
    }

    public function index()
    {
        $randomWord = $this->randomWord;
        if (array_key_exists('results', $randomWord)) {
            $data = [
                'title' => 'Thesaurus',
                'word' => 'None',
                'wordRan' => $randomWord['word'],
                'sinonim' => [
                    '0' => 'Not yet'
                ],
                'antonim' => [
                    '0' => 'Not yet'
                ],
                'resultRan' => $randomWord['results'],
                'pronunciation' =>'none',
                'exampleS' =>'none',
                'exampleA' =>'none',
                'placeholder' => $this->placeholder
            ];
        } else {
            $data = [
                'title'  => 'Thesaurus',
                'word' => 'None',
                'wordRan'   => $randomWord['word'],
                'sinonim' => [
                    '0' => 'Not yet'
                ],
                'antonim' => [
                    '0' => 'Not yet'
                ],
                'resultRan' => [
                    '0' => [
                        'definition' => 'Sorry... Defintion for the Word not Available yet'
                    ]
                ],
                'pronunciation' =>'none',
                'exampleS' => 'none',
                'exampleA' =>'none',
                'placeholder' => $this->placeholder
            ];
        }

        return view('Pages/thesaurus', $data);
    }

    public function getRandom()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://wordsapiv1.p.rapidapi.com/words/?random=true",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYPEER => false, //untuk certifikat ssl 
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: wordsapiv1.p.rapidapi.com",
                "x-rapidapi-key: d0464ecc57mshc3dacd30a18dfb7p1ffc18jsn89d00824bcad",
                "Content-Type: application/json"
            ],
        ]);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); //untuk mengatur kembalian curl menjadi string 

        $response = curl_exec($curl);
        $data = json_decode($response, true); //mengubah string menjadi array
        curl_close($curl);
        // print_r($data);
        return $data;
    }

    public function getSinonim($input)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://wordsapiv1.p.rapidapi.com/words/$input/synonyms",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYPEER => false, //untuk certifikat ssl 
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: wordsapiv1.p.rapidapi.com",
                "x-rapidapi-key: d0464ecc57mshc3dacd30a18dfb7p1ffc18jsn89d00824bcad",
                "Content-Type: application/json"
            ],
        ]);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); //untuk mengatur kembalian curl menjadi string 

        $response = curl_exec($curl);
        $data = json_decode($response, true); //mengubah string menjadi array
        curl_close($curl);
        // print_r($data);
        return $data;
    }

    public function getAntonim($input)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://wordsapiv1.p.rapidapi.com/words/$input/antonyms",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: wordsapiv1.p.rapidapi.com",
                "x-rapidapi-key: d0464ecc57mshc3dacd30a18dfb7p1ffc18jsn89d00824bcad",
                "Content-Type: application/json"
            ],
        ]);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        curl_close($curl);
        // print_r($data);
        return $data;
    }

    public function getPronunciation($word)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://wordsapiv1.p.rapidapi.com/words/" . $word . "/pronunciation",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: wordsapiv1.p.rapidapi.com",
                "x-rapidapi-key: d0464ecc57mshc3dacd30a18dfb7p1ffc18jsn89d00824bcad",
                "Content-Type: application/json"
            ],
        ]);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($curl);
        $data = json_decode($response, true);
        curl_close($curl);

        return $data;
    }

    public function createRes($input)
    {
        $pronunciation = $this->getPronunciation($input);
        $this->sinonim = $this->getSinonim($input);
        $this->antonim = $this->getAntonim($input);
        $randomWord = $this->randomWord;
        $this->PrepareSinonimExample();
        $this->PrepareAntonimExample();

        if (is_array($this->antonim) && !array_key_exists('antonyms',$this->antonim)){
            $this->antonim['antonyms'] = 'sorry, antonyms for this word is not available';
        }
        if (is_array($this->sinonim) && !array_key_exists('synonyms',$this->sinonim)) {
            $this->sinonim['synonyms'] = 'sorry, synonyms for this word is not available';
        }
        
        if (array_key_exists('results', $randomWord)) {
            $data = [
                'title' => 'Thesaurus',
                'word' => $input,
                'sinonim' => $this->sinonim['synonyms'],
                'antonim' => $this->antonim['antonyms'],
                'wordRan' => $randomWord['word'],
                'resultRan' => $randomWord['results'],
                'pronunciation' => $pronunciation['pronunciation'],
                'exampleS' => $this->sinonimExample,
                'exampleA' => $this->antonimExample,
                'placeholder' => $this->placeholder
            ];
        } else {
            $data = [
                'title' => 'Thesaurus',
                'word' => $input,
                'sinonim' => $this->sinonim['synonyms'],
                'antonim' => $this->antonim['antonyms'],
                'wordRan' => $randomWord['word'],
                'resultRan' => [
                    '0' => [
                        'definition' => 'Sorry... Defintion for the Word not Available yet'
                    ]
                ],
                'pronunciation' => $pronunciation['pronunciation'],
                'exampleS' => $this->sinonimExample,
                'exampleA' => $this->antonimExample,
                'placeholder' => $this->placeholder
            ];
        }
        return view('Pages/thesaurus', $data);
    }

    public function getExample($input)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://wordsapiv1.p.rapidapi.com/words/" . $input . "/examples",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: wordsapiv1.p.rapidapi.com",
                "x-rapidapi-key: d0464ecc57mshc3dacd30a18dfb7p1ffc18jsn89d00824bcad",
                "Content-Type: application/json"
            ],
        ]);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }

    public function PrepareSinonimExample()
    {
        if (is_array($this->sinonim)) {
            foreach ($this->sinonim['synonyms'] as $key  => $value) {
                $new_id = count((array)$this->sinonimExample);
                if ($new_id != 0) {
                    $new_id++;
                }
    
                $temp = $this->getExample($value);
    
                $this->sinonimExample[$key] = json_decode($temp, true);
            }
        }
        
    }

    public function PrepareAntonimExample()
    {
        if (is_array($this->sinonim)) {
        foreach ($this->antonim['antonyms'] as $key  => $value) {
            $new_id = count((array)$this->antonimExample);
            if ($new_id != 0) {
                $new_id++;
            }

            $temp = $this->getExample($value);

            $this->antonimExample[$key] = json_decode($temp, true);
        }
    }
    }

}
