<html>
<head>
	<title>Symphony</title>
    <link rel='stylesheet' href='style.css' type='text/css'>
</head>
<body>

<?php
require 'flag.php';

if (isset($_GET['password'])) {
	if (is_numeric($_GET['password'])){
		if (strlen($_GET['password']) < 4){
			if ($_GET['password'] > 999)
				die('Flag: '.$flag);
			else
				print '<p class="alert">Too little</p>';
		} else
				print '<p class="alert">Too long</p>';
	} else
		print '<p class="alert">Password is not numeric</p>';
}
?>

<section class="login">
        <div class="title">
                <a href="./index.txt">Symphony</a>
        </div>

        <form method="get">
                <input type="text" required name="password" placeholder="Password" /><br/>
                <input type="submit"/>
        </form>
</section>
</body>
</html>