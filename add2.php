<h3>Added book:</h3>

<table border="1">
<tr><td width="120"><b>Book name:</b> </td><td width="200"><?php echo $_POST["book_name"];?></td></tr>
<tr><td width="120"><b>Author name:</b> </td><td width="200"><?php echo $_POST["author_name"];?></td></tr>
<tr><td width="120"><b>Publisher:</b> </td><td width="200"><?php echo $_POST["publisher"];?></td></tr>
<tr><td width="120"><b>Publish year:</b> </td><td width="200"><?php echo $_POST["publish_year"];?></td></tr>
<tr><td width="120"><b>Comment:</b> </td><td width="200"><?php echo $_POST["comment"];?></td></tr>
</table>

<br>

<?php
$link = mysqli_connect("localhost", "heinek76", "0708", "heinek76") or die ("No connection");

if($link) echo "Connection OK";

   $querytext = "INSERT INTO BOOKS(book_name,author_name,publisher,publish_year,comment) VALUES(
                     '".$_POST["book_name"]."',
                     '".$_POST["author_name"]."',
                     '".$_POST["publisher"]."',
                     '".$_POST["publish_year"]."',
                     '".$_POST["comment"]."')";                     

        echo "<pre>$querytext </pre>";


        $result = mysqli_query($link, $querytext );

        if($result)
        {
            echo "The book succesfully added.<br>";
        }
        else
        {    
              echo "Something wrong.<br>";
        }
mysqli_close($link);
?>
