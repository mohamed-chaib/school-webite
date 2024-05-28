<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
    <style>
    
</style>
</head>
<body>

<div class=".comment-people" >
<?php
$conn = mysqli_connect("localhost","root","","mydb");
if (!$conn) {
    echo " ljhghfgsgf";
}

    $sql= "select email, comment from commentaire;";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result) ) {
            echo " <div class=' comment-group'> " . $row["email"] ." <br>  " . $row["comment"] ." </div>";
        }
    }


?>
</div>
</body>
</html>