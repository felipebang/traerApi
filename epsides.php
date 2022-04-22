<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://rickandmortyapi.com/api/episode',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
$prueba = json_decode($response, true);


?>




<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\name;
use App\air_date;
use App\direction;
use App\epsisode;
use App\url;
use App\created;

class RegistroController extends Controller
{

    public function index()
    {
        $name = name::all();
        $air_date = air_date::all();
        $direccion = direction::all();
        $episode = epsisode::all();
        $url = url::all();
        $created = created::all();
        return view("registro.soporte", 
                    ['name' => $name, 
                    'air_date' => $air_date, 
                    'direcciones' => $direccion, 
                    'episode' => $episode,
                    'url' => $url,
                    'created' => $created]);
    }
}