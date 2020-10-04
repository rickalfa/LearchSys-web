//// request AJAX METHOD  POST 
//// FORMULARIO login user


import './learchrequest.js';
import { helloServer, LearchRequest } from './learchrequest.js';


/// LOGIN USER 
var formlearch = document.getElementById('learch_form');

formlearch.addEventListener('submit', showDates);


function showDates(e)
{
    e.preventDefault();

    let showresult = document.getElementById('showdate');

    let dateemail = document.learchform.elements[0].value;

    let datepass = document.learchform.elements[1].value;
    
    showresult.innerHTML = '<h4> resultado submit activado <br>email user' +dateemail +'<br>'+datepass+ '</h4>';

    console.log('boton activado');

    let emailpost = "email="+ dateemail;

    

    //helloServer('././service/learchRequestSession.php',emailpost)

    //'././service/learchRequestSession.php'

   
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

//let Reajx = new XMLHttpRequest;

