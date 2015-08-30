<?php
if (!empty($_POST)){
	if( ('jebali.alaeddine@gmail.com'==$_POST['email']) && ('wct@2015'==$_POST['password']) ){
		$_SESSION["login.loggedUser"] = "Ala Eddine JEBALI";
		header("Location: /");		
	}else{
		$_SESSION["login.error"] = "true";
		//header("Location: /admin");
	}
}
?>
<div class="contentpanel">
	<div class="row-fluid">
		<div class="offset3 span6 offset3">
			<div class="page-header">
				<h1>Login</h1>
			</div>
			<div class="hero-unit">
				<?php
					if( !empty($_SESSION["login.error"]) ){
						unset( $_SESSION["login.error"] );
				?>
					<div class="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<h4>Error!</h4> E-mail and/or password are not correct...
					</div>
				<?php } ?>
				<form class="form-horizontal" action="/login" method="POST">
					<div class="control-group">
						<label class="control-label" for="inputEmail">E-mail</label>
						<div class="controls">
							<input name="email" type="text" id="inputEmail" placeholder="E-mail">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="inputPassword">Password</label>
						<div class="controls">
							<input name="password" type="password" id="inputPassword" placeholder="Password">
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<button name="submit" type="submit" class="btn btn-inverse">Sign in</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>