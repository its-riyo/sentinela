<?php

    namespace App\Models;

    class SummonerModel
    {

        public static function find($summonersName) {

            $riotApiKey = RIOTAPIKEY;

            $curl_h = curl_init('https://br1.api.riotgames.com/lol/summoner/v4/summoners/by-name/'.$summonersName);

            curl_setopt($curl_h, CURLOPT_HTTPHEADER,
                array(
                    "User-Agent: Mozilla/5.0 (X11; Linux x86_64; rv:102.0) Gecko/20100101 Firefox/102.0",
                    "Accept-Language: en-US,en;q=0.5",
                    "Accept-Charset: application/x-www-form-urlencoded; charset=UTF-8",
                    "Origin: https://developer.riotgames.com",
                    "X-Riot-Token: ".$riotApiKey
                )
            );

            # Store to variable
            curl_setopt($curl_h, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($curl_h);
            return $response;
        }

    }