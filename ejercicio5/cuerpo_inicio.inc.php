<body>
	<section class="form-main">
		<div class="form-content">
			<div class="box">
				<h3>Bienvenido</h3>
				
                <form action="conexion.php" method="POST">
					<div class="input-box">
						<input type="text" placeholder="Usuario" class="input-control" name="usuario">
					</div>

					<div class="input-box">
						<input type="password" placeholder="Password" class="input-control" name="pasword">
					</div>

					<br/>¿Seleccione tipo de rol?<br/>
					<br/>Estudiante : <input type="radio"  name="tipoUsuario" value="estudiante"><br/>
        			<br/>Director   : <input type="radio" name="tipoUsuario" value="director"><br/><br/>
					
					<button type="submit" class="btn">Iniciar Sesion</button>

				</form>

			</div>
		</div>
	</section>
</body>
