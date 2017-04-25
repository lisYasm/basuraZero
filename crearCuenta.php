<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    
    <link rel="shortcut icon" href="img/logo2.png">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <title>CREAR CUENTA NUEVA</title>
    <style>
    	body{
    		background-color: #75A633;
    	}
        h5{
            font-family: 'Orbitron', sans-serif;
            font-size: 20px;
        }
        form{
            width: 25%;
            
            margin: 20px;
            padding: 20px;
        }
        label{
            
        }
        input{
            margin-bottom: 20px;
            background-color: #FFFFFF;
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid yellow;
        }

        input:focus{
            border: 1px solid #4aa52d;
        }

        input[type="submit"]{
            margin-bottom: 0px;
            background: #0e5223;
            color:#fff;
            border: none;
        }
        input[type="submit"]:hover{
            background: #57bf77;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h5>CREA TU CUENTA </h5>
    <input type="text" id="nickname" placeholder="Nickname" class="input">
    <input type="text" id="correo" placeholder="ejemplo@gmail.com" class="input">
    <input type="password" id="password" placeholder="Password" class="input">
    <input type="submit" value="REGISTRARSE" class="input"> 
    
    </body>
</html>
