const {response,request} = require('express');
const Conexion = require('../models/Conexion.js');

const usuariosPost =  (req = request, res = response) => {
    const conx = new Conexion();
    
    conx.registrarUsuario(req.body.dni, req.body.nombre, req.body.apellido)    
        .then( msg => {
            console.log('Insertado correctamente!');
            res.status(201).json(msg);
        })
        .catch( err => {
            console.log('Fallo en el registro!');
            res.status(203).json(err);
        });
}

const usuariosGet =  (req, res = response) => {
    const conx = new Conexion();

    conx.getlistado()    
        .then( msg => {
            console.log('Listado correcto!');
            res.status(200).json(msg);
        })
        .catch( err => {
            console.log('No hay registros');
            res.status(200).json({'msg':'No se han encontrado registros'});
        });
}

module.exports = {
    usuariosPost,
    usuariosGet
}