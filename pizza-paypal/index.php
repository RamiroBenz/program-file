<html>
    <head>
		<meta charset="utf-8">
        <title>Sistema de pedidos de Pizza con PayPal usando PHP</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="js/jquery.min.js"></script>
        <!-- jQuery code for implement logic for select pizza size and add toppings checkbox -->
        <script type="text/javascript">
            $(document).ready(function () {
                var size = 0;
                $('select').change(function () {
                    size = ($(this).val());
                    addValue(size);
                });
                addValue(size);
                function addValue(size) {
                    var total = 0;
                    function updateTextArea() {
                        var allVals = [];
                        $('#checkbox_container :checked').each(function () {
                            allVals.push($(this).val());
                        });
                        if (size === 0) {
                            size = 10;
                        }
                        total = parseFloat(size) + parseFloat(eval(allVals.join("+")));
                        if (isNaN(total)) {
                            if (size === 0) {
                                total = 10;
                            }
                            else {
                                total = size;
                            }
                        }
                        $('p#total span').html(" $ " + total);
                    }
                    $(function () {
                        $('#checkbox_container input').click(updateTextArea);
                        updateTextArea();
                    });
                }
            });
        </script>
    </head>
    <body style="background-color: #f7f7f7;">
	 <div id="main">
			<div class="row">
				<center><h1 class='text-info'> Sistema de pedidos de Pizza con PayPal usando PHP</h1></center>
				<div class="col-md-3"></div>
				<div class="col-md-6">
				
					<div class="panel panel-info" style="margin-top: 60px;">
						<div class="panel-heading"><h3 class='text-center'>Ordenar una Pizza con PayPal</h3></div>
						  <div class="panel-body">
							<img id="spizza" src="images/pizza_PNG7135.png" class='img-responsive'/>
							<form action="process.php" method="post">
                    <label>Seleccion el tamaño de la Pizza  :</label>
                    <select name="pizza_type" >
                        <option value="100">Pizza pequeña - $100.00</option>
                        <option value="150">Pizza mediana - $150.00</option>
                        <option value="200">Pizza gigante - $200.00</option>
                    </select>
                    <br><br>
                    <center><h3>Agrega los ingredientes que desees. </h3></center>
					
                    <div id="checkbox_container">
                        <div id="chk">
                            <p>Jamón</p>
                            <input class ="chk1" type='checkbox' name='topping1' value='50.00' id="topping1"/><label  class ="chk1" for="topping1"></label> 
                            <p>$50.00</p>
                        </div>
                        <div id="chk">
                            <p>Pepperoni</p>
                            <input  class ="chk2" type='checkbox' name='topping2' value='50.00' id="topping2"/><label class ="chk2" for="topping2"></label> 
                            <p>$50.00</p>
                        </div>

                        <div id="chk">
                            <p>Queso</p>
                            <input  class ="chk4" type='checkbox' name='topping4' value='3.50' id="topping4"/><label class ="chk4" for="topping4"></label> 
                            <p>$49.99</p>
                        </div>

                        <div id="chk">
                            <p>Salami</p>
                            <input  class ="chk5" type='checkbox' name='topping5' value='50.00' id="topping5"/><label class ="chk5" for="topping5"></label> 
                            <p>$50.00</p>
                        </div>
                        <div id="chk">
                            <p>Tocino</p>
                            <input  class ="chk3" type='checkbox' name='topping3' value='50.00' id="topping3"/><label class ="chk3" for="topping3"></label> 
                            <p>$50.00</p>
                        </div>
                    </div>
                    <center><p id="total" >Monto total a pagar : <span>$ 100 </span></p></center>
                    <input type="submit" value=" Ordenar ahora " name="submit">
                </form>
						  </div>
					</div>
				<div class='text-center'>	
					<img src="images/secure-paypal-logo.jpg" class='text'>
				</div>	
				</div>
			</div>
		</div>	

    </body>
</html>
