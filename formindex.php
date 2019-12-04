<?php
//connect to the database

$con=mysqli_connect("localhost","root", "");

//select database for use
mysqli_select_db($con,"fashion") or die("could not select the database");
$design=$_POST['design'];
$category=$_POST['category'];
$price=$_POST['price'];
if(isset($_POST['submit'])) {
	$query = $con->query( "SELECT * FROM images WHERE productname='$productname' AND category='$description' AND price ='quantity");
/
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        //$imageURL = 'upload/'.$row["name"];
    	$imageURL = 'upload/'.$row["name"];
        //while (($row=mysqli_fetch_row($result))!=FALSE){

  
    
?>
    <img src="<?php echo $imageURL; ?>" alt="" height="350" width="500"/>


		  
<?php
echo "<br />";
echo "productname : ";
echo "<b>{$row['productname']}</b>";
echo "<br />";
echo "description : ";
echo "<b>{$row['description']}</b>";
echo "<br />";
echo "quantity: ";
echo "<b>{$row['quantity']}</b>";
echo "<br />";

 }
}
else{  echo "no images found";} 
}



//close connection
mysqli_close($con);

?>