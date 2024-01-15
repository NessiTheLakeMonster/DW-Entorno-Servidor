const {Router } = require('express');
const controlador_usuarios = require('../controllers/userController');
const controlador_tareas = require('../controllers/tareaController');
const router = Router();

router.post('/registro', controlador_usuarios.usuariosPost);
router.get('/', controlador_usuarios.usuariosGet);
router.get('/:id', controlador_usuarios.usuariosGetById);
router.post('/faker', controlador_usuarios.usuariosPostFaker);

router.get('/tareas', controlador_tareas.tareasGet);


module.exports = router;