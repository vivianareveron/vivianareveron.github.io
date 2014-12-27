<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <Title><?php echo $pageTitle; ?></Title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href='http://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
   
</head>

<html>
<body>
    
     <div id="head"></div>
    
    <header>
        <nav>
            <ul>
                <li><a href="index.php" class="<?php if($section == "home") {echo "selected";} ?>">Hem</a></li>
                <li><a href="vote.php" class="<?php if($section == "vote") {echo "selected";} ?>">Rösta</a></li>
                <li><a href="help.php" class="<?php if($section == "help") {echo "selected";} ?>">Hjälp</a></li>
                <li id="search"><a href="https://www.google.se/" target="_blank"><img src="images/search_icon.png"></a></li>
        </nav>
         
        <div id="logo"> <a href="index.php"><img src="images/Valmyndighetenstor.png"></a> </div>      
        
        <div id="extramenu">
        
        <ul>
            <li>Teckenspråk</li> 
            <li>Other languages</li>
            <li>Innehåll A-Ö</li>
            <li>Kontakta oss</li>
        </ul>
        
        </div>


    </header>

<script> 

var rosta = document.getElementsByTagName('a') [1];    
    
function personnummer () {
    
    prompt('Du måste vara inloggad för att kunna rösta, skriv in ditt personnummer.');
    alert('Jag visas för att simulera en Bank ID-prompt.');
    window.location =("vote.php");     
}         
rosta.addEventListener('click', personnummer);
</script>