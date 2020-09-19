<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>


    <!-- Main -->
    <div class="content">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h1>Login Form</h1>
                    <form method="POST" action="form_script.php">
                        <div class="form-group">
                            <input type="name" class="form-control" placeholder="FirstName" name="first_name" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required>
                        </div>
                        <div class="form-group">
                            <input type="name" class="form-control" placeholder="LastName" name="last_name" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" required>

                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" placeholder="DOB" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" name="DoB" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Telephone/Mobile" maxlength="10" size="10" name="phone" required>

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Designation" name="designation" required>
                        </div>
                      
                        <div class="form-group">
                            <h4>Gender</h4>
                            <input type="radio" id="male" name="gender" value="male" required>
                            <label for="male">Male</label>
                            <input type="radio" id="male" name="gender" value="female" required>
                            <label for="female">Female</label>
                            <input type="radio" id="male" name="gender" value="other" required>
                            <label for="other">Other</label><br>

                        </div>
                        <div class="form-group">
                        <h4>Hobbies</h4>
                        <input type="checkbox" id="hobby1" name="hobbies" value="travel">
                        <label for=" travel">Travelling</label>
                        <input type="checkbox" id="hobby2" name="hobbies" value="cooking">
                        <label for="hobby2"> Cooking</label>
                        <input type="checkbox" id="hobby3" name="hobbies" value="photography">
                        <label for="hobby3">Photography</label>
                        <input type="checkbox" id="hobby4" name="hobbies" value="games">
                        <label for="hobby4">Playing Games</label>
                        </div>
                        <div class="btn-signup">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Main End -->


</body>

</html>