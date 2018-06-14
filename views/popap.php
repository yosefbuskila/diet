<!DOCTYPE html>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 5; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 50%;
    min-width: 400px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19); 
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #36304a;
    color: white;
}

.modal-body {
    padding: 20px 25px;
    display: flex;
    flex-wrap: wrap;
}

.modal-footer {
    padding: 2px 16px;
    background-color: #36304a;
    color: white;
    height: 30px;
}
fieldset{
    margin:0  30px;
    padding: 15px 30px;
}
label{
    display: block;
    margin: 0 auto;
    width: 200px;
}
#addBtn{
    margin:  20px;
}
</style>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Add new food</h2>
    </div>
    <div class="modal-body">
        <span id="inpGrupFirst">
        <label>Name<input type="text" id="nameAddFood"></label>
        <label>Calories (on 100 gram)<input type="number" id="Calories"></label>
        </span>
        <fieldset>
            <legend>How many grams there are in:</legend>
        <label>Cup<input type="number" id="cup"></label>
        <label>Tablespoon<input type="number" id="tablespoon"></label>
        <label>Teaspoon<input type="number" id="teaspoon"></label>
        </fieldset>
        <span><button type="button" value="ADD" name="add" id="addBtn" onclick="ajaxAddNewFood()" >ADD</button></span>
        
    
    </div>
    <div class="modal-footer">
      
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

