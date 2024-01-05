<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <style>
        body {
            background-color: #023047;
            max-height: auto;
        }
        .float {
            display:block;
            position: absolute;
            right: 0px;
            border-color:#8ECAE6;
            background-color: #8ECAE6;
            border-radius: 20px 0px 0px 20px;
            padding: 200px 250px;
            padding-top:100px;
            top: 80px; 
            align-content:center;
        }

        .username{
            margin:20px;
        }

        h1 {
            padding-left: 45px;
            padding-bottom: 50px;
            color: #023047;
            font-family: Helvetica;
            margin:auto;
        }

        .train{
            position: absolute;
            width: 525px;
            height: 400px;
            top: 150px;
            left: 61px;
            padding-left:150px;
            object-fit: cover;
        }

        .text {
            display:flex;
            font-family: Helvetica;
            color: #FEB705;
            padding-top: 450px;
            padding-left: 290px;
        }
        .text2 {
            font-family: Helvetica;
            display:flex;
            color: #FEB705;
            padding-left: 330px;
            padding-bottom:320px;
            
        }
        
        .username{
            display:block;
            position:absolute;
            margin-left:-40px;
            border: 0px;
            margin-top:-10px;
            margin-bottom:5px;
            border-radius: 10px;
            height:40px;
            width:250px;
        }

        .password{
            display:block;
            position:absolute;
            margin-left:-40px;
            border: 0px;
            margin-top:10px;
            margin-bottom:5px;
            border-radius: 10px;
            height:40px;
            width:250px;
        }

        .button{
            font-family:Helvetica;
            display:block;
            position:absolute;
            right:230px;
            margin-top:40px;
            background-color:#023047;
            color:white;
            padding:10px;
            padding-left:40px;
            padding-right:40px;
            border-radius:10px;
        }

        .button:hover{
            cursor:pointer;
            background-color:#68aecb;
        }
    </style>
</head>
<body>
    <div class=train>
        <img src="Train.png">
    </div>
        <p class=text>Time to go less - Paperless and Effortless.</p>
        <p class="text2">Train ticket on the go. Book now!</p>
    <div class="float">
        <h1>Login</h1>
        <form action="login_process.php" method="post">
                <input placeholder="Email/Phone Number" type="text" name="username" class="username" required><br><br>
                <input placeholder="Password" type="password" name="password" class="password" required><br><br>
            <button class="button" type="submit"><b>Login</button>
        </form>
    </div>
    
</body>
</html>