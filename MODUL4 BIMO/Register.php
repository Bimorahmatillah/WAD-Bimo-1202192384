<?php
session_start();



if(isset($_post['Login'])){
    Login($_post);
}

?>

<!doctype html>
<html lang="en">

<head>
    
    <title>Register</title>

</head>

<body style="background-color:antiquewhite;">
    <nav class="navbar navbar-expand-lg justify-content-between bg-seashell navbar-dark">
        <h1>
            <strong>
                <a class="navbar-brand text-light" href="index.php">EAD Travel</a>
            </strong>
        </h1>
    
    <u1 class="navbar-nav font-weight-bold">
        <li class="nav-item" >
         <a class="nav-link" href="Login.php">Login</a>
         <li>
        <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
        </li>
    </ul>
</nav>


<?php if (isset($_SESSION['message'])):?>
    <div class='alert alert-warning alert-dismissible fade show fade in' role='alert'>
        <?=$_SESSION['message'];?>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
</button>
</div>
<?php
    unset($_SESSION['message']);
endif;
?>


<div class="container" style="margin-top: 160px;">
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="container">
                <h4 class="card-title text-center mt-4 pb-5">Registrasi</h4>
                <hr>

                <div class="card-body pt-0">
                    <form action=""method="post">
                        
<div class="form-group">
    <label for="nama">Nama</label>
     <input required type="nama" class="form-control" id="nama" name="nama" palceholder="Enter Your Full Name">
</div>
<div class="form-group">
    <label for="email">E-mail</label>
    <input required type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address">
</div>
<div class="form-group">
    <label for="no_hp">Handphone Number</label>
    <input required type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Enter Your Phone Number">
</div>
<div class="form-group">
    <label for="Password">Password</label>
    <input required type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password">
</div>
<div class="form-group">
    <label for="confirmPassword">Konfirmasi Password</label>
    <input required type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password">
</div>
<div class="text-center pt-2">
    <button type="submit" class="btn btn-primary" name="register">Daftar</button>
    <p class="mt-3">You have an account? <a href="Login.php" class="text-secondary">Login</a></p>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

</body>
</html>




                
