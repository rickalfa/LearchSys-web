
// JQUEY ajax request
$(document).ready(function(){
    console.log('jQuery from LearchJquery');

    $('#learch_form').submit(function(e){

        e.preventDefault();

        console.log('petition learch Jquery');

        let email = $('#learch_form').serializeArray();

        let dateemail = document.learchform.elements[0].value;


        //service/learchRequestSession.php

        $.ajax({
        url: 'service/learchRequestSession.php',
        type: 'POST',
        data:email  ,
        success: function(response){

            console.log('ajax petition '+ response);

            //document.getElementById('showdate').innerHTML = response;

        }

        })

    })
    


});