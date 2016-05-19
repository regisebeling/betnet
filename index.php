<?php
require "comum.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="styleContrario.css" media="screen" />
</head>
<body>
<h1>LOGIN</h1>
<form method="POST" action="login_vai.php" name = "form">
<br>
<table cellspacing ="10">
<tr>
<td><h4>Login:</h4></td>
<td></td>
<td><input class ="campo"  size = 30 type="text" name = "email" id = "email"></td> 
</tr>
<tr>
<td><h4>Senha:</h4></td>
<td></td>
<td ><input class ="campo"  size = 30 type="password" name = "senha"></td> 
</tr>
</table>
<br>

<input type = submit class= "btn" value = 'ENTRAR' >
</form>
<br><br><br>

=================================================

<h1>CADASTRO</h1></center>

<form method=post action = "cadastrarUsuario.php" name = form2>

<table cellspacing="10"> 
<tr> 
              	  
       	<tr> 
           	 <td ><h4>Nome:</h4></td> <td></td>
           	 <td ><input class ="campo"  size = 40 type=text name = "nome"></td> 
       	</tr> 
      	
	<tr> 
           	 <td><h4>Email:</h4></td> <td></td>
           	 <td><input  class ="campo"  size = 40 type=text  name = "email"></td> 
       	</tr>

	<tr> 
           	 <td><h4>CPF:</h4></td> <td></td>
           	 <td><input  class ="campo"  size = 40 type=text name = "cpf"></td>

       	</tr> 

	<tr> 
           	<td><h4>Data de nascimento:</h4></td> <td></td>
           	<td><center><select  name="diaAniversario" id = "diaAniversario" >
			<option value="0">&nbsp;Dia&nbsp;</option>
			<?php

			for ($i = 0; $i <= 31; $i++){
				echo "<option value='".$i."'>".$i."</option>";
			}
			?>

			</select> 
			&nbsp;&nbsp;&nbsp;
			<select name="mesAniversario" id = "mesAniversario">
			<option value="0">&nbsp;Mês&nbsp;</option>

			<?php

			for ($i = 1; $i <= 12; $i++){
				echo "<option value='".$i."'>".$i."</option>";
			}
			?>
			</select>
			&nbsp;&nbsp;&nbsp;

			<select name = "anoAniversario" id ="anoAniversario">
			<option font-size= "20px" value="0">&nbsp;Ano&nbsp;</option>
			<?php

			for ($i = 2016; $i >= 1900; $i--){
				echo "<option value='".$i."'>".$i."</option>";
			}
			?>

			</select></center></td> 
       	</tr> 

	<tr> 
           	<td><h4>Sexo:</h4></td> <td></td>
           	<td><center>Masculino
		<input type ="radio" name="sexo" id = "homem" value ="M">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	       	<input type ="radio" name="sexo" id="mulher" Value = "F">Feminino</center>
	</td> 
       	
	<tr> 
           	 <td><h4>Conta:</h4></td> <td></td>
           	 <td><input  class ="campo"  size = 40 type=text name = "conta"></td>

       	</tr> 

	<tr> 
           	 <td><h4>Cidade:</h4></td> <td></td>
           	 <td><input  class ="campo"  size = 40 type=text name = "cidade"></td>
       	</tr> 

	<tr> 
           	 <td><h4>UF:</h4></td> <td></td>
           	 <td><input  class ="campo"  size = 40 type=text name = "uf"></td>

       	</tr> 

	<tr> 
           	 <td><h4>CEP:</h4></td> <td></td>
           	 <td><input  class ="campo"  size = 40 type=text name = "cep"></td>

       	</tr> 
	<tr> 
           	 <td><h4>Número:</h4></td> <td></td>
           	 <td><input  class ="campo"  size = 40 type=text name = "num"></td>

       	</tr> 
	<tr> 
           	 <td><h4>Complemento:</h4></td> <td></td>
           	 <td><input  class ="campo"  size = 40 type=text name = "complemento"></td>

       	</tr> 


	<tr> 
           	 <td><h4>Senha:</h4></td> <td></td>
           	 <td><input  class ="campo"  size = 40 type=password name = "cadsenha"></td> 
       	</tr>

	<tr> 
           	 <td><h4>Confirmar Senha:</h4></td> <td></td>
           	 <td><input  class ="campo" size = 40 type=password name = "cadconfsenha"></td> 
       	</tr>
	 
   	
	</tr> 
</table> <br>

<input type = reset  class ="btn" value = CANCELAR name = cancelar>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type = button class= "btn" value = 'CADASTRAR' onclick='form2.submit()'>






</body>
</html>
