<?php

$pageTitle = "Rösta";
$section = "vote";
include("includes/header.php");

$name = (isset($_POST['name'])) ? $_POST['name'] : null;

?>

<meta charset="UTF-8">



<div class="vote">
    <div class="votetext">
<h3>Nu är det dags att rösta!</h3>
        <p>Välkommen "Namn Namn", "Kommun", "Valdistrikt".</p><br>

<form method="post" action="process.php">
    
<table>
<div id="val">
<tr>
    <th><label  for="riksdag">Riksdag: </label></th>
        <td>
        <select name="riksdag" id="riksdag">
            <option value="choose">-- Riksdag --</option>
            <option value="C">C - Centerpartiet</option>
            <option value="FI">FI - Feministiskt initiativ</option>
            <option value="FP">FP - Folkpartiet</option>
            <option value="JL">JL - Junilistan</option>
            <option value="KD">KD - Kristdemokraterna</option>
            <option value="M">M - Moderaterna</option>
            <option value="MP">MP - Miljöpartiet</option>
            <option value="PP">PP - Piratpartiet</option>
            <option value="S">S - Socialdemokraterna</option>
            <option value="SD">SD - Sverigedemokraterna</option>
            <option value="V">V - Vänsterpartiet</option>
            <option value="0">Blank röst</option>
        </td>
</tr>
    
<tr>
    <th><label for="personRiksdag">Person: </label></th>
        <td>
        <select name="personRiksdag" id="personRiksdag">
            <option value="choose">-- Personval Riksdag --</option>
            <option value="R1">Anders Andersson</option>
            <option value="R1">Berit Bertilsson</option>
            <option value="R3">Conny Claesson</option>
        </td>
</tr>

<tr>
    <th><label for="kommun">Kommun: </label></th>
        <td>
        <select name="kommun" id="kommun">
            <option value="choose">-- Kommun --</option>
            <option value="C">C - Centerpartiet</option>
            <option value="FI">FI - Feministiskt initiativ</option>
            <option value="FP">FP - Folkpartiet</option>
            <option value="JL">JL - Junilistan</option>
            <option value="KD">KD - Kristdemokraterna</option>
            <option value="M">M - Moderaterna</option>
            <option value="MP">MP - Miljöpartiet</option>
            <option value="PP">PP - Piratpartiet</option>
            <option value="S">S - Socialdemokraterna</option>
            <option value="SD">SD - Sverigedemokraterna</option>
            <option value="V">V - Vänsterpartiet</option>
            <option value="0">Blank röst</option>
        </td>
</tr>

<tr>
    <th><label for="personKommun">Person: </label></th>
        <td>
        <select name="personKommun" id="personKommun">
            <option value="choose">-- Personval Kommun --</option>
            <option value="K1">Diana Danielsson</option>
            <option value="K2">Egon Eriksson</option>
            <option value="K3">Fia Fredriksson</option>
        </td>
</tr>

<tr>
    <th><label for="landsting">Landsting: </label></th>
        <td>
        <select name="landsting" id="landsting">
            <option value="choose">-- Landsting --</option>
            <option value="C">C - Centerpartiet</option>
            <option value="FI">FI - Feministiskt initiativ</option>
            <option value="FP">FP - Folkpartiet</option>
            <option value="JL">JL - Junilistan</option>
            <option value="KD">KD - Kristdemokraterna</option>
            <option value="M">M - Moderaterna</option>
            <option value="MP">MP - Miljöpartiet</option>
            <option value="PP">PP - Piratpartiet</option>
            <option value="S">S - Socialdemokraterna</option>
            <option value="SD">SD - Sverigedemokraterna</option>
            <option value="V">V - Vänsterpartiet</option>
            <option value="0">Blank röst</option>
        </td>
</tr>
    
<tr>
    <th><label for="personLandsting">Person: </label></th>
    <td>
        <select name="personLandsting" id="personLandsting">
            <option value="choose">-- Personval Landsting --</option>
            <option value="L1">Gunnar Granqvist</option>
            <option value="L2">Harriet Henriksson</option>
            <option value="L3">Isak Ivarsson</option>
    </td>
</tr>
    </div>  
</table>
    
    <br>
    <br>
    <input onclick="confirmExit()" type="submit" value="Rösta nu">
   
</form>
        
    <br>
    <p id="eller">...eller...</p> 
    <br>
        
 
<input type="button" id="loggaut" value="Logga ut">
    
    </div>   
</div>

<script>
var loggaut = document.getElementById("loggaut");
    
function exit (){
    window.location =("index.php");     
} 
   
loggaut.addEventListener('click', exit);

</script>    

    
<?php
    
include("includes/footer.php");

?>


<script> 
    window.onbeforeunload = confirmExit; 
    function confirmExit() 
    { 
    return "Kontrollera dina val.\n\nVälj 'Stanna...' om du vill ändra något, annars välj 'Lämna...' för att lämna sidan alternativt lämna din röst."; } 
</script> 

