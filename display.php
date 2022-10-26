<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Items</title>
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
<h1>Group Stultus</h1>
<h3>Welocome to the group <strong><?php echo $_POST["fname"]?></strong></h3>

<?php   



$sampleArr = array("ryan","anna"); 
array_push($sampleArr, $_POST["fname"]);


?>


<ul>
<?php foreach($sampleArr as $values): ?>


    <li><?= $values ?></li>

<?php endforeach; ?>
</ul>
    
</body>
</html>