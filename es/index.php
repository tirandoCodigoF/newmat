<!DOCTYPE html>
<html lang="es" manifest="manifiesto.appcache">
    <head>
        <title>Calcular porcentaje - Calculadora de porcentajes online</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
        <meta name="description" content="Calcular porcentaje - Calculadora de porcentajes online gratuita y fácil de usar. Calcula aumentos, disminuciones y porcentajes de un número. Herramienta rápida y precisa para estudiantes, profesionales y cualquier persona que necesite calcular porcentajes.">
        <meta name="keywords" content="Calcular porcentaje, Calcular porcentajes, Calculadora de porcentajes, Calculadora de porcentaje, Porcentaje calculadora, Calculadora porcentual, Calcular aumento porcentaje, Calcular disminución porcentaje, Porcentaje de un número, Calculadora de porcentajes online, Calculadora de porcentajes gratis, Calculadora de porcentajes fácil, Calculadora de porcentajes para estudiantes, Calculadora de porcentajes para negocios, Calculadora de porcentajes para finanzas, Calculadora de porcentajes para matemáticas, calcular, calculadora, porcentaje, porcentajes, calcular el porcentaje, calcular porcentaje, Calculadora de porcentajes online, Calculadora de porcentajes gratis, Calculadora de porcentajes fácil, Calcular porcentaje de aumento, Calcular porcentaje de disminución, Porcentaje de incremento, Porcentaje de decremento, Calculadora de porcentajes matemáticas, Calculadora de porcentajes financieras, Calculadora de porcentajes estadísticas, Calculadora de porcentajes de aumento y disminución, Calculadora de porcentajes para estudiantes de matemáticas, Calculadora de porcentajes para profesionales de finanzas">
        <meta name="author" content="calcular-porcentajes.com">
        <link rel="shortcut icon" href="../includes/img/favicon.png">
        <link href="../plugins/assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="../plugins/assets/dist/js/fontawesome.js"></script>
        <link href="../includes/css/styleone.css" rel="stylesheet" type="text/css">
        <?php include "../includes/google-ads.php"; ?>
    </head>
    <body class="bodycolor">
    <header>
    <?php include '../includes/nabvar.php'; ?>
<div class="card" style="padding-top: 80px;">
  <div class="card-body" align="center">
    <h1 class="card-title" style="font-size: 1.4rem"><b>Calcular porcentaje - Calculadoras de porcentajes online</b></h1>
    <h6 class="card-text" align="justify" style="font-size: 0.9rem;">"¡Bienvenido a (calcular-porcentajes.com)! La calculadora de porcentajes online más fácil y rápida de usar. Calcula porcentajes de manera sencilla y precisa, sin complicaciones. Aumentos, disminuciones, porcentajes de un número y más. ¡Comienza a calcular ahora y haz tus cálculos de porcentajes de manera rápida y segura!"
    </h6>
    <div class="adsanuncio" align="center"><?php include '../includes/cabecera-google-ads.php'; ?></div>
</div>
</div>
    </header>
<div class="container" style="width: 100%;max-width:95%;"> 
<div class="row">
<!-- <div class="col-md-1">
</div>    -->
<div class="col-md-5">
    <!-- basica -->
  <div class="mt-3 mb-3">
  <div class="card mb-3">
  <div class="card-body">
    <h1 class="card-title" style="font-size: 1.3rem;">Calculadora básica de porcentajes</h1>
    <h1 class="card-title" style="font-size: 1rem;">Calcular porcentajes basicos</h1>
    <p class="card-text">
        <div class="row">
         <div class="col-md-6">
        <label>Cual es el:</label>
        <div class="input-group mb-3">
         <input type="number" min="0" id="valor1" placeholder="10%" autofocus required title="Ingresa un valor:" class="form-control" autocomplete="off" />
         <span class="input-group-text">%</span>
         </div></div> 
        <div class="col-md-6">
            <Label>de: </Label>
         <div class="input-group mb-3">
         <input type="number" min="0" id="valor2" placeholder="100" autofocus required title="Ingresa un valor:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
        </div></div>
    </div>
    <div class="row">
    <div class="col-md-4"></div><div class="col-md-4"></div>
    <div class="col-md-4">
    <button class="btn btn-success btn-sm form-control" id="btn1x">Calcular</button> 
    </div>
    </div>
        <div class="msg1 mt-2 mb-2" align="center"></div>
    </p>
    
    <p class="card-text"><small class="text-muted"><a href="javascript:void()" id="formbasico">Ver Formula..</a></small></p>
    <p class="card-text" id="formula1" style="display: none;">
        <small>
        1. Cálculo de porcentaje normal <br>
        P= Indica el porcentaje.<br>
        V= Indica el valor al cual le calculamos el porcentaje.<br> 
        Este cálculo responde la pregunta: “¿cuál es el porcentaje P de V?” <br>
        La fórmula para esto es: (P/100) *V <br>
        Ejemplo: ¿Cuál es el 15% de 160? De acuerdo a la fórmula calculamos (15/100) *160 = 0.15*160 = 24 <br>
        <a href="javascript:void()" class="cerrarformula">Cerrar</a>
    
    </small>
    </p>   
  </div>
</div>
</div>
<!-- end basica -->

    <!-- basica descuento -->
  <div class="mt-3 mb-3">
  <div class="card mb-3">
  <div class="card-body">
    <h1 class="card-title" style="font-size: 1.3rem;">Calculadora de descuento de precios</h1>
    <h1 class="card-title" style="font-size: 1rem;">Calcular el precio final tras aplicar un porcentaje de descuento.</h1>
    <p class="card-text">
        <div class="row">
         <div class="col-md-6">
        <label>Precio ($):</label>
        <div class="input-group mb-3">
         <input type="number" min="0" id="valor1_1" placeholder="$100 MXN- USD - €" autofocus required title="Ingresa un valor:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
         </div></div> 
        <div class="col-md-6">
            <Label>Descuento (%):</Label>
         <div class="input-group mb-3">
         <input type="number" min="0" id="valor2_1" placeholder="20 %" autofocus required title="Ingresa un valor:" class="form-control" autocomplete="off" />
         <span class="input-group-text">%</span>
        </div></div>
    </div>
    <div class="row">
    <div class="col-md-4"></div><div class="col-md-4"></div>
    <div class="col-md-4">
    <button class="btn btn-success btn-sm form-control" id="btn1x_1">Calcular</button> 
    </div>
    </div>
        <div class="msg1_1 mt-2 mb-2" align="center"></div>
    </p>
    
    <p class="card-text"><small class="text-muted"><a href="javascript:void()" id="formbasico_1">Ver Formula..</a></small></p>
    <p class="card-text" id="formula1_1" style="display: none;">
        <small>
        1. Cálcular el precio final tras aplicar un porcentaje de descuento (disminución).<br>
        P= Porcentaje de descuento (disminución).<br>
        V= Indica el precio del producto.<br> 
        D= Precio final con descuento (disminución).<br>
        Este cálculo responde la pregunta: “¿cuál es el precio (costo) tras aplicar un porcentaje de descuento?” <br>
        La fórmula para esto es: D=V-((P/100)*V)<br>
        Ejemplo: Si el precio inicial es 120 y se aplica un descuento (disminución) de 20 %, ¿Cuál es el precio final?<br>
        De acuerdo a la fórmula calculamos D = 120 - ((20 / 100) * 120) = (20 / 100)= 0.2 * 120 = 24, 120 - 24 = 96 <br>
        Entonces el precio final es de 96 (MXN,USD,€,ETC).<br>
        <a href="javascript:void()" class="cerrarformula">Cerrar</a>
    
    </small>
    </p>   
  </div>
</div>
</div>
<!-- end basica descuento-->
   <!-- basica aumento -->
  <div class="mt-3 mb-3">
  <div class="card mb-3">
  <div class="card-body">
    <h1 class="card-title" style="font-size: 1.3rem;">Calculadora de aumento de precios</h1>
    <h1 class="card-title" style="font-size: 1rem;">Calcular el precio final tras aplicar un porcentaje de aumento.</h1>
    <p class="card-text">
        <div class="row">
         <div class="col-md-6">
        <label>Precio ($):</label>
        <div class="input-group mb-3">
         <input type="number" min="0" id="valor1_2" placeholder="$100 MXN- USD - €" autofocus required title="Ingresa un valor:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
         </div></div> 
        <div class="col-md-6">
            <Label>Aumento (%):</Label>
         <div class="input-group mb-3">
         <input type="number" min="0" id="valor2_2" placeholder="20 %" autofocus required title="Ingresa un valor:" class="form-control" autocomplete="off" />
         <span class="input-group-text">%</span>
        </div></div>
    </div>
    <div class="row">
    <div class="col-md-4"></div><div class="col-md-4"></div>
    <div class="col-md-4">
    <button class="btn btn-success btn-sm form-control" id="btn1x_2">Calcular</button> 
    </div>
    </div>
        <div class="msg1_2 mt-2 mb-2" align="center"></div>
    </p>
    
    <p class="card-text"><small class="text-muted"><a href="javascript:void()" id="formbasico_2">Ver Formula..</a></small></p>
    <p class="card-text" id="formula1_2" style="display: none;">
        <small>
        1. Cálcular el precio final tras aplicar un porcentaje de aumento (incremento).<br>
        P= Porcentaje de aumento (incremento).<br>
        V= Indica el precio del producto.<br> 
        A= Precio final con aumento (incremento).<br>
        Este cálculo responde la pregunta: “¿cuál es el precio (costo) tras aplicar un porcentaje de aumento (incremento)?” <br>
        La fórmula para esto es: A=V+((P/100)*V)<br>
        Ejemplo: Si el precio inicial es 120 y se aplica un aumento (incremento) de 20 %, ¿Cuál es el precio final?<br>
        De acuerdo a la fórmula calculamos A = 120 + ((20 / 100) * 120) = (20 / 100)= 0.2 * 120 = 24, 120 + 24 = 144 <br>
        Entonces el precio final es de 144 (MXN,USD,€,ETC).<br>
        <a href="javascript:void()" class="cerrarformula">Cerrar</a>
    </small>
    </p>   
  </div>
</div>
</div>
<!-- end basica aumento-->

 <!-- resta/suma -->
 <div class="mt-3 mb-3">
  <div class="card mb-3">
  <div class="card-body">
    <h1 class="card-title" style="font-size: 1.3rem;">Calculadora de suma y resta de porcentajes</h1>
    <h1 class="card-title" style="font-size: 1rem;">Calcular incremento (+) y dismunición (-) de porcentajes</h1>
    <p class="card-text">
        <div class="row">
         <div class="col-md-4">
        <label>Cantidad:</label>
        <div class="input-group mb-3">
         <input type="number" min="0" id="valor3" placeholder="100" autofocus required title="Ingresa un valor:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span> 
        </div> </div>  

        <div class="col-md-4">
        <label></label>
        <div class="input-group mb-3">
        <select name="select" id="select" class="form-control" autocomplete="off" autofocus required>
        <option value="1" selected>más (+)</option>
        <option value="2">menos (-)</option>
        </select>
        <span class="input-group-text">(+/-)</span> 
        </div> </div>

        <div class="col-md-4">
            <Label> </Label>
         <div class="input-group mb-3">  
         <input type="number" min="0" id="valor4" placeholder="10%" autofocus required title="Ingresa un valor:" class="form-control" autocomplete="off" />
         <span class="input-group-text">%</span> 
        </div></div>
    
    </div>
    <div class="row">
    <div class="col-md-4"></div><div class="col-md-4"></div>
    <div class="col-md-4">
        <button class="btn btn-success btn-sm form-control" id="btn2x">Calcular</button> 
    </div> </div>
        <div class="msg2 mt-2 mb-2" align="center"></div>
    </p>
   
    <p class="card-text"><small class="text-muted"><a href="javascript:void()" id="formbasico2">Ver Formula..</a></small></p>
    <p class="card-text" id="formula2" style="display: none;">
        <small>
        1.- Calculadora de incremento y disminución de porcentajes - suma o resta de porcentajes  <br>
        P= Indica el porcentaje.<br>
        V= Indica el valor al cual le calculamos el porcentaje.<br>
        Este cálculo resuelve la pregunta: “suma un porcentaje P a V” o “resta un porcentaje P a V”. <br>
        Para añadir porcentajes la fórmula es: V+((P/100)*V). <br>
        Para restar porcentajes la fórmula es: V-((P/100)*V) <br>
        Ejemplos:<br>
        Suma: suma un 25% a 280. De acuerdo a la fórmula podemos deducir: 280 + ((25/100)*280) = 280 + (0.25*280) = 350 <br>
        Resta: resta 20% a 240. Después de aplicar la fórmula de arriba obtenemos: 240 – ((20/100)*240) = 240 – (0.2*240) = 192 <br>
        <a href="javascript:void()" class="cerrarformula">Cerrar</a>
    
    </small>
    </p>   
  </div>
</div>
</div>

  <!-- cambio porcentual-->
  <div class="mt-3 mb-3">
  <div class="card mb-3">
  <div class="card-body">
    <h1 class="card-title" style="font-size: 1.3rem;">Calculadora de cambio porcentual</h1>
    <h1 class="card-title" style="font-size: 1rem;">Calcular cambio porcentual entre dos valores</h1>
    <p class="card-text">
        <div class="row">
         <div class="col-md-6">
        <label>Valor inicial: </label>
        <div class="input-group mb-3">
         <input type="number" min="0" id="valor5" placeholder="100" autofocus required title="Ingresa un valor:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
         </div></div> 
        <div class="col-md-6">
            <Label>Valor final: </Label>
         <div class="input-group mb-3">
         <input type="number" min="0" id="valor6" placeholder="150" autofocus required title="Ingresa un valor:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
        </div></div>
    </div>
    <div class="row">
    <div class="col-md-4"></div><div class="col-md-4"></div>
    <div class="col-md-4">
    <button class="btn btn-success btn-sm form-control" id="btn3x">Calcular</button> 
    </div>
    </div>
        <div class="msg3 mt-2 mb-2" align="center"></div>
    </p>
   
    <p class="card-text"><small class="text-muted"><a href="javascript:void()" id="formbasico3">Ver Formula..</a></small></p>
    <p class="card-text" id="formula3" style="display: none;">
        <small>
        1. Calcular la diferencia porcentual entre dos valores <br>
        P= Diferencia porcentual.<br>
        V1= Es el valor inicial.<br> 
        V2= Es el valor final.<br> 
        Este cálculo responde la pregunta: “¿cuál es el incremento porcentual entre V1 y V2?” <br>
        La fórmula para esto es: P= ((V2-V1) /V1) *100 <br>
        Con un resultado positivo, tenemos un incremento porcentual.<br>
        Con un resultado negativo, tenemos una disminución porcentual.<br>
        Ejemplo: ¿cuál es el incremento porcentual entre 45 y 79? <br>
        Al aplicar la fórmula tenemos: ((79-45)/45)*100 = 75.55%. Entonces hay un incremento porcentual del 75.55%. <br>
        <a href="javascript:void()" class="cerrarformula">Cerrar</a>
    
    </small>
    </p>   
  </div>
</div>
</div>
<!-- end new -->

<!-- addanuncio-->
<div class="mt-3 mb-3">
<div class="card mb-3">
<div class="card-body">
<div class="adsanuncio" align="center"><?php include '../includes/interesar-google-ads.php'; ?> </div> 
</div>
</div>
</div>
</div>
<!-- end row -->

<div class="col-md-5">
<!-- cambio porcentual positivo-->
<div class="mt-3 mb-3">
<div class="card mb-3">
  <div class="card-body">
    <h1 class="card-title" style="font-size: 1.3rem;">Calculadora de incremento porcentual</h1>
    <h1 class="card-title" style="font-size: 1rem;">Calcular aumento porcentual entre dos valores</h1>
    <p class="card-text">
        <div class="row">
         <div class="col-md-6">
        <label>Valor inicial: </label>
        <div class="input-group mb-3">
         <input type="number" min="0" id="valor5_1" placeholder="100" autofocus required title="Ingresa un valor:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
         </div></div> 
        <div class="col-md-6">
        <Label>Valor final: </Label>
         <div class="input-group mb-3">
         <input type="number" min="0" id="valor6_1" placeholder="150" autofocus required title="Ingresa un valor:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
        </div></div>
    </div>
    <div class="row">
    <div class="col-md-4"></div><div class="col-md-4"></div>
    <div class="col-md-4">
    <button class="btn btn-success btn-sm form-control" id="btn3x_1">Calcular</button> 
    </div>
    </div>
        <div class="msg3_1 mt-2 mb-2" align="center"></div>
    </p>
   
    <p class="card-text"><small class="text-muted"><a href="javascript:void()" id="formbasico3_1">Ver Formula..</a></small></p>
    <p class="card-text" id="formula3_1" style="display: none;">
        <small>
        1. Calcular el aumento (incremento) porcentual de un valor numerico a otro.<br>
        P= Incremento porcentual.<br>
        V1= Es el valor inicial.<br> 
        V2= Es el valor final.<br> 
        Este cálculo responde la pregunta: “¿cuál es el incremento (aumento) porcentual entre V1 y V2?” <br>
        La fórmula para esto es: P= ((V2-V1) /V1) *100 <br>
        Con un resultado positivo, tenemos un incremento porcentual.<br>
        Con un resultado negativo, tenemos una disminución porcentual.<br>
        Ejemplo: ¿cuál es el incremento (aumento) porcentual entre 45 y 79? <br>
        Al aplicar la fórmula tenemos: ((79-45)/45)*100 = 75.55%. Entonces hay un incremento (aumento) porcentual del 75.55%. <br>
        <a href="javascript:void()" class="cerrarformula">Cerrar</a>
    </small>
    </p>   
  </div>
</div>
</div>
<!-- end new -->

<!-- cambio porcentual negativo-->
<div class="mt-3 mb-3">
<div class="card mb-3">
  <div class="card-body">
    <h1 class="card-title" style="font-size: 1.3rem;">Calculadora de disminución porcentual</h1>
    <h1 class="card-title" style="font-size: 1rem;">Calcular reducción porcentual entre un valor numerico a otro</h1>
    <p class="card-text">
        <div class="row">
         <div class="col-md-6">
        <label>Valor inicial: </label>
        <div class="input-group mb-3">
         <input type="number" min="0" id="valor5_2" placeholder="100" autofocus required title="Ingresa un valor:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
         </div></div> 
        <div class="col-md-6">
            <Label>Valor final: </Label>
         <div class="input-group mb-3">
         <input type="number" min="0" id="valor6_2" placeholder="150" autofocus required title="Ingresa un valor:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
        </div></div>
    </div>
    <div class="row">
    <div class="col-md-4"></div><div class="col-md-4"></div>
    <div class="col-md-4">
    <button class="btn btn-success btn-sm form-control" id="btn3x_2">Calcular</button> 
    </div>
    </div>
        <div class="msg3_2 mt-2 mb-2"></div>
    </p>
   
    <p class="card-text"><small class="text-muted"><a href="javascript:void()" id="formbasico3_2">Ver Formula..</a></small></p>
    <p class="card-text" id="formula3_2" style="display: none;">
        <small>
        1. Calcular la reducción (disminución) porcentual de un valor numerico a otro.<br>
        P=  Disminución porcentual.<br>
        V1= Es el valor inicial.<br> 
        V2= Es el valor final.<br> 
        Este cálculo responde la pregunta: “¿cuál es la disminución (reducción) porcentual entre V1 y V2?” <br>
        La fórmula para esto es: P= ((V1-V2) /V1) *100 <br>
        Con un resultado positivo, tenemos un incremento porcentual.<br>
        Con un resultado negativo, tenemos una disminución porcentual.<br>
        Ejemplo: ¿cuál es la disminución (reducción) porcentual entre 45 y 79? <br>
        Al aplicar la fórmula tenemos: ((45-79)/45)*100 = -75.55%. Entonces hay una reducción (disminución) porcentual del 75.55%. <br>
        <a href="javascript:void()" class="cerrarformula">Cerrar</a> 
    </small>
    </p>   
  </div>
</div>
</div>
<!-- end new -->

<!-- error porcentual-->
<div class="mt-3 mb-3">
<div class="card mb-3">
  <div class="card-body">
    <h1 class="card-title" style="font-size: 1.3rem;">Calculadora de error porcentual</h1>
    <h1 class="card-title" style="font-size: 1rem;">Calcular error porcentual entre un valor medido y un valor teórico</h1> 
    <p class="card-text">
        <div class="row">
         <div class="col-md-6">
        <label>Valor medido: </label>
        <div class="input-group mb-3">
         <input type="number" min="0" id="valor13" placeholder="100" autofocus required title="Ingresa un valor:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
         </div></div> 
        <div class="col-md-6">
            <Label>Valor exacto: </Label>
         <div class="input-group mb-3">
         <input type="number" min="0" id="valor14" placeholder="150" autofocus required title="Ingresa un valor:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
        </div></div>
    </div>
    <div class="row">
    <div class="col-md-4"></div><div class="col-md-4"></div>
    <div class="col-md-4">
    <button class="btn btn-success btn-sm form-control" id="btn7x">Calcular</button> 
    </div>
    </div>
        <div class="msg7 mt-2 mb-2" align="center"></div>
    </p>
   
    <p class="card-text"><small class="text-muted"><a href="javascript:void()" id="formbasico7">Ver Formula..</a></small></p>
    <p class="card-text" id="formula7" style="display: none;">
        <small>
        1. Desviación porcentual <br>
        Podríamos necesitar la desviación porcentual cuando comparamos un valor teórico con un valor medido. <br>
        Podemos usar la siguiente fórmula para el cálculo de desviaciones porcentuales<br>
        La fórmula para esto es: Desviación porcentual = 100*| valor medido – valor teórico |/ | valor teórico | <br>
        Tomamos el valor absoluto tanto en el numerador como en el denominador.<br>
        Ejemplo: valor medido: 100, valor teorico: 105 <br>
        Al aplicar la fórmula tenemos: 100*|100 - 105|/|105|, Entonces la solución es: El error porcentual entre 100 y 105 es 4.76 %. <br>
        <a href="javascript:void()" class="cerrarformula">Cerrar</a>
    
    </small>
    </p>   
  </div>
</div>
</div>
<!-- end new -->

<!-- % de cuál número -->
<div class="mt-3 mb-3">
<div class="card mb-3">
  <div class="card-body">
    <h1 class="card-title" style="font-size: 1.3rem;">Calculadora de ¿V es el P de cuál número?</h1>
    <h1 class="card-title" style="font-size: 1rem;">Calcular ¿V es el P de cuál número?</h1>
    <p class="card-text">
        <div class="row">
         <div class="col-md-6">
        <label>Cantidad: </label>
        <div class="input-group mb-3">
         <input type="number" min="0" id="valor11" placeholder="100" autofocus required title="Ingresa un valor:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
         </div></div> 
        <div class="col-md-6">
            <Label>es el</Label>
         <div class="input-group mb-3">
         <input type="number" min="0" id="valor12" placeholder="10%" autofocus required title="Ingresa un valor:" class="form-control" autocomplete="off" />
         <span class="input-group-text">%</span>
        </div></div>
    </div>
    <div class="row">
    <div class="col-md-4"></div><div class="col-md-4"></div>
    <div class="col-md-4">
    <button class="btn btn-success btn-sm form-control" id="btn6x">Calcular</button> 
    </div>
    </div>
        <div class="msg6 mt-2 mb-2" align="center"></div>
    </p>
   
    <p class="card-text"><small class="text-muted"><a href="javascript:void()" id="formbasico6">Ver Formula..</a></small></p>
    <p class="card-text" id="formula6" style="display: none;">
        <small>
        1. ¿V es el P de cuál número? <br>
        P= Muestra el porcentaje.<br>
        X= Muestra el resultado.<br>
        V= Valor al cual le calculamos el porcentaje. Si hay dos valores hacemos la distinción entre V1 y V2.<br>
        Este cálculo responde la pregunta: “¿V es el P de cuál número?” <br>
        La fórmula para esto es: X = (V1/P)*100 <br>
        Ejemplo: ¿24 es el 9% de cuál número? <br>
        Al aplicar la fórmula tenemos: X = (24/9)*100 = 2.66*100 = 266, Entonces la solución a esta pregunta es: 24 es el 9% de 266.<br>
        <a href="javascript:void()" class="cerrarformula">Cerrar</a>
    
    </small>
    </p>   
  </div>
</div>
</div>
<!-- end new -->

<!-- porcentaje -->
<div class="mt-3 mb-3">
<div class="card mb-3">
  <div class="card-body">
    <h1 class="card-title" style="font-size: 1.3rem;">Calculadora de ¿Qué porcentaje de V2 es V1?</h1>
    <h1 class="card-title" style="font-size: 1rem;">Calcular ¿Qué porcentaje de V2 es V1?</h1>
    <p class="card-text">
        <div class="row">
         <div class="col-md-6">
        <label>Qué porcentaje de:</label>
        <div class="input-group mb-3">
         <input type="number" min="0" id="valor7" placeholder="150" autofocus required title="Ingresa un valor:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
         </div></div> 
        <div class="col-md-6">
            <Label>es</Label>
         <div class="input-group mb-3">
         <input type="number" min="0" id="valor8" placeholder="100" autofocus required title="Ingresa un valor:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
        </div></div>
    </div>
    <div class="row">
    <div class="col-md-4"></div><div class="col-md-4"></div>
    <div class="col-md-4">
    <button class="btn btn-success btn-sm form-control" id="btn4x">Calcular</button> 
    </div>
    </div>
        <div class="msg4 mt-2 mb-2" align="center"></div>
    </p>
   
    <p class="card-text"><small class="text-muted"><a href="javascript:void()" id="formbasico4">Ver Formula..</a></small></p>
    <p class="card-text" id="formula4" style="display: none;">
        <small>
        1. ¿Qué porcentaje de V2 es V1? <br>
        P= Muestra el porcentaje.<br>
        V= Valor al cual le calculamos el porcentaje. Si hay dos valores hacemos la distinción entre V1 y V2.<br>
        Este cálculo responde la pregunta: “¿qué porcentaje de V2 es V1?” <br>
        La fórmula para esto es: P = (100/V2)*V1 <br>
        Ejemplo: ¿qué porcentaje es 16 de 88? <br>
        Al aplicar la fórmula tenemos: P = (100/88) *16 = 1.14*16 = 18.18, Entonces la solución es: 16 es el 18.18% de 88. <br>
        <a href="javascript:void()" class="cerrarformula">Cerrar</a>
    
    </small>
    </p>   
  </div>
</div>
</div>
<!-- end new -->
<!-- porcentaje 2-->
<div class="mt-3 mb-3">
<div class="card mb-3">
  <div class="card-body">
    <h1 class="card-title" style="font-size: 1.3rem;">Calculadora de ¿Qué porcentaje del número V2 es el número V1?</h1>
    <h1 class="card-title" style="font-size: 1rem;">Calcular ¿Qué porcentaje del número V2 es el número V1?</h1>
    <p class="card-text">
        <div class="row">
         <div class="col-md-6">
        <label></label>
        <div class="input-group mb-3">
         <input type="number" min="0" id="valor9" placeholder="100" autofocus required title="Ingresa un valor:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
         </div></div> 
        <div class="col-md-6">
            <Label>es cuál porcentaje de </Label>
         <div class="input-group mb-3">
         <input type="number" min="0" id="valor10" placeholder="150" autofocus required title="Ingresa un valor:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
        </div></div>
    </div>
    <div class="row">
    <div class="col-md-4"></div><div class="col-md-4"></div>
    <div class="col-md-4">
    <button class="btn btn-success btn-sm form-control" id="btn5x">Calcular</button> 
    </div>
    </div>
        <div class="msg5 mt-2 mb-2" align="center"></div>
    </p>
   
    <p class="card-text"><small class="text-muted"><a href="javascript:void()" id="formbasico5">Ver Formula..</a></small></p>
    <p class="card-text" id="formula5" style="display: none;">
        <small>
        1. ¿Qué porcentaje de V2 es V1? <br>
        P= Muestra el porcentaje.<br>
        V= Valor al cual le calculamos el porcentaje. Si hay dos valores hacemos la distinción entre V1 y V2.<br>
        Este cálculo responde la pregunta: “¿qué porcentaje de V2 es V1?” <br>
        La fórmula para esto es: P = (100/V2)*V1 <br>
        Ejemplo: ¿qué porcentaje es 16 de 88? <br>
        Al aplicar la fórmula tenemos: P = (100/88) *16 = 1.14*16 = 18.18, Entonces la solución es: 16 es el 18.18% de 88. <br>
        <a href="javascript:void()" class="cerrarformula">Cerrar</a>
    
    </small>
    </p>   
  </div>
</div>
</div>
<!-- end new -->    

</div>
<!-- cod anuncio -->
<div class="col-md-2">
  <div class="card mt-3">
    <div class="card-header" align="center"><h5>Descarga Nuestra App <a href="https://play.google.com/store/apps/details?id=com.calculadoradeporcentajes" target="_black">Aquí</a></h5></div>
    <div class="card-body">
      <a href="https://play.google.com/store/apps/details?id=com.calculadoradeporcentajes" target="_black"><img src="../includes/img/logo-app-playstore.png" class="card-img-top" alt=""></a>
    </div>
  </div>
  <div class="adsanuncio fijolateral" align="center"><?php include '../includes/lateral-1-google-ads.php'; ?></div>
</div>
<?php // include '../includes/vertical-ads-adkeeper.php'; ?>
</div>

<div class="row mt-3">
<div class="col-md-1">
</div>     
<div class="col-md-8">
<div class="card">
  <div class="card-body">
    <div align="center">
    </div>
    <h1 class="card-title" style="font-size: 1.4rem;">¿Qué es el porcentaje?</h1>
    <h1 class="card-title" style="font-size: 1.2rem;">Definición y Concepto de Porcentaje</h1>
    <p class="card-text">
    El vocablo porcentaje tiene su origen en el inglés "percentage", un término que se utiliza para escribir los números bajo la apariencia de una fracción de cien. El símbolo de este concepto es el %, el cual se denomina “por ciento” y se traduce como “de cada cien”. Por ejemplo: Diez por ciento es un porcentaje que se escribe como 10% y que se entiende como diez de cada cien. Si se dice que el 10% de un grupo de treinta personas tiene el pelo de color rojo, la frase supone que tres de esas personas son pelirrojas.
    <br>
    <br>
En matemática, se denomina porcentaje, o tanto por ciento, a una porción proporcional del número 100, por lo tanto puede expresarse como fracción. Si decimos 50 % (este es el símbolo que representa el porcentaje) significa la mitad de cien; el 100 % es el total. Si decimos que el 15 % de la ciudad trabaja de modo informal, son 15 de cada 100 que lo hacen de ese modo, mientras, que, el 85 %, por exclusión, tendría acceso al mercado formal, siempre que se haya tomado para el estudio, exclusivamente, a toda la población económicamnete activa.  
  <br><br>
El porcentaje es un símbolo matemático, que representa una cantidad dada como una fracción en 100 partes iguales. También se le llama comúnmente tanto por ciento donde por ciento significa "de cada cien unidades". Se usa para definir relaciones entre dos cantidades, de forma que el tanto por ciento de una cantidad, donde tanto es un número, se refiere a la parte proporcional a ese número de unidades de cada cien de esa cantidad.
<br>
El porcentaje se denota utilizando el símbolo "%", que matemáticamente equivale al factor 0,01 y que se debe escribir después del número al que se refiere, dejando un espacio de separación. Por <b>ejemplo</b>, "treinta y dos por ciento" se representa mediante 32 % y significa ‘treinta y dos de cada cien’.
<br>
</p>
    <h1 class="card-title" style="font-size: 1.4rem;">¿Cómo calcular el porcentaje?</h1>
    <p class="card-text">
    
Para calcular el porcentaje de un número debemos tomar dicha cifra y multiplicarla por el tanto por ciento respectivo y dividirlo entre 100.
<br><b>Ejemplo:</b> si tenemos 130 alumnos en una entidad educativa y queremos calcular el 12% de ese grupo debemos multiplicar 130*12/100=15,6.
<br><br>
Por otro lado, si buscamos calcular el porcentaje entre dos cifras, debemos dividir la menor entre la mayor y multiplicar por cien. <br> 
<b>Ejemplo:</b> si tenemos 200 personas y queremos saber a qué porcentaje es equivalente una muestra de 30 personas de dicho grupo, debemos proceder de la siguiente forma: 30/200*100=15%. Así, concluimos que la muestra es el 15% de las 200 personas.
<br><br>
Cuando queremos calcular determinado porcentaje de un número, multiplicamos el porcentaje que necesitamos por el número, y luego lo dividimos por cien. <br> 
<b>Ejemplo:</b> el 25 % de 70, sería 70 x 25=1.750, y a ese resultado lo dividimos por 100, lo que nos da: 17,50. En la calculadora pondríamos 70 x 25 %.
<br><br>
Si se desea <b>convertir fracciones a porcentajes</b>, lo que hace más fácil comprender el número en lo cotidiano, primero debemos dividir el numerador por el denominador, y luego a ese resultado se lo multiplica por 100. <br> 
Si se quiere <b>convertir un porcentaje en fracción</b>, se coloca el número porcentual como numerador y al número 100 como denominador. Como vemos toda fracción o número decimal puede expresarse en porcentajes, y viceversa.
<br><br>
Se <b>utilizaron porcentajes</b>, ya desde el Imperio Romano, para calcular tributaciones, y luego fue extendiéndse, para otorgar comisiones a empleados sobre sus ventas, para recargar cuentas con intereses compensatorios o punitorios, para determinar cuánto han subido o bajado los precios, para saber si han aumentado las ganancias, para realizar rebajas, para realizar estadísticas, etcétera. Por supuesto cuanto hacemos una rebaja, le descontaremos del total el porcentaje, y cuando damos un premio o estímulo, o un recargo, lo sumaremos. Así si un artículo cuesta $ 1.000, y ofrecemos una rebaja del 15 %, lo venderemos a $ 850, pero si un empleado cobra $ 1.000 de salario y le aumentamos un 15 % por su buen rendimiento laboral, pasará a cobrar $ 1.150. <br>
</p>
</div>
</div>
<div class="card">
  <h5 class="card-header">Otras Formulas </h5>
  <div class="card-body">
<div align="center">
</div>
<h6 class="card-title alert alert-warning" align="center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg> De la 1 a la 7 son las calculadoras.</h6>
    <h1 class="card-title" style="font-size: 1.4rem;">8.- Conversión de porcentajes en cifras decimales o fracciones</h1>
    <p class="card-text">
    La conversión de porcentajes en cifras decimales es sencilla si tienes en mente que 100% es representado como el número 1.<br>  
    Por consiguiente, 50% corresponde al número 0.5. 16% corresponde a 0.16, y así sucesivamente.<br>  
    Podemos usar la siguiente fórmula: cifra decimal = porcentaje/100.<br><br> 

    Plantear porcentajes como fracciones sigue la misma fórmula o método.<br>  
    Por ejemplo, 35% corresponde a la fracción 35/100.<br>  
    Podemos entonces simplificar la fracción al dividir el numerador y el denominador entre el mismo número. Si dividimos el numerador y el denominador de 35/100 entre 5, obtenemos: 7/20. Esta es la representación más simple de esta fracción ya que no podemos dividir más el numerador y el denominador entre un mismo número.<br><br>

    Para enumerar claramente lo anterior hemos creado una tabla útil: <br><br>
    <table class="table table-striped table-hover table-bordered"><tbody><tr><th scope="col">Porcentaje</th><th scope="col">Decimal</th><th scope="col">Fracción</th></tr><tr><td>100%</td><td>1</td><td>1</td></tr><tr><td>90%</td><td>0.9</td><td>9/10</td></tr><tr><td>80%</td><td>0.8</td><td>4/5</td></tr><tr><td>75%</td><td>0.75</td><td>3/4</td></tr><tr><td>66%</td><td>0.66</td><td>2/3</td></tr><tr><td>60%</td><td>0.6</td><td>3/5</td></tr><tr><td>50%</td><td>0.5</td><td>1/2</td></tr><tr><td>40%</td><td>0.4</td><td>2/5</td></tr><tr><td>33%</td><td>0.33</td><td>1/3</td></tr><tr><td>30%</td><td>0.3</td><td>3/10</td></tr><tr><td>25%</td><td>0.25</td><td>1/4</td></tr><tr><td>20%</td><td>0.2</td><td>1/5</td></tr><tr><td>10%</td><td>0.1</td><td>1/10</td></tr></tbody></table> 
    </p>
    
    <h1 class="card-title mt-2" style="font-size: 1.4rem;">9.- Cálculo de descuentos</h1>
    <p class="card-text">
    Para calcular que cantidad corresponde a un determinado descuento porcentual, debes llevar a cabo un cálculo de porcentaje normal.<br><br>

    La fórmula para eso es: descuento = (P/100)*V<br>
    Donde P es el porcentaje de descuento y V es el precio.<br><br>

    Por ejemplo: si obtienes un descuento del 13% en un precio de 65$, ¿cuál es la cantidad de este descuento? Descuento = (13/100)*65 = 8.45 $. El precio final será entonces: 59.51 $.<br><br>

    Sin embargo, si recibes un descuento de una determinada cantidad en un precio total, ¿cuál es el porcentaje de descuento que se aplica?<br>
    Puedes usar esta fórmula P = (100/V2)*V1<br><br>

    Por ejemplo: obtienes un descuento de 12$ en un precio total de 88$. El porcentaje de descuento es entonces igual a (100/88)*12 = 13.64% <br><br>

    </p>
    <h1 class="card-title mt-2" style="font-size: 1.4rem;">10.- Ejemplos en tu vida diaria</h1>
    <p class="card-text">
    <h1 class="card-title mt-2" style="font-size: 1.2rem;">a. Impuesto a los ingresos brutos</h1>
Cuando compras un cierto producto, el impuesto a los ingresos brutos es del 8%. Supón que este 8% corresponde a la cantidad de 16$.<br>
¿Cuál es el precio original sobre el que se recaudó el impuesto sobre las ventas?<br>
8% equivale a la fracción 8/100. Si simplificamos la fracción 8/100 al dividir el numerador y el denominador entre 4 obtenemos 2/25.<br>
Podemos encontrar la solución al problema a través de la siguiente ecuación: 8/100*X = 2/25*X = 16<br>
Lo que significa que X = 200.<br>

<h1 class="card-title mt-2" style="font-size: 1.2rem;">b. Vale de descuento para una determinada cantidad</h1>
Supón que quieres comprar un producto por 35 $. Sin embargo, tienes un vale de descuento de 5$.<br>
¿Qué porcentaje ahorrarás al usar el cupón de descuento?<br>
Podemos resolver esto a través de la comparación: P/100*35 = 5<br>
Al resolver encontramos que: P = 500/35 = 14.29%<br>

<h1 class="card-title mt-2" style="font-size: 1.2rem;">c. Cupón de descuento de un determinado porcentaje</h1>
Supón que quieres comprar un refrigerador nuevo y este refrigerador cuesta 360 $. Sin embargo, a través de una campaña de publicidad pudiste obtener un cupón de descuento de 12%. ¿Cuánto dinero puedes ahorrar al usar este cupón?<br>
Podemos encontrar la solución a través de la siguiente comparación: (12/100)*360 $ = 43.2 $<br>

<h1 class="card-title mt-2" style="font-size: 1.2rem;">d. Cálculo de propinas</h1>
Después de un buen almuerzo en un restaurante local quieres dejar una propina por el excelente servicio. Una propina del 9% de la cuenta parece una buena idea. Supón que la cuenta por el almuerzo es de 89$ ¿Cuánto debería ser la propina?<br>
Esta comparación nos da la solución: 9/100*89 = 8.01$<br>
<div align="center">
</div>
<h1 class="card-title mt-2" style="font-size: 1.2rem;">e. Interés de un bono</h1>
Aun tienes un viejo bono de 5000 $ que tiene un interés del 4% anual. ¿De qué cantidad puedes disponer después de un año?<br>
Después de 1 año recibimos un interés del 4% sobre la cantidad invertida de 5000$. Podemos hacer el siguiente cálculo: 5000 + (4/100)*5000 = 5000 + 200 = 5200 $<br>

<h1 class="card-title mt-2" style="font-size: 1.2rem;">f. Incremento porcentual en una cuenta de ahorros</h1>
Supón que tienes una cantidad de 450$ en tu cuenta de ahorros en el banco. Después de 1 año esta cantidad se ha elevado a 465$.<br>
¿Cuál fue el porcentaje incrementado después de 1 año?<br>
Porcentaje incrementado =((V2-V1) /V1) *100 = ((465-450) /450) *100 =3.33%<br>

<h1 class="card-title mt-2" style="font-size: 1.2rem;">g. Disminución porcentual después de una reducción de precios</h1>
En la tienda local de muebles un armario de roble cuesta 420$. Sin embargo, el precio disminuye a 360$ debido a una venta de liquidación.<br>
¿Cuál es el porcentaje reducido entre estos dos precios?<br>
Disminución de porcentaje = ((V2-V1) /V1) *100 = ((360-420) /420) *100 = -14.28%<br>
<div align="center">
</div>
<h1 class="card-title mt-2" style="font-size: 1.2rem;">h. Diferencia entre valores medidos y valores teóricos</h1>
Asume que el valor medido en una prueba es igual a 12.86 mientras que el valor teórico es igual a 14.<br>
¿Cuál es el porcentaje de desviación?<br>
Usamos la fórmula: 100*| valor medido- valor teórico|/ |valor teórico| = 100*| 12.86 - 14 | / |14| = 8.14%<br>

<h1 class="card-title mt-2" style="font-size: 1.2rem;">i. Desviación después del redondeo</h1>
Supón que un valor de 5.2 es redondeado a 5. ¿Cuál es la desviación porcentual debido a redondeo?<br>
Aplicamos esta fórmula: 100*| valor medido – valor teórico|/ |valor teórico| = 100 * | 5 – 5.2|/ |5.2| = 3.85 %<br>
</p>
<h2 class="mt-5" style="font-size: 1rem" align="justify">Calcular Porcentaje Online Gratis - Calculadora de Porcentajes Online Gratis - Calcular Porcentaje - Calculadora de Porcentajes - Calcular Porcentajes - Calculadoras de Porcentajes</h2>
  </div>
</div>
 </div>
<div class="col-md-3">
<div class="adsanuncio fijolateral" align="center"><?php include '../includes/lateral-2-google-ads.php'; ?></div>
</div>
</div>
</div>

<footer align="center" class="mt-5">
    <h2 style="font-size: 1rem">Estas sencillas calculadoras de porcentajes resuelven todos tus problemas</h2>
    <h6 style="font-size: .8rem">© 2024 Copyright: calcular-porcentajes.com</h6> 
</footer>
    
    </body>
    <script src="../plugins/assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../plugins/assets/dist/js/bootstrap.min.js" ></script>
    <script src="../plugins/assets/dist/js/jquery.min.js"></script>
    <?php //include '../includes/ads-terra.php'; ?>
    <script src="../js/porc-es.js"></script>
    <script src="../js/alerts.js"></script>
</html>