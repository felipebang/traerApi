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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>



<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 class="text-white h4">Collapsed content</h5>
    <span class="text-muted">Toggleable via the navbar brand.</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<centrar><h1>Rick and Morty</h1></centrar>
<div class="row row-cols-1 row-cols-md-3 g-4">

<?php foreach ($prueba['results'] as $key => $value) { ?>



 
    <div class="card" style="width: 25rem;">
 
 <h5> <?php echo $value['id']; ?></h5>
 <img src="https://gameslatam.com/wp-content/uploads/2021/07/mortyplicity.jpg" alt="">
 <ul class="list-group list-group-flush">
  <li class="list-group-item"><?php echo $value['name']; ?></li>
  <li class="list-group-item"> <?php echo $value['air_date']; ?></li>
  <li class="list-group-item"><?php echo $value['episode']; ?></li>
  <li class="list-group-item"><a href=""><?php echo $value['url']; ?></a></li>
  <li class="list-group-item"><?php echo $value['created']; ?></li>

  <a href="./epsides.php" >Ver detalles</a>
</div>
<?php } ?>
</div>
</div>


</div>
</div>

























</body>
</html>