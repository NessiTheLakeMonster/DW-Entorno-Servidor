const {Router } = require('express');
const controlador = require('../controllers/userController');
const router = Router();

router.post('/', controlador.usuariosPost);
router.get('/', controlador.usuariosGet);

module.exports = router;