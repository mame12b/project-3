
<?php 
echo md5("12345");

?>
<!DOCTYPE html>
<html>
    
    <head>
        <title>multi-user login</title>
        <meta name="viewports" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
crossorigin="anonymous">

</head>
<body>
   <div class="container d-flex justify-content-center align-items-center"
   style="min-height: 100vh">
    
   <form class="border shadow p-3 rounded" 
   action="php/check.php"
   method="post"
   style="width: 400px;">
   <h1 class="text-center p-3">LOGIN</h1>
   <?php if (isset($_GET['error'])) {?>
    <div class="alert alert-danger" role="alert">
       <?=$_GET['error']?>
 </div> 
<?php } ?>

    <div class="mb-3">
     <label for="username" 
           class="form-label">user name</label>
     <input type="text" 
           class="form-control"
           name="username" 
            id="username">
  </div>
  <div class="mb-3">
    <label for="password" 
            class="form-label">password</label>
    <input type="password" 
           class="form-control" 
           name="password"
           id="password">
  </div>
  <div class="mb-1">
    <label class="form-label">select user type:</label>
   
  </div>
  <div class="form-floating">
  <select class="form-select mb-3" 
  name="role"
  id="floatingSelect" 
  aria-label="Floating label select example">
    <option selected value="admin">Admin</option>
    <option value="user">user</option>
  
  </select>
  
</div>
 
  <button type="submit" class="btn btn-primary">login</button>
</form>
   </div>
</body>
</html>
