var sumcal=0;
var foodsjson;
var foodchoice;
var aaa;
$(start());
function start(){
    getdata()
}
function getdata() {
    $.getJSON(`?controller=getfoods&date=${inpdate.value}`, function (result) {
        paint_table(result);
    });
}
function paint_table(result) {
    sumcal=0;
    result.forEach(function (element) {
        $('#tb').append(`<tr class=rowdata>
    <td class="column1">${element.timeeat}</td>
    <td class="column2">${element.name}</td>
    <td class="column3">${element.footage}</td>
    <td class="column4">${element.amound}</td>
    <td class="column5">${element.Calories}</td>
    <td class="column6">${element.sum_cal}</td>
    <td class="column6"></td>
</tr>`);
sumcal+=parseInt( element.sum_cal);
    });
    sum_cal_span.innerText=sumcal;
    remained_cal_span.innerText=cal_day-sumcal;
}
function ahange_day(add){
var newdate = new Date(inpdate.valueAsDate);
newdate.setDate(add ? newdate.getDate() + 1:newdate.getDate() - 1);
inpdate.valueAsDate = newdate;
load_list();
}
function load_list(){
    $('.rowdata').remove()
    getdata()
}
function getFoodsNames(){
    $.getJSON(`?controller=getFoodsList&foodSerch=${inpfood.value}`, function (result) {
        paint_foods_list(result);
        foodsjson=result;
    });
}
function paint_foods_list(result){
    $("#listajax li").remove();
//    if(result.length==0){
//        
//        $("#listajax li").click(function(){
//            modal.style.display = "block";
//        });
//    }else{
    result.forEach(function (element) {
        $('#listajax').append(`<li><span>${element.name}</span><span class="calfood">${element.Calories}</span></li>`);
    });
    $('#listajax').append(`<li id="libtnadd"><button onclick="addFoodNew" id="btnAddFood">Add food new</button></li>`);
    $("#listajax li").not("#libtnadd").click(choiceFood);
    $("#libtnadd").click(addFoodNew)
    listajax.style.display='inline';
}
function choiceFood(event){        
    inpfood.value=event.currentTarget.children[0].innerText
    listajax.style.display='none';
    var notSet=true;
        foodsjson.forEach(function(element){
            if(element.name==inpfood.value){
                paintMeasure(element);
                notSet=false;
            }
        }) 
        if(notSet)  {
            createFood();
        }
        amountInp.value=0;
        sumCalVal.innerText=0;
}
function canceleList(event){
        setTimeout(function(){
            listajax.style.display='none';
        },200)
        
        }
function paintMeasure(element){
    console.log(element)
    var stroptions=`<option value="gram">gram</option>`
    if(element.cup !=null&&element.cup!=0)
    stroptions+=`<option value="cup">cup</option>`
    if(element.tablespoon !=null&&element.tablespoon!=0)
    stroptions+=`<option value="tablespoon">tablespoon</option>`
    if(element.teaspoon !=null&&element.teaspoon!=0)
    stroptions+=`<option value="teaspoon">teaspoon</option>`
    $("#selectID option").remove()
    $("#selectID").append(stroptions);
    cal100gram.innerText=element.Calories
    foodchoice=element;
}
function createFood(){
    console.log('food not find!!')
}
function calcCal(){
        var sumCal=foodchoice.Calories*amountInp.value/100;
    if(foodchoice[selectID.value])
    sumCal*=foodchoice[selectID.value]
    sumCalVal.innerText=sumCal;
}
function addEating(){
    var dual=foodchoice[selectID.value]?foodchoice[selectID.value]:1
    var urlstr=`?controller=insertEating&footage=${selectID.value}&foodid=${foodchoice.id}&timeeat=${inpdate.value} ${inptime.value}&grams=${amountInp.value*dual}`;
    console.log(urlstr)
    $.get(urlstr , function( data ) {
  console.log( data );
});
load_list();
}
function addFoodNew(){
    modal.style.display = "block";    
    nameAddFood.value=inpfood.value;
}
function ajaxAddNewFood(){
    var urlstr=`?controller=addNewFood&name=${nameAddFood.value}&Calories=${Calories.value}&cup=${cup.value}&tablespoon=${tablespoon.value}&teaspoon=${teaspoon.value}`;
    $.get(urlstr , function( data ) {
  console.log( data );
});
}