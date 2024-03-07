<!DOCTYPE html>
<html lang="en">
<head>
<style>
        *, *::after, *::before{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    width: 100%;
    background-color: #0F0F29;
    color: white;
    display: flex;
    font-size: xx-large;
    align-items: center;
    justify-content: center;
}

.underline{
    display: inline-block;
    position: relative;
    text-decoration: none;
    color: white;
    font-family: 'Segoe UI';
    margin-right: 30px;
    display: flex; 
    justify-content: center;
    align-items: center;
    padding-left: 5px;
    padding-right: 5px;
}

.underline:hover{
    background-color: orange;
    border-radius: 5px;
}

.main-top-div{
    width: 100%;
    height: 75px;
    background-color: black;
}

.subdiv{
    width: 12%;
    float: left;
    height: 20px;
}

.triangle-down {
	width: 100%;
	height: 0;
	border-left: 25px solid transparent;
	border-right: 25px solid transparent;
	border-top: 90px solid red;
}

.right-button{
    margin-top: 0;
    float: right;
    background-color: darkorange;
    border: none;
    width: auto;
    height: auto;
    margin-right: 50px;
}

.subdiv-left{
    width: 44%;
    height: 100%;
    float: left;
    display: flex; 
    justify-content: center;
    align-items: center;
}

.subdiv-right{
    width: 44%;
    height: 100%;
    /* float: left; */
    display: flex; 
    justify-content: right;
    align-items: center;
}

.InputText{
    width: 300px;
    height: 30px;
    border-radius: 12px;
    padding-left: 7px;
    padding-right: 7px;
    margin-left: 30px;
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table  style=" width: 100%;">
        <tr>
            <td>
                <div class="main-top-div">
        		    <div class="subdiv-left">
		    	        <a href="index.php" class="underline" >Home</a>
			            <a href="Games.php" class="underline" >Games</a>
    			        <a href="Account.php" class="underline" >Acount</a>
	    		        <a href="Wallet.php" class="underline" >Wallet</a>
		            </div>
		            <div class="subdiv">
			            <div class="triangle-down"></div>
    		        </div>
	    	        <div class="subdiv-right">
		    	        <a href="#" class="underline" style="background-color: orange; border-radius: 5px;" class="underline" >Signin/Login</a>
    		        </div>
	            </div>
            </td>
        </tr>
        <tr>
            <td>
            <form action="actionLogin.php" method="post" style="width: 49%;">
                <h4 style="float: left;">username</h4><input type="text" name="username" class="InputText">
                <br>
                <h4 style="float: left;">password</h4><input type="password" name="password"  class="InputText">
                <br>
                <a href="Signin.php" style="text-decoration: none; color: orange; font-size: large;">Register</a>
                <input type="submit">
            </form>
            </td>
        </tr>
    </table>
</body>
</html>