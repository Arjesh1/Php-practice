<html lang="en">
<head>

<!-- Latest compiled and minified Bootstrap Core CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<!-- Bootstrap theme -->
<link href="../bootstrap-3.3.5-dist/css/bootstrap-theme.min.css" rel="stylesheet">

   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <title>Exercise 7-1 | Detecting a $_POST</title>
</head>

<body>
<header>
</header>


<?php

function displayPostStatus() {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
echo "<pre>";
print_r($_POST);
echo "</pre>";
if (isset($_POST['alias']) && $_POST['alias']!="") {
echo "Hello ".$_POST['alias'];
} else {
echo "Post detected, but no value";
}
} else {
echo "No Post Detected";
}
}

?>


<div class="container theme-showcase" role="main">  
	<div class="jumbotron">
        <h1>Detecting Post....</h1>
	</div>
	No Post Detected
   <form action='' "<?php echo $_SERVER['PHP_SELF']; ?>" method='POST'>
   <input type='text' name='alias' />
   <input type='submit' name="POST" value='POST' />
   </form> 
</div>
</body>
</html>
