const mocker = require('mocker-data-generator').default;
const faker = require('faker');

const tareaSchema = {
    nombre: {
        faker: 'name.firstName'
    },
    descripcion: {
        faker: 'name.lastName'
    },
    duracion: {
        faker: 'random.number'
    },
    dificultad: {
        faker: 'random.number'
    },
    terminado: {
        faker: 'random.boolean'
    }
};