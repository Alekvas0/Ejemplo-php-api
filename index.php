<?php 

const API_URL = "https://whenisthenextmcufilm.com/api";

//conectarse a una API
#Inicializar una nueva sesion de cURL; ch = cURL handle
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //no devuelve el resultado en un echo
/*ejecutar la peticion
    y guardamos el resultado
*/
$result = curl_exec($ch);

//una alternativa seria utilizar file_get_contents
// $result = file_get_contents(API_URL); // Si solo quieres haver un get de una API

$data = json_decode($result, true); //array asociativo (inidice string)
curl_close($ch);// se cierra la peticion.

// var_dump($data); // ver los indices del array de la API.
?>

<head>
    <meta charset="utf-8"/>
    <meta name="name" content="La proxima pelicula de Marvel"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>La proxima pelicula de Marvel</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
/>
</head>

<main>
    <h2 id="titulo">La proxima pelicula de Marvel</h2>
    <section>
        <img 
        src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de <?= $data["title"]; ?>" 
        style="border-radius: 16px"
        /> 
    </section>

    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días</h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
    
</main>



<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    #titulo {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
</style>