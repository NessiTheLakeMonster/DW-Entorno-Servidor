Sobre la tabla Personas, hacer un primer servicio. 

Con GET, si en la url pones un DNI te devuelve esa persona, si pones la url sin argumentos devuelves todos los datos.

Con POST, sin nada en la url, tienes que devolver un json con datos para registrar ese usuario en la base de datos, también tienes que devolver al cliente un código según el resultado de la operación (si se ha realizado correctamente o no).

Con DELETE, solo hay que poner el DNI como primer argumento en la url, y borrar ese usuario en la base de datos.

Con PUT, poner el DNI en la url y los nuevos valores se los pasas por Json.

Crear una clase Conexión, con los métodos insertar, borrar, modificar... y dentro de cada método conectar y desconectar.

Y una clase Constantes con los datos.

Y clase Persona.