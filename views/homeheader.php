<html>
    <head>


        <meta charset="UTF-8">
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
        <!--<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>-->
        <!--===============================================================================================-->
        <!--<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">-->
        <!--===============================================================================================-->
        <!--<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">-->
        <!--===============================================================================================-->
        <!--	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        ===============================================================================================
                <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        ===============================================================================================
                <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">-->
        <!--===============================================================================================-->
        <!--<link rel="stylesheet" type="text/css" href="css/util.css">-->
        <link rel="stylesheet" type="text/css" href="css/main.css">

        <title>W3.CSS Template</title>
        <meta charset="UTF-8">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
        <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">-->
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
        <style>
            html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
            .w3-sidebar {
                z-index: 3;
                width: 250px;
                top: 43px;
                bottom: 0;
                height: inherit;
            }
            input{
                margin: 10px;
                text-align: center;
            }
            button{
                width: 100px;
                background: #36304a;
                color: white;
                border-radius: 6px;
            }
            /*#container{
                padding:    0 auto;
            }
            */#container{
                margin: 0 0 20px 100px;
            }
            #container input{
                margin-left: 0;
            }
            #container a{
                font-size: 50px;
                vertical-align:top;
            }
            #container input,#container button{
                margin-top:  35px;
            }
            /*ontmaim{
                width: 100%;
            }*/
            #contop{
                width: 200px;
            }
            tr input{
                margin-left: 0;
            }
            #listajax {
                /* position : cosh; */
                /* top: 90px; */
                position:absolute;
                top:96px;
                background: white;
                display:none;
                width: 195px;
                border: 1px solid black;
                border-top: none;
            }
            #listajax li{
                padding: 5px;                
            }
            #listajax li:hover{
                background-color: #f5f5f5;
            }
            #listajax li .calfood{
                position: absolute;
                right: 0;
                margin-right: 5px;
            }
            select{
                width: 150px;
            }
            #cont_top{
                display: flex;
            }
            #cont_sum_cal{
                margin-left: 25px;
            }
            #cont_sum_cal span{
                font-size: 1.4em;
                color: #36304a;
                border: 1px solid black;
                padding: 5px;
                border-radius: 14px;
            }
            #btnAddFood{
                display: block;
                margin:2px auto;
                width: 80%;
                background-color: #f5f5f5;
                color: black;
                border-radius: 2px;
            }
        </style>
    </head>
    <body>


        <div class="w3-top">
            <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
                <a href="#" class="w3-bar-item w3-button w3-theme-l1">Logo</a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Values</a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">News</a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Clients</a>
                <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Partners</a>
            </div>
        </div>
        <!-- Sidebar -->
        <nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
            <h4 class="w3-bar-item"><b>Menu</b></h4>
            <a class="w3-bar-item w3-button w3-hover-black" href="#">Link</a>
            <a class="w3-bar-item w3-button w3-hover-black" href="#">Link</a>
            <a class="w3-bar-item w3-button w3-hover-black" href="#">Link</a>
            <a class="w3-bar-item w3-button w3-hover-black" href="#">Link</a>
        </nav>
        <!-- Overlay effect when opening sidebar on small screens -->
        <!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
        <div id='contmaim' class="w3-main" style="margin-left:250px">
            <br>  <br>