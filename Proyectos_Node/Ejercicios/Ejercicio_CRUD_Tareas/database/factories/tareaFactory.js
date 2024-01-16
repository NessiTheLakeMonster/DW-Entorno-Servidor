const { faker } = require('@faker-js/faker');

function tareaFactory() {
    const dificultades = ['baja', 'media', 'alta'];
    const indiceAleatorio = Math.floor(Math.random() * dificultades.length);
    const dificultad = dificultades[indiceAleatorio];

    return {
        descripcion: faker.lorem.sentence(),
        duracion: faker.number.int(1),
        dificultad: dificultad,
        terminada:  Math.round(Math.random()),
    };
}

module.exports = tareaFactory;