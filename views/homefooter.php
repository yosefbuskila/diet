<script>
    inpdate.valueAsDate = new Date();            
//                var newdate = new Date();
//                newdate.setDate(newdate.getDate() + 3);
//                inpdate.valueAsDate = newdate;
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
            
            <script src="scr/jquery-3.3.1.js"></script>
            <script src="scr/script.js"></script>
            <?php
            require_once './lib/cal_in_day.php';
            new cal_in_day();
            ?>

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

