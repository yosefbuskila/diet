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
                border-radius: 10px;
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
                position: absolute;
                top: -10px;
                background: white;
                z-index: 1;
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
            <!--        <div id="con">-->
            <div id="cont_top">
            <div id="container">
                <h1>daily report</h1>
                <!--<span class="w3-bar" id="contop">-->
                <a class="w3-button w3-hover-black" href="#">«</a>
                <a class="w3-button w3-hover-black" href="#">»</a>
                <!--</span>-->
                <input id="inpdate" name="date" type="date" value="">
                <button>load</button>
            </div>
                <div id="cont_sum_cal">
                <h3>sum calories for this day: <span>1547</span></h1>
                <h3>you remained: <span>184 calories</span></h1>
            </div>
                </div>
            <table>
                <thead>
                    <tr class="table100-head">
                        <th class="column91">time</th>
                        <th class="column92">food</th>
                        <th class="column93">Measure</th>
                        <th class="column94">Amount</th>
                        <th class="column95">calories for 100 grams</th>
                        <th class="column96">sum calories</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="column1"><input id="inptime" type="time"></td>
                <div id foods>
                    <td class="column2"><input type="text">
                        <div id="listfoods">
                            <ul id="listajax">
                                <li>rice</li>
                                <li>banana</li>
                                <li>tomaito</li>
                                <li>egg</li>
                                <li>watermelon</li>
                                <li>pice</li>
                            </ul>
                        </div>
                    </td>
                </div>
                <td class="column3"><select>
                        <option value="grams">grams</option>
                        <option value="cup">cup</option>
                        <option value="tablespoon">tablespoon</option>
                        <option value="teaspoon">teaspoon</option>
                    </select></td>
                <td class="column4"><input type="number"></td>
                <td class="column5">0</td>
                <td class="column6">0</td>
                </tr>
                <tr>
                    <td class="column1">12:53</td>
                    <td class="column2">rice</td>
                    <td class="column3">gram</td>
                    <td class="column4">150</td>
                    <td class="column5">112</td>
                    <td class="column6">180</td>
                </tr>
                <tr>
                    <td class="column1">15:53</td>
                    <td class="column2">rice</td>
                    <td class="column3">gram</td>
                    <td class="column4">150</td>
                    <td class="column5">112</td>
                    <td class="column6">180</td>
                </tr>
                <tr>
                    <td class="column1">12:42</td>
                    <td class="column2">rice</td>
                    <td class="column3">gram</td>
                    <td class="column4">150</td>
                    <td class="column5">112</td>
                    <td class="column6">180</td>
                </tr>
                <tr>
                    <td class="column1">12:53</td>
                    <td class="column2">bamba</td>
                    <td class="column3">gram</td>
                    <td class="column4">150</td>
                    <td class="column5">112</td>
                    <td class="column6">180</td>
                </tr>
                <tr>
                    <td class="column1">12:53</td>
                    <td class="column2">rice</td>
                    <td class="column3">cup</td>
                    <td class="column4">150</td>
                    <td class="column5">112</td>
                    <td class="column6">180</td>
                </tr>
                <tr>
                    <td class="column1">12:53</td>
                    <td class="column2">rice</td>
                    <td class="column3">gram</td>
                    <td class="column4">5</td>
                    <td class="column5">112</td>
                    <td class="column6">180</td>
                </tr>
                <tr>
                    <td class="column1">12:53</td>
                    <td class="column2">rice</td>
                    <td class="column3">gram</td>
                    <td class="column4">150</td>
                    <td class="column5">540</td>
                    <td class="column6">180</td>
                </tr>
                <tr>
                    <td class="column1">12:53</td>
                    <td class="column2">rice</td>
                    <td class="column3">gram</td>
                    <td class="column4">150</td>
                    <td class="column5">540</td>
                    <td class="column6">254</td>
                </tr>


                </tbody>
            </table>
            <script>
                inpdate.valueAsDate = new Date();
                var d = new Date(),
                        h = d.getHours(),
                        m = d.getMinutes();
                if (h < 10)
                    h = '0' + h;
                if (m < 10)
                    m = '0' + m;
                inptime.value = h + ':' + m;

                function createfoodslist() {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            responfoods = this.responseText;
                            obj = JSON.parse(responfoods);

                        }
                    };
                    xhttp.open("GET", "http://localhost/diet/getfoods.php", true);
                    xhttp.send();
                }
                function createlistview(objlstfood) {

                }
            </script>

            <!--===============================================================================================-->	
            <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
            <!--===============================================================================================-->
            <script src="vendor/bootstrap/js/popper.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
            <!--===============================================================================================-->
            <script src="vendor/select2/select2.min.js"></script>
            <!--===============================================================================================-->
            <script src="js/main.js"></script>

            <div class="w3-center w3-padding-32">
                <div class="w3-bar">
                    <a class="w3-button w3-hover-black" href="#">«</a>
                    <a class="w3-button w3-hover-black" href="#">»</a>
                </div>
            </div>
            <footer id="myFooter">
                <div class="w3-container w3-theme-l2 w3-padding-32">
                    <h4>Footer</h4>
                </div>

                <div class="w3-container w3-theme-l1">
                    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
                </div>
            </footer>
            <!-- END MAIN -->
        </div>
    </body>
</html>

