@include('includes.nav');
<body>

	<body style="text-align: center !important; background-image: url('signup.jpg')  !important;" >         



		<form style=" margin-top: 75px !important; text-align: center !important; width: 35% !important; border: none !important; background-color: white !important; opacity: 0.95 !important;" action="login.php" method="post">

			<div  class="field_wrapper">
				<h2 class="form-title">Create account</h2>

				<div class="form-group">
					
					<label for="Email">Email</label>
					<input type="email" class="form-input" name="Email" id="email" placeholder="Your Email" required/>
				</div>
				<div class="form-group">

					<label for="password"><b>Password</b></label>
					<input type="password" placeholder="Enter Password" id="password" name="PassW" required>
				</div>
				<div class="form-group">

					<button type="submit">Login</button>
				</div>    
			</div>
		</form>
		
	</body>
	</html>
