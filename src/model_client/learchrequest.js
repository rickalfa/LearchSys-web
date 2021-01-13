
//// request AJAX METHOD  POST 


//'app-learch/controllers/usercontroller.php'

export class LearchRequest
{
    constructor(rmethod,urlpath)
    { 

        this.objre = new XMLHttpRequest();
        this.method = rmethod;
        this.path = urlpath;
    }

    actionReadystatechange()
    {
     console.log('activado el request');

    }
     requestx(){

        this.objre.open(this.method,this.path,true);
                    this.objre.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
         
                    this.objre.onreadystatechange = function()
                    {
                        if(this.objre.readyState == 4)
                        {
                            if ( this.objre.status == 200) {
                               
   
                                //this.actionReadystatechange();
                             document.getElementById('showdate-request').innerHTML = objre.responseText; //esta metodo nos retorno el archivo el cual estamos accediendo
                            }                                                                          // con ajax el archivo es puesto como argumento en el metodo Open
                            else
                            {
                                alert("Error : al retornar el estado de la peticion from class");
                            }
         
                        }
                        
                    }
         
                 
       }

       requestDates(dates)
       {
           this.requestx();
           this.objre.send(dates);
   
       }

       

}



export function helloServer(pathre,senddat)
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
             document.getElementById('showdate-request').innerHTML = objre.responseText; //esta metodo nos retorno el archivo el cual estamos accediendo
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
    objre.open('POST',pathre,true);

    objre.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      
     
      //El parámetro en el método send()puede ser cualquier
      // información que se quiera enviar al servidor si se usa POST 
      //para la petición. La información se debe enviar en forma de cadena, 
      //por ejemplo: name=value&anothername=othervalue&so=on
     objre.send(senddat);

}

////////////////////  send Post JSON

export function hellojson(pathre,senddat,callback)
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
                document.getElementById('showdate-request').innerHTML = objre.responseText; //esta metodo nos retorno el archivo el cual estamos accediendo
            }                                                                          // con ajax el archivo es puesto como argumento en el metodo Open
            else
            {
                console.log("Error : al retornar el estado de la peticion HELLO error 200");
            }

        }
     
    }

    
    //PASO  3 nro
    //Después de especificar qué pasará al recibir la respuesta es
    // necesario hacer la petición. Para esto se utilizan los métodos open() y send()
    // de la clase HTTP request, como se muestra a continuación:
    objre.open('POST',pathre);

    objre.setRequestHeader('Content-Type', 'application/json');
      
    objre.onload = function()
    {

      let dates = objre.responseText;

      callback(dates);

    }
     
      //El parámetro en el método send()puede ser cualquier
      // información que se quiera enviar al servidor si se usa POST 
      //para la petición. La información se debe enviar en forma de cadena, 
      //por ejemplo: name=value&anothername=othervalue&so=on
     objre.send(senddat);

}



