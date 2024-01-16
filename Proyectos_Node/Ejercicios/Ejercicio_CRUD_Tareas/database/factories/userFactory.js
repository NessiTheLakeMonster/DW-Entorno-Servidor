const { faker} = require('@faker-js/faker');

function userFactory() {
    return {
        nombre: faker.person.firstName(),
        apellido: faker.person.lastName(),
        email: faker.internet.email(),
        password: faker.internet.password(),
    };
}

module.exports = userFactory;