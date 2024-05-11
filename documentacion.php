<?php
    $name = "Alek";
    $isDev = true;
    $age = 18;

    // constantes globales (todos los archivos de la app)
    define('LOGO_URL', 'https://cdn.worldvectorlogo.com/logos/php-1.svg');

    //constantes locales (clases, archivo actual)
    const NOMBRE = 'Leroy';

    //       escapar caracteres con \
    $output = "Hola \"$name\", Con una edad de $age"; // concatenar strings con variables. importante las doble comillas
    // $output .= nuevo texto;


    // match condiciones una por una
    // $outputAge = match($age) {
    //     0,1,2 => "Eres un bebe",
    //     21,22,23 => "Eres un adulto joven",
    //     43,44,55 => "Eres un adulto"
    // }

    // match con bool, true o false
    $outputAge = match(true) {
        $age < 2  => "Eres un bebe",
        $age < 19 => "Eres un adulto joven",
        $age > 40 => "Eres un adulto",
        default   => "Cualquier otro valor"
    };

    //array (arreglos)
    $bestLanguages = ["PHP", "JS", "Python", 3]; //se puede mezclar tipos de datos. 
    $bestLanguages[] = "Java"; // agrega un valor a la ultima posicion del arreglo.
    $bestLanguages[3] = "C#";

    //diccionario
    $person = [
        "name"=> "Alek",
        "age"=> "21",
        "isDev"=> "true",
        "languages"=> ["PHP", "JS", "Python"],
    ];
    $person["name"] = "leroy";
    $person["languages"][] = "Java";

    //booleanos
    // $isOld = $age > 40; //true
    //variables ternarias
    // $outputAge = $isOld
    //     ? 'Eres viejo' // if true
    //     : 'Eres joven'; // else
    // if($isOld){
    //     echo "<h2>Eres viejo</h2>";
    // } else {
    //     echo "<h2>Eres joven</h2>";
    // }

    // ver tipo de la variable
    // var_dump($name);
    // var_dump($isDev);
    // var_dump($age); 

    
?>

<?php //Iterar elementos de un arreglo. Se asigna una nueva variable para cada uno. ?>
<ul>
    <?php foreach ($bestLanguages as $key => $languages) : // key para sacar el indice de cada elemento?> 
        <li><?= $key . " " . $languages?></li>
    <?php endforeach ?>
</ul>

<h3>
    El mejor lenguaje es <?= $bestLanguages[0] ?>
</h3>

<h2><?= $outputAge?></h2>

<img src="<?= LOGO_URL?>" alt="PHP logo" width="200">   
<h1>
    <?= $output . "<br /> " . NOMBRE?>
</h1>
