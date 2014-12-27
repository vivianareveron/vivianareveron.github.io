<?php

$pageTitle = "Tack!";
$section = "thankyou";
include("includes/header.php");

?>
<div class="thanks">
    
<h2>Tack för din röst!</h2>
    <p>Här följer de val du gjort:</p>
    <ul>
    <li>Riksdag: </li>
    <li>Personval Riksdag: </li>
    <li>Kommun: </li>
    <li>Personval Kommun: </li>
    <li>Landsting: </li>
    <li>Personval Landsting: </li>
    </ul>
    
<input type="button" id="button" value="Logga ut">
    
</div>    

<script>
var loggaut = document.getElementById("button");
    
function exit (){
    window.location =("index.php");     
} 
   
loggaut.addEventListener('click', exit);

</script>  

<?php

include("includes/footer.php");

?>