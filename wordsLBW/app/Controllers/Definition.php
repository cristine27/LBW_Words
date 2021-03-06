<?php

namespace App\Controllers;


class Definition extends BaseController
{
    protected $randomWord;
    protected $placeholder;

    public function __construct()
    {
        $this->randomWord = $this->getRandom();
        $this->placeholder = 'Type your Word';
    }

    public function index()
    {
        $randomWord = $this->randomWord;

        if (array_key_exists('results', $randomWord)) {
            $data = [
                'title'  => 'Definition',
                'word' => 'None',
                'wordRan'   => $randomWord['word'],
                'result' => [
                    'Definition' => 'Not yet'
                ],
                'resultRan' => $randomWord['results'],
                'pronunciation' => 'none',
                'example' => 'none',
                'placeholder' => $this->placeholder
            ];
        } else {
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
                'pronunciation' => 'none',
                'example' => 'none',
                'placeholder' => $this->placeholder
            ];
        }

        return view('Pages/home', $data);
    }

    public function getWordAtr($input)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://wordsapiv1.p.rapidapi.com/words/" . $input,
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
        $data = json_decode($response, true);
        curl_close($curl);

        return $data;
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


    public function createWordDef($input)
    {
        $word = $this->getWordAtr($input);
        $pronunciation = $this->getPronunciation($input);
        $randomWord = $this->randomWord;
        $examples = $this->getExample($input);

        if(array_key_exists('word',$word)){
            if (isset($randomWord) && array_key_exists('results', $randomWord)) {
            
                $data = [
                    'title'  => 'Definition',
                    'word' => $input,
                    'wordRan'   => $randomWord['word'],
                    'result' => $word,
                    'resultRan' => $randomWord['results'],
                    'pronunciation' => $pronunciation,
                    'example' => $examples,
                    'placeholder' => $this->placeholder
    
                ];
            } else {
                $data = [
                    'title'  => 'Definition',
                    'word' => $input,
                    'wordRan'   => $randomWord['word'],
                    'result' => $word,
                    'resultRan' => [
                        '0' => [
                            'definition' => 'Sorry... Defintion for the Word not Available yet'
                        ]
                    ],
                    'pronunciation' => $pronunciation,
                    'example' => $examples,
                    'placeholder' => $this->placeholder
                ];
            }
        }
        else {
            $data = [
                'title'  => $word['message'],
                'word' => $input,
                'wordRan'   => $randomWord['word'],
                'result' => [
                    'Definition' => 'Not yet'
                ],
                'resultRan' => [
                    '0' => [
                        'definition' => 'Sorry... Defintion for the Word not Available yet'
                    ]
                ],
                'pronunciation' => 'none',
                'example' => 'none',
                'placeholder' => $this->placeholder
            ];
        }
        
        

        return view('Pages/home', $data);
    }

}
