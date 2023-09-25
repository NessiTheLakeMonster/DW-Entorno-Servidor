1. **Mundo animal**
   
Vamos a realizar una estructura de clases en la que queden reflejados los dos tipos de animales domésticos principales: perros y gatos.
+ Todos tendrán un nombre, una raza, un peso y un color. 
+ En cuanto a métodos tendrán los siguientes: ``vacunar``, ``comer``, ``dormir``, ``hacerRuido``, ``hacerCaso``. 
  + Los métodos ``vacunar``, ``comer`` y ``dormir`` son comunes. 
  + Los métodos ``hacerRuido`` y ``hacerCaso`` serán sobreescritos en las especializaciones: 
    + ``hacerRuido`` para los perros será un ladrido y para los gatos un maullido
    + ``hacerCaso`` para los perros será un método boolean que devolverá true el 90% de las veces y para los gatos el 5%. 
  + Los perros tendrán un método particular: ``sacarPaseo``. 
  + Los gatos tendrán otro método que será: ``toserBolaPelo``.