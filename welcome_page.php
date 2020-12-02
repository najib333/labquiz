<?php
    
    
    // define variables and set to empty values
    $pw = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pw = $_POST["psw"];
        
        $file = fopen("10-million-password-list-top-100.txt","r");

        while(! feof($file))
        {
            if($pw.equals(fgets($file))){
                header('Location: index.php');
            }
        }

        fclose($file);
        
        $uppercase = preg_match('@[A-Z]@', $pw);
        $lowercase = preg_match('@[a-z]@', $pw);
        $number = preg_match('@[0-9]@', $pw);
        $specialChars = preg_match('@[^\w]@', $pw);

        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pw) < 8) {
            header('Location: index.php');
        }

    }
    
    
?>

<!DOCTYPE html>
<html>
    <body>
        <form action="index.php" method="post">
        <div class="container">
          <label><b>Password: </b></label>
          <label><b><?php $pw ?></b></label>

          <button type="submit">Logout</button>
        </div>
        </form>
        
    </body>
</html> 

