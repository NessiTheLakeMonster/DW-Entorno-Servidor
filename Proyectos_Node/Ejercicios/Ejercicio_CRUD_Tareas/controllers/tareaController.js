const { response, request } = require('express');
const Conexion_Tarea = require('../database/Conexion_Tarea.js')
const tareaFactory = require('../database/factories/tareaFactory.js');
const { login, recuperarId } = require('../controllers/userController.js');


const tareasPostFaker = async (req = request, res = response) => {
    const conx = new Conexion_Tarea();
    const tarea = tareaFactory();

    const userId = await login(req, res);

    const id = await recuperarId(
        req = request,
        res = response,
        userId 
    );

    conx.postTarea(tarea.descripcion, tarea.duracion, tarea.dificultad, tarea.terminada, id)
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

const tareasGet = (req, res = response) => {
    const conx = new Conexion_Tarea();

    conx.getTarea()
        .then(msg => {
            console.log('Listado correcto!');
            res.status(200).json(msg);
        })
        .catch(err => {
            console.log('No hay registros');
            res.status(200).json({ 'msg': 'No se han encontrado registros' });
        });
}

module.exports = {
    tareasGet,
    tareasPostFaker
}