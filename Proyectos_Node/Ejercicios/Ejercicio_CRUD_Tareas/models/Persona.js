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

var user = {
    dni: {
        faker: 'random.number'
    },
    nombre: {
        faker: 'name.firstName'
    },
    apellido: {
        faker: 'name.lastName'
    }
}

var Persona = mocker()
    .schema('user', user, 5)
    .buildSync()

module.exports = Persona;