
<div class="container">
  <h1>Login</h1>

	  <?= form_open('site/login_validation') ?>
		  <div class="form-group">
			<label for="exampleInputEmail1">Username</label>
			<input type="text" class="form-control valid" id="username" name="username" placeholder="Username">
		  </div>
		  <div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="password" name="password" placeholder="Password">
		  </div>
		  
	
		  <button type="submit" class="btn btn-default">Submit</button>
	</form>
	 <?= anchor('site/signup', 'Registration') ?>
</div>