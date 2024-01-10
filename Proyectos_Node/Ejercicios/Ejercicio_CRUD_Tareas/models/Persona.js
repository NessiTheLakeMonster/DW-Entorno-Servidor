var mocker = require('mocker-data-generator').default
var faker = require('faker')

class Persona {

    constructor(dni, nombre, apellido) {
        this.dni = dni;
        this.nombre = nombre;
        this.apellido = apellido;
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