
/*
Listado de Operaciones
querys CRUD para el proyecto base_shop  BD name  test

*/

/*
    PRODUCTS   TABLE QUERYS
    (productos)
/

/*
TABLA Products peticion de selecionar Buscar Registros por NOMBRE
*/

SELECT * FROM products WHERE name = 'variable%'; 

/*
MOSTRAR todos los productos
*/

SELECT * FROM products;

/*
ACTUALIZAR Registros tabla Products 
*/

UPDATE products
 SET  mark = 'newmark', weight = 'newpeso', price = 'newprice', 
      ingresdate = DATE, expirationdate = DATE, category = 'categoria', descryption = 'descripcion', countryorigin = 'country'
       stock = 4, img = 'direciion'
  WHERE name = 'variable';

/*
 ADVERTENCIA  LA SIGUIENTE ORDEN (REPLACE) SOLO ES PROPIEDAD DE MYSQL NO ES UN COMANDO STANDAR

REPLACE  sentencia EXPLUCIVA DE MYSQL 

SALVAR STATUS 
*/
REPLACE INTO products
  SET  mark = 'newmark', weight = 'newpeso', price = 'newprice', statu = 3,
      ingresdate = DATE, expirationdate = DATE, category = 'categoria', descryption = 'descripcion', countryorigin = 'country'
       stock = 4, img = 'direciion';




/*
INSERTAR registros a la Tabla product
*/

INSERT INTO products 
 SET  mark = 'newmark', weight = 'newpeso', price = 'newprice', statu = 3,
      ingresdate = DATE, expirationdate = DATE, category = 'categoria', descryption = 'descripcion', countryorigin = 'country'
       stock = 4, img = 'direciion';

/*
ELIMINAR registro 
*/

DELETE Products WHERE product_id = 42;


/*
*    USERS TABLE   QUERYS 
*    (DATOS DEL CLIENTE)
*
*/

/*
BUSCAR mostrar todos los usuarios  mostrando el estado de su status que esta registrado en la tabla user_status
*/

SELECT * FROM users AS us INNER JOIN user_status AS st ON us.statu = st.status_id;

/*
BUSCAR registro por nombre
*/

SELECT * FROM users WHERE name = 'nombre';

/*
BUSCAR usuario por los campos nombre (NAME) segundo nombre (SECONDNAME) y pais (COUNTRY) con su status 
*/
SELECT * FROM users AS us INNER JOIN user_status AS st
 ON us.statu = st.status_id
  WHERE MATCH(name, country, secondname) 
   AGAINST('bolivia rick' IN BOOLEAN MODE);


/*
INSERTAR resgistros a la tabla USERs
*/

INSERT INTO users
 SET name = 'clientenombre', secondname = 'miguel',pass = MD5('un_apssword'), statu = 3, country = 'pais', addres = 'direccion', email = 'correo',
   phone = '3333333', codpostal = 'sample';
     
/*
ACTUALIZAR PASSWORD
*/

UPDATE users 
SET name = 'actualziar usuario', secondname = 'segundo nombre', pass = MD5('nuevo_pass')
  WHERE name = 'usuario' AND email = 'correo@';


/*
ACTUALIZAR datos
*/

UPDATE users 
SET name = 'actualziar usuario', secondname = 'segundo nombre'
  WHERE name = 'usuario' AND email = 'correo@';


/*
ACTUALIZAR datos del usuario 
*/

UPDATE users 
  SET name = 'clientenombre', secondname = 'miguel', statu = 3, country = 'pais', addres = 'direccion', email = 'correo',
   phone = '3333333', codpostal = 'sample'
    WHERE user_id = 1;

/*
ELIMINAR registro de la tabla usuariio  eliminar cliente
*/

DELETE  FROM users WHERE user_id = 1;


/*
*     SALE TABLE 
*      (VENTAS)
*/

/*
BUSCAR datos de venta mostrar todos los datos de las ventas
*/

SELECT * FROM sale;

/*
BUSCAR datos de venta por nombre de USUARIO
*/

SELECT * FROM sale WHERE nameuser = 'usuario';


/*
BUSCAR datos de venta mostrar por nombre del  PAIS
*/
SELECT * FROM sale WHERE countryorigin = 'pais';

/*
BUSCAR datos de venta mostrar por FECHA de creaacion de la venta
*/
SELECT * FROM sale WHERE datesale = 'fecha';

/*
BUSCAR datos de venta mostrar por su TOTAL DE VENTA
*/
SELECT * FROM sale WHERE totalsale = '34';


/*
INSERTAR registro
*/
INSERT INTO sale 
 SET nameuser = 'name', countryorigin = 'country', totalsale = 'precio', datesale = 'fecha de emision',
     saleproduct = 'productos vendido', listproduct = 'listade productos vendidos',
      statusend = 'estatus de la venta', status = 'canceled', date = '';


/*
ACTUALIZAR registro de venta
*/

UPDATE sale 
 SET nameuser = 'name', countryorigin = 'country', totalsale = 'precio', datesale = 'fecha de emision',
     saleproduct = 'productos vendido', listproduct = 'listade productos vendidos',
      statusend = 'estatus de la venta', status = 'canceled', date = '';
    WHERE sale_id = 1;

 /*
 DELETE registro
 */   

DELETE sale WHERE sale_id = 1;

/*
 ADVERTENCIA  LA SIGUIENTE ORDEN SOLO ES PROPIEDAD DE MYSQL NO ES UN COMANDO STANDAR

REPLACE  sentencia EXPLUCIVA DE MYSQL 
*/


/*
* 
*    USER_STATUS  (ESTATUS DE LOS USUARIOS)
*    TABLA
*/

/*
 ADVERTENCIA  LA SIGUIENTE ORDEN SOLO ES PROPIEDAD DE MYSQL NO ES UN COMANDO STANDAR

REPLACE  sentencia EXPLUCIVA DE MYSQL 
*/
/*
AGREGAR REGISTRO o  ACTUALIZAR en caso de que exista el mismo ID (direccion de identificacion)
*/

 REPLACE INTO user_status (status_id, status) VALUES (0, 'estatus nuevo');
 REPLACE user_status SET status_id = 0, status = 'nuevo status'ñ;

