<h3>List of BOOKS</h3>

<?php
$base = mysqli_connect("localhost", "heinek76", "0708", "heinek76") or die ("Not connected");

        
if($base) echo "Connection OK<br>";
    
$list='select * from BOOKS';
$results = mysqli_query($base,$list);
?>

<p><b>In the database we have the following BOOKS:</b></p>

<table border="1">
<tr>
<td width="40"><b>ID</b></td>
<td width="150"><b>book name:</b> </td>
<td width="100"><b>author name:</b> </td>
<td width="120"><b>publisher:</b> </td>
<td width="40"><b>publish year</b> </td>
<td width="80"><b>comment</b> </td>
</tr>
<?php
         while ($line = mysqli_fetch_array($results))
          {
             echo "<tr>
                   <td align=\"center\">".$line['id']."</td> 
                   <td align=\"left\">".$line['book_name']."</td>
                   <td align=\"left\">".$line['author_name']."</td>
                   <td align=\"left\">".$line['publisher']."</td>
                   <td align=\"center\">".$line['publish_year']."</td>
                   <td align=\"center\">".$line['comment']."</td>
                   
                   </tr>";
          }
mysqli_close($base);
?>
</table>
