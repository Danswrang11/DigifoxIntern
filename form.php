<!doctype html>
<html>
<head>
  <title>My Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="form.css">
</head>
<body>
	<main class="p-3 mb-2 bg-warning text-dark">
	<form class="row g-3">
			<div class="col-md-6">
			    <label class="form-label">First Name</label>
			    <input type="text" class="form-control" id="fname" placeholder="Enter your first name">
			 </div>

			  <div class="col-md-6">
			    <label class="form-label">Last Name</label>
			    <input type="text" class="form-control" id="lname" placeholder="Enter your last name">
			  </div>

			 <div class="col-md-6">
			 	<label class="form-label">Gender:</label><br>
		      	<input class="radio-inline" type="radio" name="gender" checked>Male</input>
		      	<input class="radio-inline" type="radio" name="gender">Female</input>
			 </div>

			  <div class="col-md-6">
			    <label for="inputPassword4" class="form-label">Date of Birth</label>
			    <input type="date" class="form-control">
			  </div>

			 <div class="col-12">
			    <label class="form-label">Email</label>
			    <input type="email" class="form-control" placeholder="Example: abc12@gmail.com">
			 </div>

			 <div class="col-12">
			    <label class="form-label">Mobile Number</label>
			    <input type="text" class="form-control" placeholder="XXXXXXXXXX">
			 </div>

			 <div class="col-md-6">
		    <label for="inputCity" class="form-label">City</label>
		    <input type="text" class="form-control" placeholder="Enter your City name">
		  </div>
		  <div class="col-md-4">
		    <label for="inputState" class="form-label">State</label>
		    <select id="inputState" class="form-select">
		      <option selected>Choose</option>
		      <option>Assam</option>
		      <option>Arunachal Pradesh</option>
		      <option>Bihar</option>
		      <option>Nagaland</option>
		      <option>Mizoram</option>
		      <option>Kolkata</option>
		      <option>Delhi</option>
		    </select>
		  </div>
		  <div class="col-md-2">
		    <label for="inputZip" class="form-label">Zip</label>
		    <input type="text" class="form-control" placeholder="XXXXXX">
		  </div>

			  <div class="col-12">
			    <label for="inputPassword4" class="form-label">Password</label>
			    <input type="password" class="form-control" placeholder="Set a strong Password">
			  </div>

			  <div class="col-12">
			    <label for="inputPassword4" class="form-label">Retype Password</label>
			    <input type="password" class="form-control" placeholder="Retype your password">
			  </div>
		 
		  <div class="col-12">
		    <div class="form-check">
		      <input class="form-check-input" type="checkbox">
		      <label class="form-check-label" for="gridCheck">
		        Remember Me
		      </label>
		    </div>
		  </div>
		  <div class="col-12">
		    <button type="submit" class="btn btn-primary">Sign in</button>
		    <a href="home.php">
			     <button type="button" class="btn btn-primary">Home</button>
        	</a>
		  </div>
	</form>
</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>