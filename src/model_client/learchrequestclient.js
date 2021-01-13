//// request AJAX METHOD  POST 
//// FORMULARIO login user


import './learchrequest.js';
import { helloServer, LearchRequest, hellojson } from './learchrequest.js';


/******************************************************************************
 * 
 * Request Login user
 * 
 * 
 * 
 * 
 */
/// LOGIN USER 
var formlearch = document.getElementById('learch_form');


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
 * Request Resgister user
 * 
 * 
 */

/// REGISTER USER
var formregister = document.getElementById('formlearch_register');

if (formregister != null)
{

    console.log("elemento form encontrado Id")
    formregister.addEventListener('submit', sendRegisteruser);

    
}else{

    console.log("elemento form NULL")

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
    
    document.getElementById("showdate-3").innerHTML = '#';

    // Json para envio de los datos Login 
    const  dates = {

        useremail: dateemail,
        pass: datepass 

    }
    

   // helloServer('././service/learchRequestSession.php',emailpost)
   hellojson('././service/sessionusers.php',JSON.stringify(dates),loginAction)

   
   
}

///SEND JSON DATES  REGISTER NEW USER
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

    hellojson('././service/users.php',JSON.stringify(dateaduser),false)



}

function loginAction(dates)
{

    console.log("datos del serviodr reuest login : " + dates);


}

function requestDat(datessend)
{
   let requespost = new LearchRequest('POST','././controllers/learchRequestSession.php');

   requespost.requestDates(datessend);

}

function dateshow()
{
    console.log('llamado ajax con Jquery');

}



