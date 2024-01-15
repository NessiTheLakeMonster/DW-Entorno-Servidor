const mocker = require('mocker-data-generator').default;
const faker = require('faker');

const userSchema = {
    nombre: {
        faker: 'name.firstName'
    },
    apellido: {
        faker: 'name.lastName'
    },
    email: {
        faker: 'internet.email'
    },
    password: {
        faker: 'internet.password'
    }
};

const userModel = {
    user: userSchema
};

const userFactory = () => {
    return mocker()
        .addGenerator('faker', faker)
        .addGenerator('userModel', userModel)
        .schema('userModel', userModel, 1)
        .build()
        .then(data => {
            const user = data.userModel[0];
            return user;
        })
        .catch(err => console.log(err));
};

module.exports = userFactory;
