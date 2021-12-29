<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/student/includes/header.php';
?>


<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/studentprofileview.css' ?>">
<style type="text/css">
    
    .radio-toolbar {
  margin: 10px;
}

.radio-toolbar input[type="radio"] {
  opacity: 0;
  position: fixed;
  width: 0;
}

.radio-toolbar label {
    display: inline-block;
    background-color: #ddd;
    padding: 10px 20px;
    font-family: sans-serif, Arial;
    font-size: 16px;
    border: 2px solid #444;
    border-radius: 4px;
}

.radio-toolbar label:hover {
  background-color: #dfd;
}

.radio-toolbar input[type="radio"]:focus + label {
    border: 2px dashed #444;
}

.radio-toolbar input[type="radio"]:checked + label {
    background-color: #bfb;
    border-color: #4c4;
}





</style>
<div class="container">



Select the subject area that you need help on ?
<select></select>

Which tutors are you looking for ?
<select></select>


Unit 
<input type="text" name="unit">

Describe the subject area that you need help on
<textarea></textarea>

Once you placed your request, when would you like the session delivered?
 <div class="radio-toolbar">
    <input type="radio" id="radioApple" name="radioFruit" value="apple" checked>
    <label for="radioApple">24 Hours</label>

    <input type="radio" id="radioBanana" name="radioFruit" value="banana">
    <label for="radioBanana">3 Days</label>

    <input type="radio" id="radioOrange" name="radioFruit" value="orange">
    <label for="radioOrange">7 Days</label> 

    <input type="radio" id="radioOrange" name="radioFruit" value="orange">
    <label for="radioOrange">Other</label> 


</div>
<p>&nbsp;</p>


What is your budget for the service ?
<input type="text" name="">



<button>Submit Request</button>



Your request is successfully submitted.


</div>


<!-- <footer>
         <?php
            include APPROOT . '/views/includes/footer.php';
            ?> 
    </footer> -->