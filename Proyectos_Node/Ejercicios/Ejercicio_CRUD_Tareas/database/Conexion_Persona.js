const mysql = require('mysql2');
const Conexion = require('./Conexion.js')

class Conexion_Persona {

    constructor() {
        this.con = new Conexion()
    }

    /* --------------------- FUNCIONES DE LA TABLA DE USUARIOS --------------------- */

    getUsuarios = async () => {
        let resultado = [];
        try {
            resultado = await this.con.query('SELECT * FROM usuarios');
        } catch (error) {
            throw error;
        }
        return resultado;
    }

    getUsuarioById = async (id) => {
        let resultado = [];
        try {
            resultado = await this.con.query('SELECT * FROM usuarios WHERE id = ?', [id]);
        } catch (error) {
            throw error;
        }
        return resultado;
    }

    postUsuario = async (nombre, apellido, email, password) => {
        let resultado = [];
        try {
            resultado = await this.con.query('INSERT INTO usuarios (nombre, apellido, email, password) VALUES (?, ?, ?, ?)', [nombre, apellido, email, password]);
        } catch (error) {
            throw error;
        }
        return resultado;
    }

    putUsuario = async (nombre, apellido, email, password, id) => {
        let resultado = [];
        try {
            resultado = await this.con.query('UPDATE usuarios SET nombre = ?, apellido = ?, email = ?, password = ? WHERE id = ?', [nombre, apellido, email, password, id]);
        } catch (error) {
            throw error;
        }
        return resultado;
    }

    deleteUsuario = async (id) => {
        let resultado = [];
        try {
            resultado = await this.con.query('DELETE FROM usuarios WHERE id = ?', [id]);
        } catch (error) {
            throw error;
        }
        return resultado;
    }

    loginUsuario = async (email, password) => {
        let resultado = [];
        try {
            resultado = await this.con.query('SELECT * FROM usuarios WHERE email = ? AND password = ?', [email, password]);
        } catch (error) {
            throw error;
        }
        return resultado;
    }

    recuperarIdUsuario = async (email) => {
        let resultado = [];
        try {
            resultado = await this.con.query('SELECT id FROM usuarios WHERE email = ?', [email]);
        } catch (error) {
            throw error;
        }
        return resultado;
    }

}

module.exports = Conexion_Persona;