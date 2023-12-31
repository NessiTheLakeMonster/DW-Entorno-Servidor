const mysql = require('mysql2');

/**
 * En esta clase encapsularemos la comunicación con la base de datos.
 */
class Conexion {

    constructor(options) {
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
    }


    query = (sql, values) => {
        //Devolver una promesa
        //console.log(sql + values);
        return new Promise((resolve, reject) => {
            this.connection.query(sql, values, (err, rows) => {
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

    getlistado = async () => {
        let resultado = [];
        this.conectar();
        try {
            resultado = await this.query('SELECT * FROM personas');
            // console.log('Y aquí');
            this.desconectar();
        } catch (error) {
            this.desconectar();
            throw error;
        }
        return resultado;
    }

    getUsuario = async (dni) => {
        let resultado = [];
        this.conectar();
        try {
            resultado = await this.query('SELECT * FROM personas WHERE DNI = ?', [dni]);
            // console.log('Y aquí');
            this.desconectar();
        } catch (error) {
            this.desconectar();
            throw error;
        }
        return resultado;
    }

    registrarUsuario = async (dni, nombre, clave, tfno) => {
        let resultado = 0;
        this.conectar();
        try {
            resultado = await this.query('INSERT INTO personas VALUES (?,?,?,?)', [dni, nombre, clave, tfno]);
            // console.log('Y aquí');
            this.desconectar();
        } catch (error) {
            this.desconectar();
            throw error;
        }
        return resultado;
    }

    modificarUsuario = async (dni, nombre, clave, tfno) => {
        let resultado = 0;
        this.conectar();
        try {
            resultado = await this.query('UPDATE personas SET Nombre=?,Clave=?,Tfno=? WHERE DNI = ?', [nombre, clave, tfno, dni]);
            // console.log('Y aquí');
            this.desconectar();
        } catch (error) {
            this.desconectar();
            throw error;
        }
        return resultado;
    }

    borrarUsuario = async (dni) => {
        let resultado = 0;
        this.conectar();
        try {
            resultado = await this.query('DELETE FROM  personas  WHERE DNI = ?', [dni]);
            // console.log('Y aquí');
            this.desconectar();
        } catch (error) {
            this.desconectar();
            throw error;
        }
        return resultado;
    }


}

module.exports = Conexion;
