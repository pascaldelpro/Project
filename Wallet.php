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

.top-main-div{
    width: 100%;
    height: auto;
}

.top-sub-div{
    width: 20%;
    margin-right: 1%;
    margin-left: 1%;
    margin-top: 1%;
    height: auto;
    padding-top: 15px;
    padding-bottom: 15px;
    background-color: orange;
    border-radius: 10px;
    border: 2px solid red;
    float: left;
    text-align: left;
    padding-left: 10px;
    font-family: 'Segoe UI';
}

.body-div{
    width: 64%;
    height: 460px;
    background-color: orange;
    float: left;
    border-radius: 10px;
    border: 2px solid red;
    margin-left: 1%;
    margin-top: 1%;
}

input{
    /* border-radius: 3px;
    border: none; */
    width: 300px;
    height: 30px;
    border-radius: 12px;
    border: none;
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
	    		        <a href="#" class="underline" style="background-color: orange; border-radius: 5px;" >Wallet</a>
		            </div>
		            <div class="subdiv">
			            <div class="triangle-down"></div>
    		        </div>
	    	        <div class="subdiv-right">
		    	        <a href="login.php" class="underline" style="float: none;" >Signin/Login</a>
    		        </div>
	            </div>
            </td>
        </tr>
        <tr>
            <td>
                <h5 style="font-family: 'Segoe UI'; margin-top: 2%; margin-left: 1%;">Wallet over view</h5>
                <!-- mainDiv -->
                <div class="top-main-div">

                    <div class="top-sub-div">
                        <p style="font-size: 30px;">Balance</p>
                        <p style="font-size: 30px;">3600$</p>
                    </div>

                    <div class="top-sub-div">
                        <p style="font-size: 30px;">Last Transaction</p>
                        <p style="font-size: 30px;">-100$</p>
                    </div>

                    <div class="top-sub-div">
                        <p style="font-size: 30px;">Last Transaction</p>
                        <p style="font-size: 30px;">-100$</p>
                    </div>

                    
                </div>
                <div class="top-main-div">
                    <div class="body-div">
                    </div>
                </div>
                <div class="top-sub-div">
                    <p style="font-size: 30px;">Gift</p>
                    <form action="">
                        <p style="font-size: 20px;">Receiver</p>
                        <input type="text">
                        <p style="font-size: 20px;">Amount</p>
                        <input type="text">
                        <input type="submit" value="Send">
                    </form>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>