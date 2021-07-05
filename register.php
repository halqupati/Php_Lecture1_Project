<!DOCTYPE html>
<html>
<head>
	<title>Kown Lectures</title>

	<style>
		body{
			background-image:url('image1.jpg'); 
		}

				button{
			height: 30px;
		}

		a{
			text-decoration-line: none;
		}

		label{
			color: black;
			
		}
		input{
			width:250px;
		}

		#input-div{
			padding-top: 10px;
		}

	</style>
</head>
<body>
	<center>
		<h1 style="text-align: center">Kown Solution website Template</h1>
        <h2 style="text-align: center">Hello Everyone in Kown solution</h2>
      <div style="text-align: center">
    	<button style="background-color:orange;border: none">
          <a  style="padding: 20px;" href="http://www.localhost/kown1/index.php">Home</a>		
	    </button>
	    <button style="background-color:white;border: none">
          <a  style="padding: 20px;" href="http://www.localhost/kown1/login.php">Login</a>	
	    </button>
	    <button style="background-color:green;border: none">
          <a   style="padding: 20px;" href="http://www.localhost/kown1/contact.php">contact Us</a>		
	    </button>	
      </div>

  <form >
 	<div style="padding-top: 50px">
 		<table>
 			<tr>
 				<div id="input-div">
 				 <td>
 				 	<label>Name</label>	
 				 </td>
 				 <td>
 				    <input type="text" name="name" placeholder="name">	
 				 </td>
 				</div>
 			</tr>

 			<tr>
 				<div id="input-div">
 				 <td>
 				 	<label>Birthdate</label>	
 				 </td>
 				 <td>
 				    <input type="date" name="Birthdate" placeholder="Birthdate">	
 				 </td>
 				</div>
 			</tr>

 			<tr>
 				<div id="input-div">
 				 <td>
 				 	<label>Phone</label>	
 				 </td>
 				 <td>
 				    <input type="tel" name="phone" placeholder="phone">	
 				 </td>
 				</div>
 			</tr>

 			
 			<tr>
                <div id="input-div">
 				 <td>
                 	<label>Password</label>	
 				 </td>
 				 <td>
 				 	<input type="password" name="password" placeholder="password">		
 				 </td>
 				</div>
 			</tr>

 			<tr>
                <div id="input-div">
 				 <td>
                 	<label>Retry Password</label>	
 				 </td>
 				 <td>
 				 	<input type="password" name="conformpassword" placeholder="conform password">		
 				 </td>
 				</div>
 			</tr>

 			<tr>
 				<div id="input-div">
 				 <td>
 				 	<label>Sex</label>	
 				 </td>

                	<td>				 			
 				 			<input style="width: 50px;" type="radio" name="sextype" value="Male" checked=""><label>Male</label>
 				            <input style="width: 50px;" type="radio" name="sextype" value="Female">	<label>Female</label>
				 	</td>

 				</div>
 			</tr> 
            <tr>
            	<td>
            		<label>City</label>
            	</td>
            	<td>
            		<select>
 				<option value="Aden">Aden</option>
 				<option value="Sana'a">Sana'a</option>
 			    <option value="Lahj">Lahj</option>
 		      </select>
            	</td>
              
            </tr>
 			

 			<tr>
 				<td></td>
 				<td>
 				    <div id="input-div" style="text-align: center;">
        	          <input type="submit" name="" value="send" style="width: 50px;background-color:orange;border: none;border-radius: 50px">
                    </div>
 				</td>
 			</tr>
 		</table>
 	</div>
  </form>
</center>
<?php
print "hussie";
print <<<end
hussien
arif
end;
print "
hussienhu
j
d";

$four=2    +2
+2;
print $four;
?>
</body>
</html>