# Comandos para creación de Proyectos en Node

Inicializacion de node
```bash
npm init -y
```

Instalación de la librería express
```bash
npm install express
```

Instalación del servidor para tenerlo todo el rato
```bash
npm install -g nodemon
npm install --save-dev nodemon
```

Instalación para poder tener el archivo `.env`
```bash
npm install dotenv --save
```

Para generar la carpeta ``node_modules``
```bash
npm install
```

----

#### Para uso con Base de Datos

Se necesita la dependencia de `mysql`
```bash
npm install mysql2
```

----

#### Problemas con cors

Para instalar `cors`, debe aparecer como dependencia en `package.json`
```bash
npm install cors
```
En el archivo situado en `/app/server.js`, para evitar problemas de `cors`
```js
middlewares() {
    this.app.use(cors());
}
```

----

## Estructura de carpetas estandar 

```
app
models
controllers

```