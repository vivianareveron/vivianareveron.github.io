<?php

$pageTitle = "Hem";
$section = "home";
include("includes/header.php");

?>
    
    <main>       
    
    <div id="slider"> 
        <div class="home" id="top">
            <img src="images/transparent.png">
            <h2>Rösta var du vill!</h2>
            
        </div>
    </div>
  
            <div class="home" id="middle">
            <h1>Välkommen till vår e-tjänst!</h1>
            <p>Skriv in ditt personnummer och börja rösta:</p>
                
            <form>
            <label for="personnummer">ÅÅMMDDXXXX</label>
            <input type="text" name="personnummer"><br>
            <input type="button" id="loggain" value="Logga in">
            </form>       
        </div>
        
        <div class="home" id="bottom">
            <h1>Behöver du hjälp?</h1>
            <p>Här hittar du <a class="highlight" href="help.php">svar</a> på de vanligaste frågorna.</p>
           
        </div>

    </main>

<?php

include("includes/footer.php");

?>      
<script> 
var loggain = document.getElementById("loggain");
function bankid (){
 
    alert('Jag visas för att simulera en Bank ID-prompt.');
    window.location =("vote.php");     

} 
   
loggain.addEventListener('click', bankid);

</script>            
        
  