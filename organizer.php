<html>
<head>
<title>Organizer</title>
<form action="organizer.php" method="post">
<link rel="stylesheet" type="text/css" href="style6.css">
</head>
<body>
<div id='blok1'class='dwabloki'>
<h2>MÓJ ORGANIZER</h2></div>
<div id='blok2' class='dwabloki'>
<form>
Wpis wydarzenia: <input name='wpis' type='text'></input>
<input value='ZAPISZ' type='submit'></input>
</form>
<?php
$nowywpis = $_POST['wpis'];

$sql ="UPDATE `zadania` SET `wpis`='Wycieczka:Karkonosze' WHERE dataZadania='2020-08-27';";
?>


</div>
<div id='3blok' class='blok3'>
<img src='logo2.png' alt='Mój organizer'><img>
</div>
<?php
$servername = 'localhost';
$username = 'root';
$password='';
$dbname = 'egzamin1';

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = 'SELECT dataZadania,miesiac,wpis FROM zadania WHERE miesiac="sierpien"';  

$result = $conn->query($sql);  


if ($result->num_rows > 0) {
while ($tablica = $result->fetch_assoc()){
    echo '<div class="blokglowny">';
echo '<h6 style="text-align:right;">'.$tablica['dataZadania'].', '.$tablica['miesiac'].'</h6>';
echo '<p style="text-align:left;">'.$tablica['wpis'].'</p>';
echo '</div>' ;

}
}

?>

<div class='stopka'>
<?php

$sql = 'SELECT miesiac,rok FROM zadania WHERE dataZadania="2020-11-3";';


$result = $conn->query($sql);  


if ($result->num_rows > 0) {
while ($tablica = $result->fetch_assoc()){
   
echo 'miesiąc: '.$tablica['miesiac'].', rok: '.$tablica['rok'].'</h6>';



}
}
    ?>
    <p> Strone wykonał, 01467396089</p>
</div>
</body>
</html>

