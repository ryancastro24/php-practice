<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php basics</title>
    <script src="app.js"defer></script>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins';
        }
        body{
            width:100%;
            height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            flex-direction:column;
        }
    </style>
</head>
<body>

<?php // configure your php here

$myDate = date("M d ");
$myYear = date("Y");


//end of php configuration
?>

    <h1>Enter Full Name</h1>
    <form action="display.php" method ="POST">
        <input type="tex" name="fname">
        <input type="submit" value="ADD">
    </form>

<?php 
$myFile =  fopen("sample.txt", "r") or die("unable to open file!");
$txt = fread($myFile,filesize("sample.txt"));

$writeFile = fopen("sample2.txt", "w") or die("cannot add to the file");
fwrite($writeFile, $txt);

fclose($myFile);
fclose($writeFile);


$newfile = "newfile to commoit";

?>





    
</body>
</html>