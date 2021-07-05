<!DOCTYPE html>
<html>
<head>
	<title>Kown Lecture2</title>

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
		<h1 style="text-align: center">Badhaded instatute Website</h1>
        <h2 style="text-align: center">Hello Everyone</h2>
      <div style="text-align: center">
    	<button style="background-color:orange;border: none">
          <a  style="padding: 20px;" href="http://www.localhost/kown2/index.php">Home</a>		
	    </button>
	    <button style="background-color:white;border: none">
          <a  style="padding: 20px;" href="http://www.localhost/kown2/register.php">Register</a>	
	    </button>
	    <button style="background-color:green;border: none">
          <a   style="padding: 20px;" href="http://www.localhost/kown2/contuct.php">contact Us</a>		
	    </button>	
      </div>

  <form >
 	<div style="padding-top: 50px">
 		<table>
 			<tr>
 				<div id="input-div">
 				 <td>
 		 	      <input type="text" name="username" placeholder="username">
 				 </td>
 				 <td>
 				  <label>Username</label>		
 				 </td>
 				</div>
 			</tr>

 			<tr>
                <div id="input-div">
 				 <td>
                 	<input type="password" name="password" placeholder="password">
 				 </td>
 				 <td>
 	                <label>Password</label>			
 				 </td>
 				</div>
 			</tr>

 			<tr>
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
</body>
</html>