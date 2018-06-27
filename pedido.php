<!DOCTYPE html>
<html>
  <head>
       <meta charset="utf-8"></meta>
	   <link rel="stylesheet" type="Luthejo/css" href="pedido.css">
  </head>
    <body>
		<h2><img src="letraL.png" width="40" height="40" align="left"> 
	   <img src="letraT.png" width="40" height="40" align="left">
	   <img src="letraJ.png" width="40" height="40" align="left"> 
	    <br></br>
		<button class="btn btn-default pull-right btn-horario" data-toggle="modal" data-target="#formHorario">Horario de Atendimento</button>
					<div class="modal-body">
						<div class="col-md-12">
							<form>
								<div class="form-group">
									<label for="tamanho">Tamanhos</label>
									<br></br>
									<input type="radio" name="webmaster" value="pequena"/> Pequena <br /> 
									<input type="radio" name="webmaster" value="media"/> Media <br /> 
									<input type="radio" name="webmaster" value="grande"/> Grande <br /> 
								</div>

								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label for="sabor">Pizza Salgada</label>
											<br></br>
											<input type="radio" name="webmaster" value=""/>Mussarela<br /> 
											<input type="radio" name="webmaster" value=""/>Calabresa<br /> 
											<input type="radio" name="webmaster" value=""/>Portuguesa<br /> 
											<input type="radio" name="webmaster" value=""/>Frango c/ Catupiry<br /> 
											<input type="radio" name="webmaster" value=""/>Atum<br /> 
											<input type="radio" name="webmaster" value=""/>Cinco Queijo<br /> 
											<input type="radio" name="webmaster" value=""/>Á Moda<br /> 
											<input type="radio" name="webmaster" value=""/>Baiana<br /> 
											<input type="radio" name="webmaster" value=""/>Bacon<br /> 
											<input type="radio" name="webmaster" value=""/>Strogonof de Carne<br /> 
											
											<label for="sabor">Pizza Doce</label>
											<br></br>
											<input type="radio" name="webmaster" value=""/>Sensação<br /> 
											<input type="radio" name="webmaster" value=""/>Romeu e Julieta<br /> 
											<input type="radio" name="webmaster" value=""/>Prestigio<br /> 
											<input type="radio" name="webmaster" value=""/>Chocolate<br /> 
										</div>
									</div>
									<div class="col-md-9">
										<div class="form-group">
											<label for="bebida">Bebidas</label>
											<button class="btn btn-default pull-right btn-horario" data-toggle="modal" data-target="#formHorario">...</button>
											
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="pagamento">Pagamento</label>
											<br><br/>
											<label for="pagamento">Cartão</label>
											<br></br>
											<input type="radio" name="webmaster" value=""/> Credito <br /> 
											<input type="radio" name="webmaster" value=""/> Debito <br /> 
											<label for="pagamento">Dinheiro</label>
											<input type="radio" name="webmaster" value=""/> ... <br /> 
										</div>
								</div>
						</div>
								<button type="submit" class="btn btn-default">Enviar</button>
								<button type="reset" class="btn btn-default">Cancelar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	</body>
</html>