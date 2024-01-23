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

---

#### Uso de JWT (JSON Web Token)

Para poder hacer uso de tokens en la aplicación. Por defecto no existe una tabla en la base de datos donde se encuentren todos los token, se guardan en memoria. Si se cierra Node se revocan todos los tokens existentes en ese mismo momento.
```bash
npm install jsonwebtoken
```

----

#### Para incluir datos generados con faker

```bash
npm i @faker-js/faker
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

---

#### Bcrypt

```bash
npm i bcrypt
```

----

## Sequelize

Para poder instalar `Sequelize` para uso de base de datos, se hace con el siguiente paquete `npm`
```bash
npm install sequelize
```

#### Migrations con Sequelize

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

> [!CAUTION]
> SE DEBE CAMBIAR LA EXTENSIÓN JSON POR JS PERO SE PONE EXACTAMENTE LO MISMO

>[!IMPORTANT]
> A veces debe cambiarse esta línea en el archivo encontrado en la ruta de `models/index.js`
> ```js
> const config = require(__dirname + '/../config/config.js')[env];
> ```



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

#### Seeders

Para crear seeder del modelo de `User`:
```bash
npx sequelize-cli seed:generate --name userSeeder
```

Para ejecutar los seeders:
```bash
npx sequelize-cli db:seed:all
```

---

## WebSockets

Se debe instalar la dependencia necesaria en el paquete `npm`
```bash
npm install socket.io
```

---

## Subida de fotos

Genera numeros unicos en base de una semilla aleatoria, nunca va a generar dos iguales. Es útil para las fotos y para demás campos
```bash
npm install uuid
```


```bash
npm install express-fileupload
```

#### Subida de fotos mediante `Cloudinary`

>[!IMPORTANT]
> Se necesita crear cuenta para poder utilizar esta acción.<br>
> [Página Web Oficial](https://cloudinary.com/)

Se necesitan ambas dependencias, se ven en el archivo `package.json`
```json
{
  "@cloudinary/url-gen": "^1.16.0",
  "cloudinary": "^1.41.3"
}
```

>[!CAUTION]
> Aunque se use el método de cloudninary se sigue necesitando instalar el paquete de 
> ```bash
> npm install express-fileupload
> ```

Las cuales son instaladas con los comandos
```bash
npm install cloudinary
npm install @cloudinary/url-gen
```

Para el correcto funcionamiento se necesitan añadir una serie de campos al archivo `.env`
```properties
CLOUDINARY_API_KEY = ".."
CLOUDINARY_API_SECRET = ".."
CLOUDINARY_CLOUD_NAME = ".."
CLOUDINARY_URL = ".."
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