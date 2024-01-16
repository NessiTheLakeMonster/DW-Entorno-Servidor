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

#### Paquete para incluir el validator

```bash
npm install express-validator
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

#### Uso de Sequelize

Para poder instalar `Sequelize` para uso de base de datos, se hace con el siguiente paquete npm
```bash
npm install sequelize
```

##### Migrations con Sequelize

Para consultar la documentación oficial de las migrations con Sequelize [aquí.](https://sequelize.org/docs/v6/other-topics/migrations/)

Para instalar Sequelize CLI:
```bash
npm install --save-dev sequelize-cli
```

Para crear un proyecto vacío
```bash
npx sequelize-cli init
```

Se crea por defecto en la ruta `config/config.json` para las bases de datos
<p style="color: red;">[ SE DEBE CAMBIAR LA EXTENSIÓN JSON POR JS PERO SE PONE EXACTAMENTE LO MISMO ]</p>

La que se usará para hacer pruebas sera la de `development`, una vez este todo listo se usará la de `production`
```json
{
  "development": {
    "username": "root",
    "password": null,
    "database": "database_development",
    "host": "127.0.0.1",
    "dialect": "mysql"
  },
  "test": {
    "username": "root",
    "password": null,
    "database": "database_test",
    "host": "127.0.0.1",
    "dialect": "mysql"
  },
  "production": {
    "username": "root",
    "password": null,
    "database": "database_production",
    "host": "127.0.0.1",
    "dialect": "mysql"
  }
}
```

Para crear el primer modelo y su migracion, ejemplo:
```bash
npx sequelize-cli model:generate --name User --attributes firstName:string,lastName:string,email:string
```
La ejecución de este comando creará :
+ Un modelo `User` en la carpeta `/models`
+ Una archivo de tipo `XXXXXXXXXXXXXX-create-user.j` en la carpeta `/migrations`

Para lanzar la migrations:
```bash
npx sequelize-cli db:migrate
```

Para deshacer (hacer un rollback) migrations:
```bash
npx sequelize-cli db:migrate:undo
```

---

#### Uso de JWT (JSON Web Token)

Para poder hacer uso de tokens en la aplicación. Por defecto no existe una tabla en la base de datos donde se encuentren todos los token, se guardan en memoria. Si se cierra Node se revocan todos los tokens existentes en ese mismo momento.
```bash
npm install jsonwebtoken
```

---

## Estructura de carpetas estándar 

```
    |
    |- app
        |- app.js
        |- server.js
    |- controllers
    |- database
        |- factories
        |- Conexion.js
    |- helpers
    |- middlewares
    |- models
    |- routes
```