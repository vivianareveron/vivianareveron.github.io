/***Pseudocode***
Html:
Create a 9 cells table
Each cell has an id
Css:
Create a class for each cell that positions its background image in the right place
Create a class for each picture that will be displayed as background
Js:
Create a function that has an array containing strings equal to the names of the classes for the pictures
and that throws a random index of this array
Create a function that sets the random string (class) to a cell
Create a function that listens to hover and fires the previous function
Create function that sets the same class to all the cells
Create a function that listens to clicks and fires the previous function

Notes:
-Later I realized that I could use one function to set both event listeners
-I decided to add the text on the top later which is why it's not reported in the pseudocode but commented later 


*/
//Function that throws a random class
function randomClass() {
    //Array that contains strings that are equal to the picture classes
    var classes = ["pic1", "pic2", "pic3", "pic4", "pic5", "pic6", "pic7", "pic8", "pic9"];
    //Math.random to get a random index of the classes array
    var theRandomClass = classes[Math.floor(classes.length * Math.random())];
    //Return the random class(string)
    return theRandomClass;
    
};

//Function that sets the class to the td
function setRamdomClass() {
    this.setAttribute('class', randomClass());
    
    return this.className;
}


//Function that sets the event listeners

function setEventListeners(){
   //Get all the tds by tag name
    var overTds = document.getElementsByTagName('td');
        
        //Add the event listeners to all to all the tds
        for(i =0; i < 9; i++){
            var overTd = overTds[i];
            overTd.addEventListener('mouseover', setRamdomClass);    
            overTd.addEventListener('click', completePic);
    }  
}

setEventListeners();

//Create an object that contains the texts
var texts ={
 myText: document.getElementById("myText"),
 logo: document.getElementById('logo'),
 class: function (warmOrCold){
     myText.setAttribute('class', warmOrCold);
     logo.setAttribute('class', warmOrCold);
    }
 
 }

//Function that displays the whole picture and shows an extra text
function completePic(){
    //Get all the tds by tag name
    var overTds = document.getElementsByTagName('td');
        //Set the same class to all tds
        for(i =0; i < 9; i++){
            var overTd = overTds[i];
            overTd.className = this.className;
        }
        
    //Display two different texts depending on the 'temperature of the pic'    
    if (overTd.className == 'pic1'||overTd.className == 'pic4' || overTd.className == 'pic8' || overTd.className == 'pic9'){
          
            var coldText = texts.myText;
            coldText.innerHTML= 'Getting cold? keep hovering and clicking you might get to a warmer place';
            texts.class('cold');}
    
    else {
            var warmText = texts.myText;
            warmText.innerHTML = 'Keep exploring!';   
            texts.class('warm');       
    }        
                                  
}




