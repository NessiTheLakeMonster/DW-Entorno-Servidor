const { response, request } = require('express');
const userFactory = require('../database/factories/userFactory.js');
const Conexion = require('../database/Conexion.js');
const Conexion_Persona = require('../database/Conexion_Persona.js');

const usuariosPost = (req = request, res = response) => {
    const conx = new Conexion_Persona();

    conx.postUsuario(req.body.nombre, req.body.apellido, req.body.email, req.body.password)
        .then(msg => {
            console.log('Insertado correctamente!');
            res.status(201).json(msg);
        })
        .catch(err => {
            console.log(err)
            console.log('Fallo en el registro!');
            res.status(203).json(err);
        });
}

const usuariosPostFaker = async (req = request, res = response) => {
    const conx = new Conexion_Persona();
    const user = userFactory();

    conx.postUsuario(user.nombre, user.apellido, user.email, user.password)
        .then(msg => {
            console.log('Insertado correctamente!');
            res.status(201).json(msg);
        })
        .catch(err => {
            console.log(err)
            console.log('Fallo en el registro!');
            res.status(203).json(err);
        });
}

const usuariosGet = (req, res = response) => {
    const conx = new Conexion_Persona();

    conx.getUsuarios()
        .then(msg => {
            console.log('Listado correcto!');
            res.status(200).json(msg);
        })
        .catch(err => {
            console.log('No hay registros');
            res.status(203).json({ 'msg': 'No se han encontrado registros' });
        });
}

const usuariosGetById = (req, res = response) => {
    const conx = new Conexion_Persona();

    conx.getUsuarioById(req.params.id)
        .then(msg => {
            console.log('Listado correcto!');
            res.status(200).json(msg);
        })
        .catch(err => {
            console.log('No hay registros');
            res.status(203).json({ 'msg': 'No se han encontrado registros' });
        });
}

const usuariosPut = (req, res = response) => {
    const conx = new Conexion_Persona();

    conx.putUsuario(req.body.nombre, req.body.apellido, req.body.email, req.body.password, req.params.id)
        .then(msg => {
            console.log('Actualizado correctamente!');
            res.status(201).json(msg);
        })
        .catch(err => {
            console.log(err)
            console.log('Fallo en el registro!');
            res.status(203).json(err);
        });
}

const login = (req, res = response) => {
    const conx = new Conexion_Persona();

    conx.loginUsuario(req.body.email, req.body.password)
        .then(msg => {
            console.log('Login correcto!');
            res.status(201).json(msg);
        })
        .catch(err => {
            console.log(err)
            console.log('Fallo en el login!');
            res.status(203).json(err);
        });
}

const recuperarId = (req, res = response) => {
    const conx = new Conexion_Persona();

    conx.recuperarIdUsuario(req.body.email)
        .then(msg => {
            console.log('Listado correcto!');
            res.status(200).json(msg);
        })
        .catch(err => {
            console.log('No hay registros');
            res.status(203).json({ 'msg': 'No se han encontrado registros' });
        });
}

module.exports = {
    usuariosPost,
    usuariosGet,
    usuariosGetById,
    usuariosPostFaker,
    login,
    recuperarId,
}