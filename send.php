<?php
//echo "HElLO" ;
//echo "<br>";
//$name="Akanksha" ;
//echo $name ;
//echo $name=$_POST['n1'];
//echo $name=$_GET['n1'];
$name=$_REQUEST['n1'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['pwd'];
$city=$_REQUEST['city'];
$branch=$_REQUEST['branch'];

$connect=mysqli_connect("localhost","root","","p1");
$sql="insert into user(name,email,pass,city,branch) values ('$name','$email','$pass','$city','$branch')";
mysqli_query($connect,$sql);
?>
<script>
    alert("user registered.");
    window.location="index.php";
</script>

<!-- <table border="1">
    <tr>
        <td> <?php  echo $name ;  ?></td>
        <td> <?php  echo $email ;  ?></td>
        <td> <?php  echo $pass ;  ?></td>
        <td> <?php  echo $city ;  ?></td>
    </tr>



</table> -->
 