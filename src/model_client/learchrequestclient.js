//// request AJAX METHOD  POST 
//// FORMULARIO login user


import './learchrequest.js';
import { helloServerGet, LearchRequest, hellojson } from './learchrequest.js';

/**
 * 
 * REQUEST  GET CREATE FORM OBJ
 */

let formlearch = document.getElementById('learch_form');

let formget = document.getElementById('form-get');

if(formget != null)
{

    formget.addEventListener('submit', petitionGet);

}

/******************************************************************************
 * 
 * Request Login user CREATE FORM OBJ
 * 
 * 
 * 
 * 
 */
/// LOGIN USER 

//agregamos evento en caso que no sea NULL 
if (formlearch != null)
{
    console.log(" no es null ");
    formlearch.addEventListener('submit', sendDatesRequest);
    
}else{
    console.log("elemento id no encontrado");

}
/******************************************************************************
 * 
 * Request Resgister user FORM
 * 
 * 
 */

/// REGISTER USER
let formregister = document.getElementById('formlearch_register');

if (formregister != null)
{

    console.log("elemento form encontrado Id")
    formregister.addEventListener('submit', sendRegisteruser);

    
}else{

    console.log("elemento form NULL")

}

///Send dates with GET request

function petitionGet(e)
{
    e.preventDefault();

    //Obtenemos el valor del formulario 
    let petitonurl = document.formget.elements[0].value;


    helloServerGet(petitonurl,dateshow);


}

/// SEND JSON DATES LOGIN 
function sendDatesRequest(e)
{
    // hacemos que el evento recarge por defecto la pagina 
    e.preventDefault();

    let showresult = document.getElementById('showdate');

    let dateemail = document.learchform.elements[0].value;

    let nameinput = document.learchform.elements[0].name;

    let datepass = document.learchform.elements[1].value;
    
    showresult.innerHTML = '<h4> resultado submit activado <br>email user' +dateemail +'<br>'+datepass+ '</h4>';

    console.log('boton activado');

    //transformar un array js en  json con el metodo parse
    let datespost = [nameinput, dateemail, "password",datepass];

    document.getElementById("showdate-2").innerHTML = datespost;
    
    // Json para envio de los datos Login 
    const dates = {
        useremail: dateemail,
        pass: datepass 

    }
    
    //Peticon ajax al servidor se envia un json
   hellojson('././service/sessionusers.php',JSON.stringify(dates),responseLogin)
   
}

///RESIVE JSON DATES For REGISTER NEW USER FROM REquest register
function sendRegisteruser(e)
{
    e.preventDefault();

    console.log('action send dates register');

    let username = document.formlearch_register.elements[0].value;

    let userpass = document.formlearch_register.elements[1].value;

    let useremail = document.formlearch_register.elements[2].value;

    console.log('user name :  '+username+ ' pass user : '+ userpass + ' user email : '+ useremail);

    const dateaduser = {

        name: username,
        pass: userpass,
        email: useremail

    }

     hellojson('././service/users.php',JSON.stringify(dateaduser),dateshow)
  
}

///RESIVE JSON DATES LOGIN USER for Login From Request Login
function responseLogin(dates)
{
    document.getElementById("showdate-request-2").innerHTML = dates;

    console.log(dates);
  
    if (dates.login == "fail"){
        
        console.log("dates from servidor ", dates);   

    }else{
        loginEnable();
        setTimeout(reloadpage,6000);   

    }

    
}

function reloadpage()
{

    location.reload();

}

function dateshow(dates)
{

    document.getElementById("showdate-request-2").innerHTML = dates;

    console.log('llamado del callback de la funcion ajax ' + dates);


  
}

function timetrigger()
{
    let timnow = new Date();
    let timaction = new Date();
    
    timaction.setHours(19);
    timaction.setMinutes(42);
    timaction.setSeconds(20);
    return timaction.getTime() - timnow.getTime();
    

}

function respondrequest()
{

    alert('tiempo terminado');


}

function loginEnable()
{

    let welcome =' bienvenido a Learch system';

    document.getElementById("showdate-request-2").innerHTML = welcome;
  

}
