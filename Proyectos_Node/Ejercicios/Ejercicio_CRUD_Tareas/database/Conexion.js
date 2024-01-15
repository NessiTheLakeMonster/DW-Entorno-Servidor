require('dotenv').config();
const mysql = require('mysql2');

/**
 * En esta clase encapsularemos la comunicación con la base de datos.
 */
class Conexion {

    constructor(options) {
        this.config = {
            host: process.env.DB_HOST,
            user: process.env.DB_USER,
            password: process.env.DB_PASSWORD,
            database: process.env.DB_DATABASE,
            waitForConnections: true,
            connectionLimit: process.env.DB_MAXCONNECTIONS,
            queueLimit: 0
        };
        this.pool = mysql.createPool(this.config);
    }

    /* constructor(options) {
        this.connection = mysql.createConnection({
            host: process.env.DB_HOST,
            user: process.env.DB_USER,
            password: process.env.DB_PASSWORD,
            database: process.env.DB_DATABASE,
            port: process.env.DB_PORT
        });
    }


    conectar = () => {
        this.connection.connect((err) => {
            if (err) {
                console.error('Error de conexion: ' + err.stack);
                return;
            }
            console.log('Conectado con el identificador ' + this.connection.threadId);
        });
    }

    desconectar = () => {
        this.connection.end((err) => {
            if (err) {
                console.error('Error de conexion: ' + err.stack);
                return;
            }
            console.log('Desconectado con éxito');
        });
    } */


    query = (sql, values) => {
        //Devolver una promesa
        return new Promise((resolve, reject) => {
            this.pool.query(sql, values, (err, rows) => {
                if (err) {
                    reject(err)
                } else {
                    // console.log('Llego aquí');
                    if (rows.length === 0) {
                        reject(err);
                    }
                    resolve(rows)
                }
            })
        })
    }

    /* --------------------- FUNCIONES DE LA TABLA DE USUARIOS --------------------- */

    getUsuarios = async () => {
        let resultado = [];
        try {
            resultado = await this.query('SELECT * FROM usuarios');
        } catch (error) {
            throw error;
        }
        return resultado;
    }

    getUsuarioById = async (id) => {
        let resultado = [];
        try {
            resultado = await this.query('SELECT * FROM usuarios WHERE id = ?', [id]);
        } catch (error) {
            throw error;
        }
        return resultado;
    }

    postUsuario = async (nombre, apellido, email, password) => {
        let resultado = [];
        try {
            resultado = await this.query('INSERT INTO usuarios (nombre, apellido, email, password) VALUES (?, ?, ?, ?)', [nombre, apellido, email, password]);
        } catch (error) {
            throw error;
        }
        return resultado;
    }

    putUsuario = async (nombre, apellido, email, password, id) => {
        let resultado = [];
        try {
            resultado = await this.query('UPDATE usuarios SET nombre = ?, apellido = ?, email = ?, password = ? WHERE id = ?', [nombre, apellido, email, password, id]);
        } catch (error) {
            throw error;
        }
        return resultado;
    }

    deleteUsuario = async (id) => {
        let resultado = [];
        try {
            resultado = await this.query('DELETE FROM usuarios WHERE id = ?', [id]);
        } catch (error) {
            throw error;
        }
        return resultado;
    }

    /* --------------------- FUNCIONES DE LA TABLA DE TAREAS --------------------- */
}

module.exports = Conexion;