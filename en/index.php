<!DOCTYPE html>
<html lang="en" manifest="manifiesto.appcache">
    <head>
        <title>Calculate percentage - Online percentage calculator</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
        <meta name="description" content="Calculate Percentage - Free and easy-to-use online percentage calculator. Calculate increases, decreases and percentages of a number. Fast and accurate tool for students, professionals and anyone who needs to calculate percentages.">
        <meta name="keywords" content="Calculate percentage, Calculate percentages, Percentage calculator, Percentage calculator, Percentage calculator, Percentage calculator, Calculate percentage increase, Calculate percentage decrease, Percentage of a number, Online percentage calculator, Free percentage calculator, Easy percentage calculator, Calculator percentages for students, percentage calculator for business, percentage calculator for finance, percentage calculator for mathematics, calculate, calculator, percentage, percentages, calculate the percentage, calculate percentage, online percentage calculator, free percentage calculator, percentage calculator easy, Calculate percentage increase, Calculate percentage decrease, Percent increase, Percent decrease, Math percentage calculator, Financial percentage calculator, Statistical percentage calculator, Increase and decrease percentage calculator, Percent calculator for math students , Percentage calculator for finance professionals">
        <meta name="author" content="calcular-porcentajes.com">
        <link rel="shortcut icon" href="../includes/img/favicon.png">
        <link href="../plugins/assets/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="../plugins/assets/dist/js/fontawesome.js"></script>
        <link href="../includes/css/styleone.css" rel="stylesheet" type="text/css">
        <?php include "../includes/google-ads.php"; ?>
    </head>
    <body class="bodycolor">
    <header>
    <?php include '../includes/nabvar-en.php'; ?>
<div class="card" style="padding-top: 80px;">
  <div class="card-body" align="center">
    <h1 class="card-title" style="font-size: 1.4rem"><b>Calculate Percentage - Online Percentage Calculators</b></h1>
    <h6 class="card-text" align="justify" style="font-size: 0.9rem;">"Welcome to (calcular-porcentajes.com)! The easiest and fastest online percentage calculator to use. Calculate percentages in a simple and accurate way, without complications. Increases, decreases, percentages of a number and more. Start calculating now and do your percentage calculations quickly and safely!"</h6>
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
    <h1 class="card-title" style="font-size: 1.3rem;">Basic Percentage Calculator</h1>
    <h1 class="card-title" style="font-size: 1rem;">Calculate Basic Percentages</h1>
    <p class="card-text">
        <div class="row">
         <div class="col-md-6">
        <label>What is the: </label>
        <div class="input-group mb-3">
         <input type="number" min="0" id="valor1" placeholder="10%" autofocus required title="Enter a value:" class="form-control" autocomplete="off" />
         <span class="input-group-text">%</span>
         </div></div> 
        <div class="col-md-6">
            <Label>of: </Label>
         <div class="input-group mb-3">
         <input type="number" min="0" id="valor2" placeholder="100" autofocus required title="Enter a value:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
        </div></div>
    </div>
    <div class="row">
    <div class="col-md-4"></div><div class="col-md-4"></div>
    <div class="col-md-4">
    <button class="btn btn-success btn-sm form-control" id="btn1x">Calculate</button> 
    </div>
    </div>
        <div class="msg1 mt-2 mb-2" align="center"></div>
    </p>
    
    <p class="card-text"><small class="text-muted"><a href="javascript:void()" id="formbasico">See Formula..</a></small></p>
    <p class="card-text" id="formula1" style="display: none;">
        <small>
        1. Calculation of normal percentage <br>
        P= Indicates the percentage.<br>
        V= Indicates the value at which we calculate the percentage.<br> 
        This calculation answers the question: “what is the percentage P of V?” <br>
        The formula for this is: (P/100) *V <br>
        Example: What is 15% of 160? According to the formula we calculate (15/100) *160 = 0.15*160 = 24 <br>
        <a href="javascript:void()" class="cerrarformula">Close</a>
    
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
    <h1 class="card-title" style="font-size: 1.3rem;">Price discount calculator</h1>
    <h1 class="card-title" style="font-size: 1rem;">Calculate the final price after applying a discount percentage.</h1>
    <p class="card-text">
        <div class="row">
         <div class="col-md-6">
        <label>Price ($):</label>
        <div class="input-group mb-3">
         <input type="number" min="0" id="valor1_1" placeholder="$100 MXN- USD - €" autofocus required title="Enter a value:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
         </div></div> 
        <div class="col-md-6">
            <Label>Discount (%):</Label>
         <div class="input-group mb-3">
         <input type="number" min="0" id="valor2_1" placeholder="20 %" autofocus required title="Enter a value:" class="form-control" autocomplete="off" />
         <span class="input-group-text">%</span>
        </div></div>
    </div>
    <div class="row">
    <div class="col-md-4"></div><div class="col-md-4"></div>
    <div class="col-md-4">
    <button class="btn btn-success btn-sm form-control" id="btn1x_1">Calculate</button> 
    </div>
    </div>
        <div class="msg1_1 mt-2 mb-2" align="center"></div>
    </p>
    
    <p class="card-text"><small class="text-muted"><a href="javascript:void()" id="formbasico_1">See Formula..</a></small></p>
    <p class="card-text" id="formula1_1" style="display: none;">
        <small>
        1. Calculate the final price after applying a percentage discount (decrease).<br>
        P= Discount percentage (decrease).<br>
        V= Indicates the price of the product.<br> 
        D= Final price with discount (decrease).<br>
        This calculation answers the question: “what is the price (cost) after applying a percentage discount?” <br>
        The formula for this is: D=V-((P/100)*V)<br>
        Example: If the initial price is 120 and a 20% discount (decrease) is applied, what is the final price?<br>
        According to the formula we calculate D = 120 - ((20 / 100) * 120) = (20 / 100) = 0.2 * 120 = 24, 120 - 24 = 96 <br>
        So the final price is 96 (MXN,USD,€,ETC).<br>
        <a href="javascript:void()" class="cerrarformula">Close</a>
    
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
    <h1 class="card-title" style="font-size: 1.3rem;">Price increase calculator</h1>
    <h1 class="card-title" style="font-size: 1rem;">Calculate the final price after applying a percentage increase.</h1>
    <p class="card-text">
        <div class="row">
         <div class="col-md-6">
        <label>Price ($):</label>
        <div class="input-group mb-3">
         <input type="number" min="0" id="valor1_2" placeholder="$100 MXN- USD - €" autofocus required title="Enter a value:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
         </div></div> 
        <div class="col-md-6">
            <Label>Increase (%):</Label>
         <div class="input-group mb-3">
         <input type="number" min="0" id="valor2_2" placeholder="20 %" autofocus required title="Enter a value:" class="form-control" autocomplete="off" />
         <span class="input-group-text">%</span>
        </div></div>
    </div>
    <div class="row">
    <div class="col-md-4"></div><div class="col-md-4"></div>
    <div class="col-md-4">
    <button class="btn btn-success btn-sm form-control" id="btn1x_2">Calculate</button> 
    </div>
    </div>
        <div class="msg1_2 mt-2 mb-2" align="center"></div>
    </p>
    
    <p class="card-text"><small class="text-muted"><a href="javascript:void()" id="formbasico_2">See Formula..</a></small></p>
    <p class="card-text" id="formula1_2" style="display: none;">
        <small>
        1. Calculate the final price after applying a percentage increase (increment).<br>
        P= Percentage of increase (increase).<br>
        V= Indicates the price of the product.<br> 
        A= Final price with increase (increment).<br>
        This calculation answers the question: “What is the price (cost) after applying a percentage increase (increment)?” <br>
        The formula for this is: A=V+((P/100)*V)<br>
        Example: If the initial price is 120 and a 20% increase (increase) is applied, what is the final price?<br>
        According to the formula we calculate A = 120 + ((20 / 100) * 120) = (20 / 100) = 0.2 * 120 = 24, 120 + 24 = 144 <br>
        So the final price is 144 (MXN,USD,€,ETC).<br>
        <a href="javascript:void()" class="cerrarformula">Close</a>
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
    <h1 class="card-title" style="font-size: 1.3rem;">Addition and subtraction of percentages calculator</h1>
    <h1 class="card-title" style="font-size: 1rem;">Calculate increase (+) and decrease (-) of percentages</h1>
    <p class="card-text">
        <div class="row">
         <div class="col-md-4">
        <label>Amount:</label>
        <div class="input-group mb-3">
         <input type="number" min="0" id="valor3" placeholder="100" autofocus required title="Enter a value:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span> 
        </div> </div>  

        <div class="col-md-4">
        <label></label>
        <div class="input-group mb-3">
        <select name="select" id="select" class="form-control" autocomplete="off" autofocus required>
        <option value="1" selected>more (+)</option>
        <option value="2">less (-)</option>
        </select>
        <span class="input-group-text">(+/-)</span> 
        </div> </div>

        <div class="col-md-4">
            <Label> </Label>
         <div class="input-group mb-3">  
         <input type="number" min="0" id="valor4" placeholder="10%" autofocus required title="Enter a value:" class="form-control" autocomplete="off" />
         <span class="input-group-text">%</span> 
        </div></div>
    
    </div>
    <div class="row">
    <div class="col-md-4"></div><div class="col-md-4"></div>
    <div class="col-md-4">
        <button class="btn btn-success btn-sm form-control" id="btn2x">Calculate</button> 
    </div> </div>
        <div class="msg2 mt-2 mb-2" align="center"></div>
    </p>
   
    <p class="card-text"><small class="text-muted"><a href="javascript:void()" id="formbasico2">See Formula..</a></small></p>
    <p class="card-text" id="formula2" style="display: none;">
        <small>
        1.- Percentage increase and decrease calculator - addition or subtraction of percentages <br>
        P= Indicates the percentage.<br>
        V= Indicates the value at which we calculate the percentage.<br>
        This calculation solves the question: “add a percentage P to V” or “subtract a percentage P from V.” <br>
        To add percentages the formula is: V+((P/100)*V). <br>
        To subtract percentages the formula is: V-((P/100)*V) <br>
        Examples:<br>
        Add: add 25% to 280. According to the formula we can deduce: 280 + ((25/100)*280) = 280 + (0.25*280) = 350 <br>
        Subtraction: subtract 20% from 240. After applying the above formula we obtain: 240 – ((20/100)*240) = 240 – (0.2*240) = 192 <br>
        <a href="javascript:void()" class="cerrarformula">Close</a>
    
    </small>
    </p>   
  </div>
</div>
</div>

  <!-- cambio porcentual-->
  <div class="mt-3 mb-3">
  <div class="card mb-3">
  <div class="card-body">
    <h1 class="card-title" style="font-size: 1.3rem;">Percent Change Calculator</h1>
    <h1 class="card-title" style="font-size: 1rem;">Calculate percentage change between two values</h1>
    <p class="card-text">
        <div class="row">
         <div class="col-md-6">
        <label>Initial value: </label>
        <div class="input-group mb-3">
         <input type="number" min="0" id="valor5" placeholder="100" autofocus required title="Enter a value:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
         </div></div> 
        <div class="col-md-6">
            <Label>Final value: </Label>
         <div class="input-group mb-3">
         <input type="number" min="0" id="valor6" placeholder="150" autofocus required title="Enter a value:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
        </div></div>
    </div>
    <div class="row">
    <div class="col-md-4"></div><div class="col-md-4"></div>
    <div class="col-md-4">
    <button class="btn btn-success btn-sm form-control" id="btn3x">Calculate</button> 
    </div>
    </div>
        <div class="msg3 mt-2 mb-2" align="center"></div>
    </p>
   
    <p class="card-text"><small class="text-muted"><a href="javascript:void()" id="formbasico3">See Formula..</a></small></p>
    <p class="card-text" id="formula3" style="display: none;">
        <small>
        1. Calculate the percentage difference between two values ​​<br>
        P= Percentage difference.<br>
        V1= It is the initial value.<br> 
        V2= It is the final value.<br> 
        This calculation answers the question: “what is the percentage increase between V1 and V2?” <br>
        The formula for this is: P= ((V2-V1) /V1) *100 <br>
        With a positive result, we have a percentage increase.<br>
        With a negative result, we have a percentage decrease.<br>
        Example: what is the percentage increase between 45 and 79? <br>
        By applying the formula we have: ((79-45)/45)*100 = 75.55%. So there is a percentage increase of 75.55%. <br>
        <a href="javascript:void()" class="cerrarformula">Close</a>
    
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
    <h1 class="card-title" style="font-size: 1.3rem;">Percentage increase calculator</h1>
    <h1 class="card-title" style="font-size: 1rem;">Calculate percentage increase between two values</h1>
    <p class="card-text">
        <div class="row">
         <div class="col-md-6">
        <label>Initial value: </label>
        <div class="input-group mb-3">
         <input type="number" min="0" id="valor5_1" placeholder="100" autofocus required title="Enter a value:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
         </div></div> 
        <div class="col-md-6">
        <Label>Final value: </Label>
         <div class="input-group mb-3">
         <input type="number" min="0" id="valor6_1" placeholder="150" autofocus required title="Enter a value:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
        </div></div>
    </div>
    <div class="row">
    <div class="col-md-4"></div><div class="col-md-4"></div>
    <div class="col-md-4">
    <button class="btn btn-success btn-sm form-control" id="btn3x_1">Calculate</button> 
    </div>
    </div>
        <div class="msg3_1 mt-2 mb-2" align="center"></div>
    </p>
   
    <p class="card-text"><small class="text-muted"><a href="javascript:void()" id="formbasico3_1">See Formula..</a></small></p>
    <p class="card-text" id="formula3_1" style="display: none;">
        <small>
        1. Calculate the percentage increase (increment) from one numerical value to another.<br>
        P= Percentage increase.<br>
        V1= It is the initial value.<br> 
        V2= It is the final value.<br> 
        This calculation answers the question: “what is the percentage increase (increase) between V1 and V2?” <br>
        The formula for this is: P= ((V2-V1) /V1) *100 <br>
        With a positive result, we have a percentage increase.<br>
        With a negative result, we have a percentage decrease.<br>
        Example: What is the percentage increase (increase) between 45 and 79? <br>
        By applying the formula we have: ((79-45)/45)*100 = 75.55%. So there is a percentage increase (increase) of 75.55%. <br>
        <a href="javascript:void()" class="cerrarformula">Close</a>
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
    <h1 class="card-title" style="font-size: 1.3rem;">Percentage Decrease Calculator</h1>
    <h1 class="card-title" style="font-size: 1rem;">Calculate percentage reduction between one numerical value to another</h1>
    <p class="card-text">
        <div class="row">
         <div class="col-md-6">
        <label>Initial value: </label>
        <div class="input-group mb-3">
         <input type="number" min="0" id="valor5_2" placeholder="100" autofocus required title="Enter a value:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
         </div></div> 
        <div class="col-md-6">
            <Label>Final value: </Label>
         <div class="input-group mb-3">
         <input type="number" min="0" id="valor6_2" placeholder="150" autofocus required title="Enter a value:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
        </div></div>
    </div>
    <div class="row">
    <div class="col-md-4"></div><div class="col-md-4"></div>
    <div class="col-md-4">
    <button class="btn btn-success btn-sm form-control" id="btn3x_2">Calculate</button> 
    </div>
    </div>
        <div class="msg3_2 mt-2 mb-2"></div>
    </p>
   
    <p class="card-text"><small class="text-muted"><a href="javascript:void()" id="formbasico3_2">See Formula..</a></small></p>
    <p class="card-text" id="formula3_2" style="display: none;">
        <small>
        1. Calculate the percentage reduction (decrease) from one numerical value to another.<br>
        P= Percentage decrease.<br>
        V1= It is the initial value.<br> 
        V2= It is the final value.<br> 
        This calculation answers the question: “what is the percentage decrease (reduction) between V1 and V2?” <br>
        The formula for this is: P= ((V1-V2) /V1) *100 <br>
        With a positive result, we have a percentage increase.<br>
        With a negative result, we have a percentage decrease.<br>
        Example: What is the percentage decrease (reduction) between 45 and 79? <br>
        By applying the formula we have: ((45-79)/45)*100 = -75.55%. So there is a percentage reduction (decrease) of 75.55%. <br>
        <a href="javascript:void()" class="cerrarformula">Close</a> 
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
    <h1 class="card-title" style="font-size: 1.3rem;">Percent error calculator</h1>
    <h1 class="card-title" style="font-size: 1rem;">Calculate percentage error between a measured value and a theoretical value</h1> 
    <p class="card-text">
        <div class="row">
         <div class="col-md-6">
        <label>Measured value: </label>
        <div class="input-group mb-3">
         <input type="number" min="0" id="valor13" placeholder="100" autofocus required title="Enter a value:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
         </div></div> 
        <div class="col-md-6">
            <Label>Exact value: </Label>
         <div class="input-group mb-3">
         <input type="number" min="0" id="valor14" placeholder="150" autofocus required title="Enter a value:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
        </div></div>
    </div>
    <div class="row">
    <div class="col-md-4"></div><div class="col-md-4"></div>
    <div class="col-md-4">
    <button class="btn btn-success btn-sm form-control" id="btn7x">Calculate</button> 
    </div>
    </div>
        <div class="msg7 mt-2 mb-2" align="center"></div>
    </p>
   
    <p class="card-text"><small class="text-muted"><a href="javascript:void()" id="formbasico7">See Formula..</a></small></p>
    <p class="card-text" id="formula7" style="display: none;">
        <small>
        1. Percentage deviation <br>
        We might need the percentage deviation when we compare a theoretical value with a measured value. <br>
        We can use the following formula to calculate percentage deviations<br>
        The formula for this is: Percent deviation = 100*| measured value – theoretical value |/ | theoretical value | <br>
        We take the absolute value in both the numerator and the denominator.<br>
        Example: measured value: 100, theoretical value: 105 <br>
        By applying the formula we have: 100*|100 - 105|/|105|, Then the solution is: The percentage error between 100 and 105 is 4.76%. <br>
        <a href="javascript:void()" class="cerrarformula">Close</a>
    
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
    <h1 class="card-title" style="font-size: 1.3rem;">V is the P of which number calculator?</h1>
    <h1 class="card-title" style="font-size: 1rem;">Calculate V is the P of which number?</h1>
    <p class="card-text">
        <div class="row">
         <div class="col-md-6">
        <label>Amount: </label>
        <div class="input-group mb-3">
         <input type="number" min="0" id="valor11" placeholder="100" autofocus required title="Enter a value:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
         </div></div> 
        <div class="col-md-6">
            <Label>is he</Label>
         <div class="input-group mb-3">
         <input type="number" min="0" id="valor12" placeholder="10%" autofocus required title="Enter a value:" class="form-control" autocomplete="off" />
         <span class="input-group-text">%</span>
        </div></div>
    </div>
    <div class="row">
    <div class="col-md-4"></div><div class="col-md-4"></div>
    <div class="col-md-4">
    <button class="btn btn-success btn-sm form-control" id="btn6x">Calculate</button> 
    </div>
    </div>
        <div class="msg6 mt-2 mb-2" align="center"></div>
    </p>
   
    <p class="card-text"><small class="text-muted"><a href="javascript:void()" id="formbasico6">See Formula..</a></small></p>
    <p class="card-text" id="formula6" style="display: none;">
        <small>
        1. V is the P of which number? <br>
        P= Shows the percentage.<br>
        X= Shows the result.<br>
        V= Value at which we calculate the percentage. If there are two values ​​we make the distinction between V1 and V2.<br>
        This calculation answers the question: “V is the P of which number?” <br>
        The formula for this is: X = (V1/P)*100 <br>
        Example: 24 is 9% of which number? <br>
        By applying the formula we have: X = (24/9)*100 = 2.66*100 = 266, So the solution to this question is: 24 is 9% of 266.<br>
        <a href="javascript:void()" class="cerrarformula">Close</a>
    
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
    <h1 class="card-title" style="font-size: 1.3rem;">What percentage of V2 is V1 calculator?</h1>
    <h1 class="card-title" style="font-size: 1rem;">Calculate What percentage of V2 is V1?</h1>
    <p class="card-text">
        <div class="row">
         <div class="col-md-6">
        <label>What percentage of:</label>
        <div class="input-group mb-3">
         <input type="number" min="0" id="valor7" placeholder="150" autofocus required title="Enter a value:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
         </div></div> 
        <div class="col-md-6">
            <Label>is</Label>
         <div class="input-group mb-3">
         <input type="number" min="0" id="valor8" placeholder="100" autofocus required title="Enter a value:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
        </div></div>
    </div>
    <div class="row">
    <div class="col-md-4"></div><div class="col-md-4"></div>
    <div class="col-md-4">
    <button class="btn btn-success btn-sm form-control" id="btn4x">Calculate</button> 
    </div>
    </div>
        <div class="msg4 mt-2 mb-2" align="center"></div>
    </p>
   
    <p class="card-text"><small class="text-muted"><a href="javascript:void()" id="formbasico4">See Formula..</a></small></p>
    <p class="card-text" id="formula4" style="display: none;">
        <small>
        1. What percentage of V2 is V1? <br>
        P= Shows the percentage.<br>
        V= Value at which we calculate the percentage. If there are two values ​​we make the distinction between V1 and V2.<br>
        This calculation answers the question: “what percentage of V2 is V1?” <br>
        The formula for this is: P = (100/V2)*V1 <br>
        Example: What percentage is 16 out of 88? <br>
        By applying the formula we have: P = (100/88) *16 = 1.14*16 = 18.18, Then the solution is: 16 is 18.18% of 88. <br>
        <a href="javascript:void()" class="cerrarformula">Close</a>
    
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
    <h1 class="card-title" style="font-size: 1.3rem;">What percentage of the number V2 is the number V1 calculator?</h1>
    <h1 class="card-title" style="font-size: 1rem;">Calculate What percentage of the number V2 is the number V1?</h1>
    <p class="card-text">
        <div class="row">
         <div class="col-md-6">
        <label></label>
        <div class="input-group mb-3">
         <input type="number" min="0" id="valor9" placeholder="100" autofocus required title="Enter a value:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
         </div></div> 
        <div class="col-md-6">
            <Label>is what percentage of </Label>
         <div class="input-group mb-3">
         <input type="number" min="0" id="valor10" placeholder="150" autofocus required title="Enter a value:" class="form-control" autocomplete="off" />
         <span class="input-group-text">$</span>
        </div></div>
    </div>
    <div class="row">
    <div class="col-md-4"></div><div class="col-md-4"></div>
    <div class="col-md-4">
    <button class="btn btn-success btn-sm form-control" id="btn5x">Calculate</button> 
    </div>
    </div>
        <div class="msg5 mt-2 mb-2" align="center"></div>
    </p>
   
    <p class="card-text"><small class="text-muted"><a href="javascript:void()" id="formbasico5">See Formula..</a></small></p>
    <p class="card-text" id="formula5" style="display: none;">
        <small>
        1. What percentage of V2 is V1? <br>
        P= Shows the percentage.<br>
        V= Value at which we calculate the percentage. If there are two values ​​we make the distinction between V1 and V2.<br>
        This calculation answers the question: “what percentage of V2 is V1?” <br>
        The formula for this is: P = (100/V2)*V1 <br>
        Example: What percentage is 16 out of 88? <br>
        By applying the formula we have: P = (100/88) *16 = 1.14*16 = 18.18, Then the solution is: 16 is 18.18% of 88. <br>
        <a href="javascript:void()" class="cerrarformula">Close</a>
    
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
    <div class="card-header" align="center"><h5>Download Our App <a href="https://play.google.com/store/apps/details?id=com.calculadoradeporcentajes" target="_black">Here</a></h5></div>
    <div class="card-body">
      <a href="https://play.google.com/store/apps/details?id=com.calculadoradeporcentajes" target="_black"><img src="../includes/img/logo-app-playstore.png" class="card-img-top" alt=""></a>
    </div>
  </div>
  <div class="adsanuncio fijolateral" align="center"><?php include '../includes/lateral-1-google-ads.php'; ?></div>
</div>
<?php include '../includes/vertical-ads-adkeeper.php'; ?>
</div>

<!-- ss -->
<div class="row mt-3">
<!-- <div class="col-md-1">
</div>      -->
<div class="col-md-10">
<div class="card">
  <div class="card-body">
    <div align="center">
    </div>
    <h1 class="card-title" style="font-size: 1.4rem;">What is percentage?</h1>
    <h1 class="card-title" style="font-size: 1.2rem;">Definition and Concept of Percentage</h1>
    <p class="card-text">
    The word percentage has its origin in the English "percentage", a term used to write numbers under the guise of a fraction of one hundred. The symbol of this concept is %, which is called “percent” and translates as “out of every hundred”. For example: Ten percent is a percentage that is written as 10% and is understood as ten out of every hundred. If it is said that 10% of a group of thirty people have red hair, the sentence assumes that three of those people are redheads.
    <br>
    <br>
    In mathematics, a proportional portion of the number 100 is called a percentage, or percentage, therefore it can be expressed as a fraction. If we say 50% (this is the symbol that represents the percentage) it means half of a hundred; 100% is the total. If we say that 15% of the city works informally, there are 15 out of every 100 who do so, while 85%, by exclusion, would have access to the formal market, provided that it has been taken for the study, exclusively, the entire economically active population.  
  <br><br>
    Percentage is a mathematical symbol, which represents a quantity given as a fraction into 100 equal parts. It is also commonly called a percent where percent means "out of every hundred units." It is used to define relationships between two quantities, so that the percentage of a quantity, where the percentage is a number, refers to the part proportional to that number of units of every hundred of that quantity.
<br>
    The percentage is denoted using the symbol "%", which is mathematically equivalent to the factor 0.01 and must be written after the number to which it refers, leaving a separating space. For <b>example</b>, "thirty-two percent" is represented by 32% and means 'thirty-two out of every hundred'.
<br>
</p>
    <h1 class="card-title" style="font-size: 1.4rem;">How to calculate the percentage?</h1>
    <p class="card-text">
    
    To calculate the percentage of a number we must take that figure and multiply it by the respective percentage and divide it by 100.
<br><b>Example:</b> if we have 130 students in an educational entity and we want to calculate 12% of that group, we must multiply 130*12/100=15.6.
<br><br>
On the other hand, if we seek to calculate the percentage between two figures, we must divide the smaller by the larger and multiply by one hundred. <br> 
<b>Example:</b> if we have 200 people and we want to know what percentage a sample of 30 people from said group is equivalent to, we must proceed as follows: 30/200*100=15%. Thus, we conclude that the sample is 15% of the 200 people.
<br><br>
When we want to calculate a certain percentage of a number, we multiply the percentage we need by the number, and then divide it by one hundred. <br> 
<b>Example:</b> 25% of 70 would be 70 x 25=1,750, and we divide that result by 100, which gives us: 17.50. On the calculator we would put 70 x 25%.
<br><br>
If you want to <b>convert fractions to percentages</b>, which makes it easier to understand the number in everyday life, we must first divide the numerator by the denominator, and then multiply that result by 100. <br> 
If you want to <b>convert a percentage into a fraction</b>, place the percentage number as the numerator and the number 100 as the denominator. As we see, any fraction or decimal number can be expressed in percentages, and vice versa.
<br><br>
Percentages were used, as early as the Roman Empire, to calculate taxes, and later it was extended to grant commissions to employees on their sales, to recharge accounts with compensatory or punitive interest, to determine how much they have risen or prices have been lowered, to know if profits have increased, to make sales, to make statistics, etc. Of course, when we make a discount, we will deduct the percentage from the total, and when we give a prize or incentive, or a surcharge, we will add it. So if an item costs $1,000, and we offer a 15% discount, we will sell it for $850, but if an employee earns $1,000 in salary and we increase them 15% for their good work performance, they will earn $1,150. <br>
</p>
</div>
</div>
<div class="card">
  <h5 class="card-header">Other Formulas </h5>
  <div class="card-body">
<div align="center">
</div>
<h6 class="card-title alert alert-warning" align="center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg> From 1 to 7 are the calculators.</h6>
    <h1 class="card-title" style="font-size: 1.4rem;">8.- Conversion of percentages into decimal figures or fractions</h1>
    <p class="card-text">
    Converting percentages to decimal figures is simple if you keep in mind that 100% is represented as the number 1.<br>  
    Therefore, 50% corresponds to the number 0.5. 16% corresponds to 0.16, and so on.<br>  
    We can use the following formula: decimal figure = percentage/100.<br><br> 

    Stating percentages as fractions follows the same formula or method.<br>  
    For example, 35% corresponds to the fraction 35/100.<br>  
    We can then simplify the fraction by dividing the numerator and denominator by the same number. If we divide the numerator and denominator of 35/100 by 5, we get: 7/20. This is the simplest representation of this fraction since we cannot further divide the numerator and denominator by the same number.<br><br>

    To clearly list the above we have created a useful table: <br><br>
    <table class="table table-striped table-hover table-bordered"><tbody><tr><th scope="col">Percentage</th><th scope="col">Decimal</th><th scope="col">Fraction</th></tr><tr><td>100%</td><td>1</td><td>1</td></tr><tr><td>90%</td><td>0.9</td><td>9/10</td></tr><tr><td>80%</td><td>0.8</td><td>4/5</td></tr><tr><td>75%</td><td>0.75</td><td>3/4</td></tr><tr><td>66%</td><td>0.66</td><td>2/3</td></tr><tr><td>60%</td><td>0.6</td><td>3/5</td></tr><tr><td>50%</td><td>0.5</td><td>1/2</td></tr><tr><td>40%</td><td>0.4</td><td>2/5</td></tr><tr><td>33%</td><td>0.33</td><td>1/3</td></tr><tr><td>30%</td><td>0.3</td><td>3/10</td></tr><tr><td>25%</td><td>0.25</td><td>1/4</td></tr><tr><td>20%</td><td>0.2</td><td>1/5</td></tr><tr><td>10%</td><td>0.1</td><td>1/10</td></tr></tbody></table> 
    </p>
    
    <h1 class="card-title mt-2" style="font-size: 1.4rem;">9.- Calculation of discounts</h1>
    <p class="card-text">
    To calculate what amount corresponds to a certain percentage discount, you must carry out a normal percentage calculation.<br><br>

    The formula for that is: discount = (P/100)*V<br>
    Where P is the discount percentage and V is the price.<br><br>

    For example: If you get a 13% discount on a price of $65, what is the amount of this discount? Discount = (13/100)*65 = $8.45. The final price will then be: $59.51.<br><br>

    However, if you receive a discount of a certain amount on a total price, what percentage discount is applied?<br>
    You can use this formula P = (100/V2)*V1<br><br>

    For example: you get a discount of $12 on a total price of $88. The discount percentage is then equal to (100/88)*12 = 13.64% <br><br>
    </p>
    <h1 class="card-title mt-2" style="font-size: 1.4rem;">10.- Examples in your daily life</h1>
    <p class="card-text">
    <h1 class="card-title mt-2" style="font-size: 1.2rem;">a. Gross income tax</h1>
When you buy a certain product, the gross receipts tax is 8%. Suppose that this 8% corresponds to the amount of $16.<br>
What is the original price on which sales tax was collected?<br>
8% is equivalent to the fraction 8/100. If we simplify the fraction 8/100 by dividing the numerator and denominator by 4 we obtain 2/25.<br>
We can find the solution to the problem through the following equation: 8/100*X = 2/25*X = 16<br>
Which means that X = 200.<br>

<h1 class="card-title mt-2" style="font-size: 1.2rem;">b. Discount voucher for a certain amount</h1>
Suppose you want to buy a product for $35. However, you have a $5 discount voucher.<br>
What percentage will you save by using the discount coupon?<br>
We can solve this through comparison: P/100*35 = 5<br>
When solving we find that: P = 500/35 = 14.29%<br>

<h1 class="card-title mt-2" style="font-size: 1.2rem;">c. Discount coupon of a certain percentage</h1>
Suppose you want to buy a new refrigerator and this refrigerator costs $360. However, through an advertising campaign you were able to obtain a 12% discount coupon. How much money can you save by using this coupon?<br>
We can find the solution through the following comparison: (12/100)*360 $ = 43.2 $<br>

<h1 class="card-title mt-2" style="font-size: 1.2rem;">d. Tip calculation</h1>
After a good lunch at a local restaurant you want to leave a tip for the excellent service. A tip of 9% of the bill seems like a good idea. Suppose the bill for lunch is $89, how much should the tip be?<br>
This comparison gives us the solution: 9/100*89 = 8.01$<br>
<div align="center">
</div>
<h1 class="card-title mt-2" style="font-size: 1.2rem;">e. Interest on a bond</h1>
You still have an old $5,000 bond that has interest at 4% per year. How much can you have after a year?<br>
After 1 year we receive 4% interest on the invested amount of $5000. We can do the following calculation: 5000 + (4/100)*5000 = 5000 + 200 = 5200 $<br>

<h1 class="card-title mt-2" style="font-size: 1.2rem;">f. Percentage increase in a savings account</h1>
Suppose you have an amount of $450 in your savings account at the bank. After 1 year this amount has risen to $465.<br>
What was the percentage increase after 1 year?<br>
Increased percentage =((V2-V1) /V1) *100 = ((465-450) /450) *100 =3.33%<br>

<h1 class="card-title mt-2" style="font-size: 1.2rem;">g. Percentage decrease after a price reduction</h1>
At the local furniture store an oak cabinet costs $420. However, the price decreases to $360 due to a liquidation sale.<br>
What is the percentage reduction between these two prices?<br>
Percentage decrease = ((V2-V1) /V1) *100 = ((360-420) /420) *100 = -14.28%<br>
<div align="center">
</div>
<h1 class="card-title mt-2" style="font-size: 1.2rem;">h. Difference between measured values ​​and theoretical values</h1>
Assume that the value measured in a test is equal to 12.86 while the theoretical value is equal to 14.<br>
What is the percentage of deviation?<br>
We use the formula: 100*| measured value- theoretical value|/ |theoretical value| = 100*| 12.86 - 14 | / |14| = 8.14%<br>

<h1 class="card-title mt-2" style="font-size: 1.2rem;">i. Deviation after rounding</h1>
Suppose a value of 5.2 is rounded to 5. What is the percentage deviation due to rounding?<br>
We apply this formula: 100*| measured value – theoretical value|/ |theoretical value| = 100 * | 5 – 5.2|/ |5.2| = 3.85 %<br>
</p>
<h2 class="mt-5" style="font-size: 1rem" align="justify">Calculate Percentage Online Free - Free Online Percentage Calculator - Calculate Percentage - Percentage Calculator - Calculate Percentages - Percentage Calculators</h2>
  </div>
</div>
 </div>
<div class="col-md-2">
<div class="adsanuncio fijolateral" align="center"><?php include '../includes/lateral-2-google-ads.php'; ?></div>
</div>
</div>
<!-- dd -->


</div>

<footer align="center" class="mt-5">
    <h2 style="font-size: 1rem">These simple percentage calculators solve all your problems</h2>
    <h6 style="font-size: .8rem">© 2024 Copyright: calcular-porcentajes.com</h6> 
</footer>
    
    </body>
    <script src="../plugins/assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../plugins/assets/dist/js/bootstrap.min.js" ></script>
    <script src="../plugins/assets/dist/js/jquery.min.js"></script>
    <?php include '../includes/ads-terra.php'; ?>
    <script src="../js/porc-en.js"></script>
    <script src="../js/alerts.js"></script>
</html>