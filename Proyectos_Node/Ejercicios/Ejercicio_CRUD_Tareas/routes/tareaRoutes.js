const {Router } = require('express');
const controlador_tareas = require('../controllers/tareaController');
const router = Router();

router.get('/tareas', controlador_tareas.tareasGet);
router.post('/tareas/faker', controlador_tareas.tareasPostFaker);

module.exports = router;