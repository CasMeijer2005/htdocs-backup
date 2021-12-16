function verstuur(){
    var aanhef = document.getElementById("aflever_aanhef").value;
    var voornaam = document.getElementById("aflever_voornaam").value;   
    var achternaam = document.getElementById("aflever_achternaam").value;
    var straat = document.getElementById("aflever_straat").value;
    var huisnummer = document.getElementById("aflever_huisnummer").value;
    var bedrijf = document.getElementById("aflever_bedrijf").value;
    var postcode = document.getElementById("aflever_postcode").value;
    var plaats = document.getElementById("aflever_woonplaats").value;
    var land = document.getElementById("aflever_land").value;
    var emailadres = document.getElementById("email").value;
    var telefoon = document.getElementById("telefoon").value;
    var algvw = document.getElementById("algvw").value;

    // var ander_facatuureadres 
    
    var returnWaarde= true;

    document.getElementById("form-error").innerHTML = ""

    if(aanhef == ""){
        document.getElementById("aflever_aanhef").style.border= "1px solid red";
        document.getElementById("form-error").innerHTML += "<br>Aanhef is niet ingevuld";
        returnwaarde = false;
    } else {
        document.getElementById("aflever_aanhef").style.border = "1px solid lichtgrey";
    }

    if(voornaam == ""){
        document.getElementById("aflever_voornaam").style.border= "1px solid red";
        document.getElementById("form-error").innerHTML += "<br>Voornaam is niet ingevuld";
        returnwaarde = false;
    } else {
        document.getElementById("aflever_voornaam").style.border = "1px solid lichtgrey";
    }

    if(achternaam == ""){
        document.getElementById("aflever_achternaam").style.border= "1px solid red";
        document.getElementById("form-error").innerHTML += "<br>Aachternaam is niet ingevuld"
        returnwaarde = false;
    } else {
        document.getElementById("aflever_achternaam").style.border = "1px solid lichtgrey";
    }

    if(straat == ""){
         document.getElementById("aflever_straat").style.border= "1px solid red";
        document.getElementById("form-error").innerHTML += "<br>Straatnaam is niet ingevuld";
        returnwaarde = false;
    } else {
        document.getElementById("aflever_straat").style.border = "1px solid lichtgrey";
    }

    if(huisnummer == ""){
        document.getElementById("aflever_huisnummer").style.border= "1px solid red";
        document.getElementById("form-error").innerHTML += "<br>Huisnummer is niet ingevuld";
        returnwaarde = false;
    } else {
        document.getElementById("aflever_huisnummer").style.border = "1px solid lichtgrey";
    }

    if(bedrijf == ""){
        document.getElementById("aflever_bedrijf").style.border= "1px solid red";
        document.getElementById("form-error").innerHTML += "<br>Bedrijf is niet ingevuld";
        returnwaarde = false;
    } else {
        document.getElementById("aflever_bedrijf").style.border = "1px solid lichtgrey";
    }

    if(postcode == ""){
        document.getElementById("aflever_postcode").style.border= "1px solid red";
        document.getElementById("form-error").innerHTML += "<br>Postcode is niet ingevuld";
        returnwaarde = false;
    } else {
        document.getElementById("aflever_postcode").style.border = "1px solid lichtgrey";
    }

    if(plaats == ""){
        document.getElementById("aflever_woonplaats").style.border= "1px solid red";
        document.getElementById("form-error").innerHTML += "<br>Plaats is niet ingevuld"
        returnwaarde = false;  
    } else {
        document.getElementById("aflever_woonplaats").style.border = "1px solid lichtgrey";
    }

    if(land == ""){
        document.getElementById("aflever_land").style.border= "1px solid red";
        document.getElementById("form-error").innerHTML += "<br>Land is niet ingevuld"
        returnwaarde = false;  
    } else {
        document.getElementById("aflever_land").style.border = "1px solid lichtgrey";
    }

    if(emailadres == ""){
        document.getElementById("email").style.border= "1px solid red";
        document.getElementById("form-error").innerHTML += "<br>Email is niet ingevuld"
        returnwaarde = false;
    } else {
        document.getElementById("email").style.border = "1px solid lichtgrey";
    }

    if(telefoon == ""){
        document.getElementById("telefoon").style.border= "1px solid red";
        document.getElementById("form-error").innerHTML += "<br>Telefoonnummer is niet ingevuld"
        returnwaarde = false;
    } else {
        document.getElementById("telefoon").style.border = "1px solid lichtgrey";
    }

    if(algvw.checked){
        document.getElementById("algvw").style.border= "1px solid red";
        document.getElementById("form-error").innerHTML += "<br>Ga accord met de algemene voorwaarde";
        returnWaarde = false;
    } else {
        document.getElementById("algvw").style.border = "1px solid lichtgrey";
    }



    if(facatuureadres ){
        document.getElementById("facatuur_aanhef").value = aanhef;
        document.getElementById("facatuur_voornaam").value = voornaam;
        document.getElementById("facatuur_achternaam").value = achternaam;
        document.getElementById("facatuur_straat").value = straat;
        
    }

    
return returnwaarde;
}