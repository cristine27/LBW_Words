<?php

namespace App\Controllers;


class Pages extends BaseController
{
    protected $randomWord;
    public function __construct() {
        $this->randomWord = $this->getRandom();
    }

	public function index()
	{
        $randomWord = $this->randomWord;

        if (array_key_exists('results',$randomWord)) {
            $data = [
                'title'  => 'Definition',
                'word' => 'None',
                'wordRan'   => $randomWord['word'],
                'result' => [
                    'Definition' => 'Not yet'
                ],
                'resultRan' => $randomWord['results'],
                'pronunciation' => 'none'
            ];
        }
        else{
            $data = [
                'title'  => 'Definition',
                'word' => 'None',
                'wordRan'   => $randomWord['word'],
                'result' => [
                    'Definition' => 'Not yet'
                ],
                'resultRan' => [
                    '0' => [
                        'definition' => 'Sorry... Defintion for the Word not Available yet'
                        ]
                    ],
                'pronunciation' => 'none'
            ];
        }
        
		return view('Pages/home',$data);
	}

	public function thesaurus()
	{
        $data = [
            'title'  => 'Thesaurus'
        ];
		return view('Pages/thesaurus',$data);
	}

	public function about()
	{
        $data = [
            'title'  => 'Definition'
        ];
		return view('Pages/about',$data);
	}

	public function getSinonim($input = '')
	{
		$curl = curl_init();

		curl_setopt_array($curl, [
			CURLOPT_URL => "https://wordsapiv1.p.rapidapi.com/words/".$input."/synonyms",
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
			CURLOPT_URL => "https://wordsapiv1.p.rapidapi.com/words/".$input."/antonyms",
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

	public function cek()
	{
		$input = $this->request->getVar('input');

		$sinonim = $this->getSinonim($input);
		$antonim = $this->getAntonim($input);

		$data['data'] = [
			'sinonim' => $sinonim,
			'antonim' => $antonim
		];
		return view('Pages/Translation', $data);
    }
    
    public function getWordAtr($input)
    {
        $curl = curl_init();

		curl_setopt_array($curl, [
			CURLOPT_URL => "https://wordsapiv1.p.rapidapi.com/words/".$input,
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

    public function createWordDef()
    {
        $input = $this->request->getVar('input');
        $word = $this->getWordAtr($input);
        $randomWord = $this->randomWord;

        if (array_key_exists('results',$randomWord)) {
            $data = [
                'title'  => 'Definition',
                'word' => $word['word'],
                'wordRan'   => $randomWord['word'],
                'result' => $word['results'],
                'resultRan' => $randomWord['results'],
                'pronunciation' => $word['pronunciation']
                
            ];
        }
        else{
            $data = [
                'title'  => 'Definition',
                'word' => $word['word'],
                'wordRan'   => $randomWord['word'],
                'result' => $word['results'],
                'resultRan' => [
                    '0' => [
                        'definition' => 'Sorry... Defintion for the Word not Available yet'
                        ]
                    ],
                'pronunciation' => $word['pronunciation']
            ];
        }
       
        return view('Pages/home', $data);
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


}
