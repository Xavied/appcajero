<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class autController extends Controller
{
    public function ingresar(Request $request)
    {
       $this->validate($request, [
            'email' => 'required',
            'password' => 'required|numeric'
        ]);
        $credentials= $request->only('email', 'password');

       try
       {
                $client = new Client([
                    'base_uri'=>'https://safe-bastion-34410.herokuapp.com',
                //'timeout'=> 2.0,// tiempo a esperar por una respuesta

                ]);
            $response = $client->request('POST', "/api/login",
                [
                    'form_params'=> $credentials

                ]);

            $data=json_decode($response->getBody());
            $data=$data->message;

            if($data='Bienvenido')
            {
                return \view('cajero');
            }
        }
        catch(GuzzleHttp \ Exception \ RequestException $e)
        {
           return 'Algo malo pasó ';

        }


    }

}
