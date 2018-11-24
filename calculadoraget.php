<!DOCTYPE html>
<html>
<head>
<title>Link Function - <?php echo $tipo; ?> </title>
</head>
<body>
<h2>Link de função passando variável via GET</h2>

<p> 

<a href="atividadeParametro.php?tipo=<?php echo $tipo ?>&num1=<?php echo $num1; ?>&num2=<?php echo $num2; ?>">
Clique para calcular a "<?php echo $tipo; ?>" de <?php echo $num1; ?> e <?php echo $num2; ?>. 
</a>

</p>


</body>
</html>
<!doctype html>
<html lang="en">
 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   <title>Calculadora get</title>
 </head>
 <body>
   <div class="container">
     
   <h2 align="center">Calculator Tabajara</h2>
   <br>
   
   <div class="row">
     <form method="get" action="atividadeParametro.php">
         
           <div class="form-group" style="width: 300px">
           
             <label for="exampleFormControlSelect1">Tipo:</label>
             <select class="form-control" id="exampleFormControlSelect1">
               <option value="">=========</option>
               <option value="soma">soma</option>
               <option value="subtração">subtração</option>
               <option value="multiplicação">multiplicação</option>
               <option value="divisão">divisão</option> 
             </select>
           </div>
         

         
           <div class="form-group" >
             <label for="num1">número 1</label>
             <input name="num1" type="text" class="form-control" id="número 1">
           </div>
         

         
           <div class="form-group" >
             <label for="num2">número 2</label>
             <input name="num2" type="text" class="form-control" id="número 2">
           </div>
           <button type="submit" class="btn btn-primary mb-2">Calcular</button>

         
     </form>
   </div>
   

   </div>



   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 </body>
</html>