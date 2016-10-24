<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" title="no title">
  <title>Fragmentación</title>
</head>
<body>
<div class="container" >
    <div class="row">
        <div class="tab-content" >
			<div class="row">
				<div class="col-sm-12">
					<br/>
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#H">Fragmentación Horizontal</a></li>
						<li><a data-toggle="tab" href="#V">Fragmentación Vertical</a></li>
					</ul>
					<div class="tab-content">
						<br/>
						<div id="H" class="tab-pane fade in active">
							<div class="row">
								<div class="col-sm-6">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h3 class="panel-title">Seleccion de relacion</h3>
										</div>
										<div class="panel-body">
											<div class="row">
												<div class="col-sm-12">
													<div class="row">
														<div class="col-sm-12">
															<label for="relacion" class="col-lg-2 control-label">Relacion</label>
														</div>
														<div class="col-sm-12">
															<select class="form-control" id="tablas" name="tablas">
																<option> Selecciona tabla </option>
															</select>
														</div>
													</div>
													<br/>
													<div class="row">
														<div class="col-sm-12">
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h3 class="panel-title">Informacion de la Relacion</h3>
																</div>
																<div class="panel-body">
																	<div class="row">
																		<div class="col-sm-12">
																			<div id="tablaAtributos">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h3 class="panel-title">Generar predicados simples</h3>
										</div>
										<div class="panel-body">
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group">
														<div class="col-sm-12">
															<label for="relacion" class="col-lg-12 control-label">Seleccionar atributo</label>
														</div>
														<div class="col-sm-12">
															<select class="form-control" id="atributos" name="atributos">
																<option value=""> Selecciona tabla </option>
															</select>
														</div>
														<div class="col-sm-12">
															<br/>
															<label for="relacion" class="col-lg-2 control-label">Operador</label>
														</div>
														<div class="col-sm-12" id="div-operador">
															<select class="form-control" id="operador" name="operador">
																<option value=""> Selecciona operador</option>
															</select>
														</div>
														<div class="col-sm-12">
															<br/>
															<label for="relacion" class="col-lg-2 control-label">Valor</label>
														</div>
														<div class="col-sm-12" id="div-valor">
															<input type="text" class="form-control" id="valor" placeholder="Valor">
														</div>
														<br/>
														<div class="col-sm-12">
															</br>
															<button type="button" class="btn btn-primary btn-block" id="generarPredicadoSimple">Generar predicado simple</button>
														</div>
													</div>
												</div>
												<div class="col-sm-12" id="msj-error">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h3 class="panel-title">Visualizador de predicados simples</h3>
										</div>
										<div class="panel-body">
											<div class="row">
												<div class="col-sm-12">
													<div class='table table-hover'>
														<table class='table' id="tablaPredicadosSimples">
															<thead>
																<tr>
																	<th>Numero</th>
																	<th>Atributo</th>
																	<th>Operador</th> 
																	<th>Valor</th>
																	<th>Relacion</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h3 class="panel-title">Generador de predicados miniterminos</h3>
										</div>
										<div class="panel-body">
											<div class="row">
												<div class="col-sm-12">
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h3 class="panel-title">Enviar a un sitio</h3>
										</div>
										<div class="panel-body">
											<div class="row">
												<div class="col-sm-12">
													<form class="form-horizontal" role="form">
														<div class="form-group">
															
															<label for="relacion" class="col-lg-2 control-label">Operador</label>
															<div class="col-lg-10">
																<select class="form-control" id="sitio" name="sitio">
																	<option value=""> Seleccionar sitio</option>
																	<option value="1"> Localhost</option>
																	<option value="2"> 10.100.0.2</option>
																	<option value="3"> 10.100.0.3</option>
																</select>
															</div>
															<br/>
															<div class="col-lg-10">
																<div class="col-lg-10">
																	<button class="btn btn-default" id="">Enviar</button>
																</div>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="V" class="tab-pane fade">
							Work in progress...
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>  
</div>

<!--Bootstrap--->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/bootstrap-datepicker.de.js" charset="UTF-8"></script>

<!--JS-->
<script type="text/javascript" src="js/obtener_tablas.js"></script>
<script type="text/javascript" src="js/obtener_atributos.js"></script>
<script type="text/javascript" src="js/obtener_operadores_valor.js"></script>
<script type="text/javascript" src="js/obtener_predicado_simple.js"></script>

<script>
$(window).load(function() {
	busca_tablas();
});
</script>

</body>
</html>
