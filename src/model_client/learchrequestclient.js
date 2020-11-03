//// request AJAX METHOD  POST 
//// FORMULARIO login user


import './learchrequest.js';
import { helloServer, LearchRequest, hellojson } from './learchrequest.js';


/// LOGIN USER 
var formlearch = document.getElementById('learch_form');

formlearch.addEventListener('submit', showDates);


function showDates(e)
{
    e.preventDefault();

    let showresult = document.getElementById('showdate');

    let dateemail = document.learchform.elements[0].value;

    let nameinput = document.learchform.elements[0].name;

    let datepass = document.learchform.elements[1].value;
    
    showresult.innerHTML = '<h4> resultado submit activado <br>email user' +dateemail +'<br>'+datepass+ '</h4>';

    console.log('boton activado');

    //transformar un array js en  json con el metodo parse
    let datespost = [nameinput, dateemail, "password",datepass];

    let datespre = "{"+ datespost+"}";


    document.getElementById("showdate-2").innerHTML = datespost;
    
    document.getElementById("showdate-3").innerHTML = datespre;

    const  dates = {

        useremail: dateemail,
        pass: datepass 

    }
    

   // helloServer('././service/learchRequestSession.php',emailpost)
   hellojson('././service/users.php',JSON.stringify(dates))



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



