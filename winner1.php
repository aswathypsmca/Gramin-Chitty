<?php
include 'dbcon.php';

if(!(isset($_SESSION['user_name'])))
{

header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>

  <title>Gramin chitty Management</title>
  <link rel="stylesheet" href="logo.css">
  </head>
<body>
  <!-- Div for header section -->
  <div class="header">
        <br>
    <b class="heading1"><strong><font color="yellow" size="6">GRAMIN CHITTY MANAGEMENT</font></strong></b>
    <br>
    <b class="heading2"><strong><font color="blue" size="4">GOVT. OF KERALA</font></strong></b>



  </div>
  <!-- Div for body section -->
 <div class="body1">
   <!-- <center><img src="ajce.png" id="ajce_img"></center>-->
<div class="body_text1">
<a href="memberlogin.php">HOME<img src="home.jpg" id="homeimg" width="28px" height="15px"></a><br><br><br>


 
  <a href="logout.php">LOGOUT</a><br>


    </div>
    </div>
  
  <!-- Div for login section -->
  <div class="login2">

      

 <!-- <table border=5px style="margin-left:0%; margin-top:10%;">-->
 <table border=5px style="margin-left:0%; margin-top:8%;">
<tr><th>ID</th><th>NAME</th><th>ADDRESS</th><th>PHONE</th><th>EMAIL</th><th>PAN</th><th>CHITTY NAME</th><th>date</th></tr>
<?php 
//$sql="SELECT * FROM `tbl_customer` where status='0'";
//$sql="SELECT * FROM `tbl_auction`,`tbl_lot`,`tbl_customer`,`tbl_chittreg`,`tbl_custchitty` where tbl_customer.cust_id=tbl_custchitty.cust_id and tbl_custchitty.cust_ch_id=tbl_auction.cust_ch_id ";
//$sq2="SELECT chitt_name FROM `tbl_chittreg` where chitt.status='0'";

$sql="SELECT * from `tbl_auction` where ";
$result=mysqli_query($con,$sql);
//$i=0;
while($row=mysqli_fetch_array($result))
{
	?>
	<tr>
	<td><?php echo $row['cust_id'] ?></td>
	<td><?php echo $row['c_name'] ?></td>
	
	<td><?php echo $row['c_address'] ?></td>
	<td><?php echo $row['c_mob'] ?></td>
    <td><?php echo $row['c_email'] ?></td>
	<td><?php echo $row['install'] ?></td>
	<td><?php echo $row['amount'] ?></td>
	 <td><?php echo $row['date'] ?></td>
		
	
	 </td>
	</tr>
	<?php
}
?>  
</table>

 </div> 


<div class="footer">
        <center><marquee>GRAMIN CHITTY MANAGEMENT</marquee></center>
      </div>

    </body>
    </html>
