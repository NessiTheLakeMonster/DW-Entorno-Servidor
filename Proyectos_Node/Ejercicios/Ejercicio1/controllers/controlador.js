
const funGetAt = (req, res) => {
    let valor = parseInt(req.params.id, 10)

    let dia = valor
    let mes = dia / 30
    mes = Math.round(mes)

    if (valor > 0 || valor < 365) {
        res.status(200).json({
            'msg': 'Conversión realizada',
            'dia': dia,
            'mes': mes,
        })
    } else {
        res.status(203).json({
            'msg': 'Error'
        })
    }

}

module.exports = {
    funGetAt
}