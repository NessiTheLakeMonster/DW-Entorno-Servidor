const { Router } = require('express');
const controlador = require('../controllers/controlador.js');
const router = Router();

router.get('/:id', controlador.funGetAt);

module.exports = router;