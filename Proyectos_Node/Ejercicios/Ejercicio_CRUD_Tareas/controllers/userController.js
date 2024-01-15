const { response, request } = require('express');
const Conexion = require('../database/Conexion.js');
const userFactory = require('../database/factories/userFactory.js');

const usuariosPost = (req = request, res = response) => {
    const conx = new Conexion();

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
    const conx = new Conexion();
    const { user } = await userFactory();

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
    const conx = new Conexion();

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
    const conx = new Conexion();

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

module.exports = {
    usuariosPost,
    usuariosGet,
    usuariosGetById,
    usuariosPostFaker
}