const express = require('express')
const app = express()
const port = 9090

let controlador = require('./controllers/controlador.js')

app.use(express.json())

app.get('/', controlador.funGet);

app.get('/:id?', controlador.funGetAt);

app.delete('/:id', controlador.funDelete);

app.post('/', controlador.funPost);

app.put('/:id', controlador.funPut);

app.listen(port)
console.log(`Servidor Express escuchando en el puerto ${port}`)