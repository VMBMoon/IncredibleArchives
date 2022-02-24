<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Incredible Luck Game</title>
</head>
<center>
<body style="background-color:#2e2e2e;">
    <div class="container col-4">
    <fieldset>
        <legend style="color:whitesmoke;font-family:calibri;font-size:30px;"><strong>Incredible Lucky Numbers</strong></legend>
        <form id="form1" method="post" class="form">
            
<?php
    $a = range(1,12);
    shuffle($a);
    $bet= array_slice($a, 0, 5);
    $lucknumber = array(5,12,4,10,7);
    asort($bet);
    asort($lucknumber);
    echo '<br><i style="color:whitesmoke;font-size:25px;font-family:calibri ;">
      The Lucky Numbers </i> <br> ';
    foreach($lucknumber as $numshow){
        echo '<i style="color:whitesmoke;font-size:20px;font-family:calibri;">';
        print_r ($numshow);
        echo '</i> ';
    }
    echo '<br><br> <i style="color:whitesmoke;font-size:25px;font-family:calibri ;">
      Your Numbers </i> <br> ';
    foreach($bet as $betshow){
        echo '<i style="color:whitesmoke;font-size:20px;font-family:calibri;">';
        print_r ($betshow);
        echo '</i> ';
    }
    $count=0;
    foreach($bet as $num){
        if (in_array($num, $lucknumber)) {
            $count++;}}
    echo "<br>"."<br>";
    if($count==0){$Luck= "Bad Luck...";
        echo '<img width=200 height=200 src="https://media.discordapp.net/attachments/721460421609128042/929938674399981588/IMG_20220110_002407.jpg?width=488&height=488"/>';}
    elseif($count==1){$Luck= "Fair Luck";
        echo '<img width=200 height=200 src="https://media.discordapp.net/attachments/721460421609128042/929938477506777148/IMG_20220107_153453.jpg?width=490&height=488"/>';}
    elseif($count==2){$Luck= "Average Luck";
        echo '<img width=200 height=200 src="https://media.discordapp.net/attachments/721460421609128042/929938477909438504/IMG_20220107_153528.jpg?width=488&height=488"/>';}
    elseif($count==3){$Luck= "Good Luck";
        echo '<img width=200 height=200 src="https://media.discordapp.net/attachments/721460421609128042/929938478467264532/IMG_20220107_153634.jpg?width=488&height=488"/>';}
    elseif($count==4){$Luck= "Amazing Luck!";
        echo '<img width=200 height=200 src="https://media.discordapp.net/attachments/721460421609128042/929938478198849536/IMG_20220107_153732.jpg?width=488&height=488"/>';}
    elseif($count==5){$Luck= "God Luck!!!";
        echo '<img width=200 height=200 src="https://media.discordapp.net/attachments/721460421609128042/929938477297057852/IMG_20220107_153904.jpg?width=488&height=488"/>';}
?>

<br />
   </form>
        <div class="jumbotron bg-dark text-white my-5">
            <i style="font-size:25px;font-family:calibri;"><strong> <?= (isset($count)) ? $Luck : "" ?> </strong></i>

        </div>
           <button class="btn btn-dark" type="submit" form="form1">Try</button>
    </fieldset>
    </div>
</body>
</center>
</html>