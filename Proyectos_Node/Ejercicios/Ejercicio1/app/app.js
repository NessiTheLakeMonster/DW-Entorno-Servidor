require('dotenv').config()

const express = require('express')
const app = express()

const Server = require('./server');
const server = new Server();

app.use(express.json())

/* app.get('/:id', controlador.funGetAt); */

/* const rutaBase = '/api';
app.use(rutaBase, require('../routes/userRoutes')); */

server.listen();

/* app.listen(process.env.PORT); */
/* console.log(`Servidor Express escuchando en el puerto ${process.env.PORT}`) */