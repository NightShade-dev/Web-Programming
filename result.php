<!DOCTYPE html5>
<head>
<title>Blood bank Management System</title>
<link rel="stylesheet" href="Css.css">

</head>

<?php include('admin/connection.php'); ?>


		<div class="logo">
			<h1><a href="index.php"><img src="Images/logo.png" alt=""></a></h1>
		</div>
	
		<?php require('header.php');?>
<hr>
        <br>
        <br>
   
<div style=" height:auto">

     <form method="post">
      <table cellpadding="0" cellspacing="0" width="1100px" style="margin:auto">
  <tr>            
            <td>
            
            
            
  
          
         
            <?php
$cn=makeconnection();
$s="select * from donarregistration,bloodgroup where donarregistration.b_id='". $_REQUEST["bg"]."' and donarregistration.b_id=bloodgroup.bg_id";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$n=0;
	while($data=mysqli_fetch_array($result))
	{
?>
  <tr><td  >

            <table cellpadding="0" cellspacing="0" width="700px" height="150px" style="margin:auto; border:none;" class="tableborder">
                <tr><td width="100px"  align="center" style="vertical-align:middle">
                    <td width="500px" height="50px" style="vertical-align:top">
                        
 <div class = results>
 
 <table cellpadding="0" cellspacing="0" width="800px" height="100px" style="margin:auto; border:0px" class="tableborder">
        <tr><td  align="center"><img src="Images/results.png" height="80px" style="padding-top:20px" /></td></tr>
        <tr><td >&nbsp;</td></tr> 
        
                        <table cellpadding="0" width="500px" height="150px" style="border:none">
           <tr><td colspan="2">&nbsp;</td></tr>
                <tr><td><span class="title">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td><td><?php echo $data[1]; ?></td><td align="left" width="50%"></td></tr>
                 <tr><td><span class="title">Gender</span></td><td><?php echo $data[2]; ?></td></tr>
                  <tr><td style="width:24px"><span class="title">Mobile No:</span></td><td><?php echo $data[4]; ?></td></tr>
                  <tr><td><span class="title">Email</span></td><td><?php echo $data[6]; ?></td></tr>
                   <tr><td><span class="title">Blood Group</span></td><td><?php echo $data[10]; ?></td></tr>

                     <tr><td colspan="2">&nbsp;</td></tr>
                     
                     
                      </table>

                    </td></tr></table></td></tr>
               
   <?php }
   ?>
           </table></td></tr></table></form>

</div>
		
</form>
</div>
</body>
</html>