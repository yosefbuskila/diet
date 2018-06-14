<div>
<div id="cont_top">
            <div id="container">
                <h1>daily report</h1>
                <!--<span class="w3-bar" id="contop">-->
                <a class="w3-button w3-hover-black" onclick="ahange_day()">«</a>
                <a class="w3-button w3-hover-black" onclick="ahange_day(true)">»</a>
                <!--</span>-->
                <input id="inpdate" name="date" type="date" value="">
                <button onclick="load_list()">load</button>
            </div>
                <div id="cont_sum_cal">
                <h3>sum calories for this day: <span id=sum_cal_span>1547</span></h1>
                <h3>you remained: <span id=remained_cal_span>184 calories</span></h1>
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
                        <th class="column97"></th>
                    </tr>
                </thead>
                <tbody id="tb">
                    <tr>
                        <td class="column1"><input id="inptime" type="time"></td>
                <div id foods>
                    <td class="column2" id="tdfood"><input type="text" id="inpfood" onkeyup="getFoodsNames()" onclick="getFoodsNames()" onfocusout="canceleList(event)">
                        <div id="listfoods">
                            <ul id="listajax">
                                <li>rice<span>54</span></li>
                                <li>banana<span>42</span></li>
                                <li>tomaito<span>123</span></li>
                                <li>egg<span>85</span></li>
                                <li>watermelon<span>60</span></li>
                                <li>pice<span>50</span></li>
                            </ul>
                        </div>
                    </td>
                </div>
                <td class="column3"><select id="selectID" onChange="calcCal()">
                        <option value="grams">grams</option>
                        <option value="cup">cup</option>
                        <option value="tablespoon">tablespoon</option>
                        <option value="teaspoon">teaspoon</option>
                    </select></td>
                <td class="column4" ><input type="number" id="amountInp" onkeyup="calcCal()"></td>
                <td class="column5" id="cal100gram">0</td>
                <td class="column6" id="sumCalVal" >0</td>
                <td class="column6"><button onclick="addEating()">ADD</button></td>
                </tr>
                </tbody>
            </table>
    <?php
    require_once 'popap.php';
    ?>
    </div>