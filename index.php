
<?php
include('Friend.php');
include('BestFriend.php');


$friend1 = new Friend('Jack', '17');
$friend2 = new Friend('Reg', '74');
$friend3 = new BestFriend('Ivan', '26');

echo $friend1->getName();

echo $friend3->getName();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>