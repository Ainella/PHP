<!doctype html>
<html>

<head>
<meta charset="UTF-8">
<title>IT Work Environment</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>


<header id="heading"></header>

<nav id="menu">	
<ul>
<li> <a href="index.php?id=1">Home page</a> </li>
<li> <a href="index.php?id=111">My interests</a> </li>
<li> <a href="index.php?id=2">List of books</a> </li>
<li> <a href="index.php?id=3">Add a book</a> </li>
</ul>
</nav>

<article id="contents">
<?php
	 if(empty($_GET["id"])) $_GET["id"]=1;
	 if($_GET["id"]==1) include("home.php");
	 if($_GET["id"]==2) include("list.php");
	 if($_GET["id"]==3) include("add.php");
         if($_GET["id"]==31) include("add2.php");
	 if($_GET["id"]==111) include("my interests.php");

?>
</article>

<footer id="foot">by Ainella Bernikova</footer>

</body>
</html>