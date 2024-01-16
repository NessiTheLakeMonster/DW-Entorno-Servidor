const mysql = require('mysql2');
const Conexion = require('./Conexion.js')

class Conexion_Tarea {

    constructor() {
        this.con = new Conexion()
    }

    /* --------------------- FUNCIONES DE LA TABLA DE TAREAS --------------------- */
    getTarea = async () => {
        let resultado = [];
        try {
            resultado = await this.con.query('SELECT * FROM tareas');
        } catch (error) {
            throw error;
        }
        return resultado;
    }

    getTareaById = async (id) => {
        let resultado = [];
        try {
            resultado = await this.con.query('SELECT * FROM tareas WHERE id = ?', [id]);
        } catch (error) {
            throw error;
        }
        return resultado;
    }

    postTarea = async (descripcion, duracion, dificultad, terminado) => {
        let resultado = [];
        try {
            resultado = await this.con.query('INSERT INTO tareas (descripcion, duracion, dificultad, terminada) VALUES (?, ?, ?, ?)', [descripcion, duracion, dificultad, terminado]);
        } catch (error) {
            throw error;
        }
        return resultado;
    }

    putTarea = async (descripcion, duracion, dificultad, terminado, id) => {
        let resultado = [];
        try {
            resultado = await this.con.query('UPDATE tareas SET descripcion = ?, duracion = ?, dificultad = ?, terminada = ? WHERE id = ?', [descripcion, duracion, dificultad, terminado, id]);
        } catch (error) {
            throw error;
        }
        return resultado;
    }

    deleteTarea = async (id) => {
        let resultado = [];
        try {
            resultado = await this.con.query('DELETE FROM tareas WHERE id = ?', [id]);
        } catch (error) {
            throw error;
        }
        return resultado;
    }
}

module.exports = Conexion_Tarea;