
//// request AJAX METHOD  POST 


//'app-learch/controllers/usercontroller.php'

export function datesRespon(dates) {

    console.log("datos de la respuesta a la peticion " + dates);
    
}


export class LearchRequest
{

    constructor(rmethod, urlpath)
    { 

        
        this.objre = new XMLHttpRequest();
        this.method = rmethod;
        this.path = urlpath;
        this.datesreq;
        
    }

    actionReadystatechange()
    {
     console.log('activado el request');

    }
     requestx(){
       
         
                    this.objre.onreadystatechange = function()
                    {
                        if(this.objre.readyState == 4)
                        {
                            if ( this.objre.status == 200) {
                               
   
                                //this.actionReadystatechange();
                             document.getElementById('showdate-request').innerHTML = this.objre.statusText;
                              //esta metodo nos retorno el archivo el cual estamos accediendo

                              this.datesreq = this.objre.statusText;

                            }                                                                          // con ajax el archivo es puesto como argumento en el metodo Open
                            else
                            {
                                alert("Error : al retornar el estado de la peticion from class");
                            }
         
                        }
                        
                    }
         
                    this.objre.open(this.method,this.path);

                    this.objre.setRequestHeader('Content-Type', 'application/json');
                 
       }

     requestDates(dates)
       {

        let objre = new XMLHttpRequest();

        objre.onreadystatechange = function()
        {
            if(objre.readyState == 4)
            {
                if ( objre.status == 200) {
                   

                    //this.actionReadystatechange();
                  document.getElementById('showdate-request').innerHTML = objre.statusText;
                  //esta metodo nos retorno el archivo el cual estamos accediendo
                  
                 
                }                                                                          // con ajax el archivo es puesto como argumento en el metodo Open
                else
                {
                   alert("Error : al retornar el estado de la peticion from class");
                }

            }
            
        }

        objre.open(this.method,this.path);

        objre.setRequestHeader('Content-Type', 'application/json');
     
        //// cargamos el metodo que se ejecuta cuando la peticon es exitosa
        objre.onload = function () {
            
            //setdatesreq(objre.responseText);

            //console.log("metodo onload debuelto response text "+ objre.responseText);
            
            datesRespon(objre.responseText);


                }

        objre.send(dates);

       
        
   
       }

       getdatesreq()
       {

        return this.datesreq;
           
       }

       setdatesreq(nudate)
       {
           this.datesreq = nudate;
          
       }

       

}

/// Rquest ajax GET
export function helloServerGet(pathre,callBack)
{
    var objre = new XMLHttpRequest();

    //PASO  1 nro
    //Algunas versiones de los navegadores Mozilla
    // no funcionan correctamente si la respuesta del servidor no tiene
    // la cabecera mime de tipo XML. En ese caso es posible usar un método
    // extra que sobreescriba la cabecera enviada por el servidor, 
    //en caso que no sea text/xml.
    objre.overrideMimeType('text/xml');

    //PASO  2 nro
    //Es importante notar que no hay paréntesis después del nombre
    // de la función y no se pasa ningún parámetro. 
    //También es posible definir la función en ese momento,
    // y poner en seguida las acciones que procesarán la respuesta:
    objre.onreadystatechange = function()
    {
        if(objre.readyState == 4)
        {
            if ( objre.status == 200) {
               
               alert("acceso a archivo :" + pathre);  
   }                                                                          // con ajax el archivo es puesto como argumento en el metodo Open
            else
            {
                alert("Error : al retornar el estado de la peticion HELLO error 200");
            }

        }
     
    }

    
    //PASO  3 nro
    //Después de especificar qué pasará al recibir la respuesta es
    // necesario hacer la petición. Para esto se utilizan los métodos open() y send()
    // de la clase HTTP request, como se muestra a continuación:
    objre.open('GET',pathre);

    objre.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      
     /// accion que se hace si la Peticion es Exitosa
     objre.onload = function () {

        let dates = objre.responseText;

        console.log("datos peticion get : "+ dates);

        callBack(dates);

     }
     
      //El parámetro en el método send()puede ser cualquier
      // información que se quiera enviar al servidor si se usa POST 
      //para la petición. La información se debe enviar en forma de cadena, 
      //por ejemplo: name=value&anothername=othervalue&so=on
     objre.send();

}

////////////////////  send Post JSON

export function hellojson(pathre,senddat,mycallback)
{
    
    
    let objre = new XMLHttpRequest();

    //PASO  1 nro
    //Algunas versiones de los navegadores Mozilla
    // no funcionan correctamente si la respuesta del servidor no tiene
    // la cabecera mime de tipo XML. En ese caso es posible usar un método
    // extra que sobreescriba la cabecera enviada por el servidor, 
    //en caso que no sea text/xml.
    //objre.overrideMimeType('text/xml');

    //objre.responseType = "json";
               
    //PASO  2 nro
    //Es importante notar que no hay paréntesis después del nombre
    // de la función y no se pasa ningún parámetro. 
    //También es posible definir la función en ese momento,
    // y poner en seguida las acciones que procesarán la respuesta:
    objre.onreadystatechange = function()
    {
        if(objre.readyState == 4)
        {
            if ( objre.status == 200) {

               
               console.log("acceso a archivo :" + pathre);  

             
            }  // con ajax el archivo es puesto como argumento en el metodo Open
            else
            {
                console.log("Error : al retornar el estado de la peticion HELLO jason error 200");
             
            }

        }
     
    }


    //PASO  3 nro
    //Después de especificar qué pasará al recibir la respuesta es
    // necesario hacer la petición. Para esto se utilizan los métodos open() y send()
    // de la clase HTTP request, como se muestra a continuación:
    objre.open('POST',pathre);

    objre.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         
     /// accion que se hace si la Peticion es Exitosa
    objre.onload = function () {
            
        //setdatesreq(objre.responseText);

        //console.log("metodo onload debuelto response text "+ objre.responseText);
        
        let dates = objre.responseText;

        //let datest = JSON.stringify(dates);
       let datesre = JSON.parse(dates);


       console.log("datos de respuesta  : " + datesre);
      //console.log(" dato user del obj " + datesre.user);
      //console.log(" datos del obj " + dates);


        mycallback(datesre);

    }


      //El parámetro en el método send()puede ser cualquier
      // información que se quiera enviar al servidor si se usa POST 
      //para la petición. La información se debe enviar en forma de cadena, 
      //por ejemplo: name=value&anothername=othervalue&so=on

 
     objre.send(senddat);

   
}


