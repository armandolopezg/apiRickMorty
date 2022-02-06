<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apirick extends Controller
{
    public function personajes ()
    {
        $url = new \GuzzleHttp\Client();
        $responsee = $url->request('GET','https://rickandmortyapi.com/api/character/');
        $datee = json_decode($responsee->getBody()->getContents(), true);
        $personajes = [];
        foreach ($datee['results'] as $personaje){
            $personajes[] = [
                'id' =>$personaje['id'],
                'nombre' => $personaje['name'],
                'especie'=> $personaje['species'],
                'origen'=> $personaje['origin']['name'],
                'imagen'=> $personaje['image'],
                'estatus'=> $personaje['status'],
                'genero'=> $personaje['gender']
            ];
        }
        return view('inicio', ['personajes'=>$personajes]);
    }


    public function individual ($id)
    {
        $personajes = new \GuzzleHttp\Client();
        $response = $personajes->request('GET','https://rickandmortyapi.com/api/character/'.$id);
        $personajeseparado = json_decode($response->getBody()->getContents(), true);
        $numero = rand(0,42);
        $api = new \GuzzleHttp\Client();
        $response = $api->request('GET','https://rickandmortyapi.com/api/character/?page='.$numero);
        $datos = json_decode($response->getBody()->getContents(), true);
        $personajes = [];
         foreach ($datos['results'] as $personaje) {
             $personajes[] = [
                 'id' => $personaje['id'],
                 'nombre' => $personaje['name'],
                 'especie' => $personaje['species'],
                 'origen' => $personaje['origin']['name'],
                 'imagen' => $personaje['image'],
                 'estatus' => $personaje['status'],
                 'genero' => $personaje['gender']
             ];
         }        
        return view ('post',['personaje'=>$personajeseparado, 'personajes'=>$personajes]);
    }
}
    
