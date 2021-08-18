
<?php
include('Friend.php');
include('BestFriend.php');


$friend1 = new Friend('Jack', '17');
$friend2 = new Friend('Reg', '74');
$friend3 = new BestFriend('Ivan', '26', '1999');

$friend4 = clone($friend1);


echo Friend::allFriends() . "<br>";

echo $friend1->getName() . "<br>";

echo $friend3->getName() . "<br>";

echo $friend2->message() . "<br>";

echo $friend3->message() . "<br>";

echo $friend4->getName() . "<br>";



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