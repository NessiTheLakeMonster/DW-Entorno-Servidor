# MongoDB

## Como usar MongoDB en un proyecto con Node

Paquetes que se necesitan para que funcione correctamente
```bash
npm install mongodb
nom install mongoose
```

El archivo `package.json` debe acabar con lastas dependencias
```json
    "dependencies": {
        "cors": "^2.8.5",
        "dotenv": "^16.0.3",
        "express": "^4.18.2",
        "mongodb": "^6.3.0",
        "mongoose": "^6.12.6"
    },
    "devDependencies": {
        "nodemon": "^3.0.3"
    }
```

## Comandos útiles para usar MongoDB

Crea la base de datos y se mete en ella
```bash
use [nombreBaseDatos]
```