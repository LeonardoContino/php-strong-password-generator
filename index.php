<?php 
require __DIR__ .'/function.php';

if(isset($_POST['lunghezza'])){
    $result = generatePassword($_POST['lunghezza']);
    session_start();

    if($result === true) header('location: password.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>Document</title>
</head>
<body>



     <div class="container text-center mt-4">
        
        
        <form action="" method="POST">
            <h1>Password Generator</h1>
            <h3>genera una password</h3>
                <div class="d-flex justify-content-center gap-3 p-4 align-items-center">
                    <p class="">lunghezza password</p>
                    <input type="number" name="lunghezza" id="lunghezza">
                </div>

                <div>
                    <button class="btn btn-success" type="submit">invia</button>
                    <button class="btn btn-secondary">annulla</button>
                </div>

        </form>
        
     </div>
    


</body>
</html>