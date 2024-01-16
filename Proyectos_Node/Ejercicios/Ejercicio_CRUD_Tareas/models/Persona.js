var mocker = require('mocker-data-generator').default
var faker = require('faker')

class Persona {

    constructor(nombre, apellido, email, password) {
        this.nombre = nombre;
        this.apellido = apellido;
        this.email = email;
        this.password = password;
    }

}

module.exports = Persona;