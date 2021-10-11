<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/includes/header.php';




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="<?php echo URLROOT . '/public/css/tutorprofileview.css' ?>">
</head>
<body>
    <!-- <header>

    </header> -->


    <div class="container">

    <div class="left">

                <div class="userbox">
                            <div class="img">
                                <img src="<?php echo URLROOT . '/public/img/tutorprofileview/user.png' ?>" id="userimg" alt="">
                            </div>
                            <center><span id="name">FirstName LastName</span>
                            <div class="star_rating">

                                

                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star unchecked"></span>
                                    <span class="fa fa-star unchecked"></span>

                            </div>
                            
                            <span><b> N/A </b> (n/a) </span>

                            <div class="details">
                                <div id="from" class="cityandmembership">
                                    <img src="<?php echo URLROOT . '/public/img/tutorprofileview/map.png' ?>" class="detailimg" id="from"alt="">
                                    <span>City Name</span>

                            </div>
                                <div id="membersince" class="cityandmembership">
                                    <img src="<?php echo URLROOT . '/public/img/tutorprofileview/usersmall.png' ?>" class="detailimg" id="usersince" alt="">
                                    <span>Month,Year</span>
                            </div>

                                <div id="availability" class="cityandmembership">
                                    <img src="<?php echo URLROOT . '/public/img/tutorprofileview/switch.png' ?>" class="detailimg" id="availability" alt="">
                                    <span>
                                        <input type="checkbox" id="switch"
                                        class="checkbox" />
                                        <label for="switch" class="toggle"></label>
                                    </span>
                            </div>
                            
                            </div>
                            </center>
                </div>

                <div class="socialmedia">
                    <span>Link Your Social Networks</span>
                    <div class="setofsocialmedia">
                        <div id="facebook"><img src="<?php echo URLROOT . '/public/img/tutorprofileview/fb.png' ?>" alt=""  class="iconsm"></div>
                        <div id="twitter" ><img src="<?php echo URLROOT . '/public/img/tutorprofileview/twitter.png' ?>" alt=""  class="iconsm"></div>
                        <div id="youtube" ><img src="<?php echo URLROOT . '/public/img/tutorprofileview/youtube.png' ?>" alt=""  class="iconsm"></div>
                        <div id="instagram" ><img src="<?php echo URLROOT . '/public/img/tutorprofileview/insta.png' ?>" alt=""  class="iconsm"></div>
                    </div>
                        <div class="setofsocialmediaplus">
                        <div ><img src="<?php echo URLROOT . '/public/img/tutorprofileview/add.png' ?>" alt=""  class="iconsmadd"></div>
                        <div ><img src="<?php echo URLROOT . '/public/img/tutorprofileview/add.png' ?>" alt=""  class="iconsmadd"></div>
                        <div ><img src="<?php echo URLROOT . '/public/img/tutorprofileview/add.png' ?>" alt=""  class="iconsmadd"></div>
                        <div ><img src="<?php echo URLROOT . '/public/img/tutorprofileview/add.png' ?>" alt=""  class="iconsmadd"></div>
                        
                    </div>

                </div>

    </div>


    <div class="right">

                <div class="activesessions">

                    <span>Active Sessions-0 </span>
                        <select name="" id="activesessionselect">
                        <option default>Active Sessions(0)</option>
                    </select>
                 

                </div>
                <div class="approval" id="content0">
                       <span><b>You need to pass the approval test before selling services on flexguru.</b></span> 
                 </div>

                <div class="content" id="content1">

                        <p id="firstheading"><b>FlexGuru helps you to improve</br></b> </p>

                        <div id="contentpara1">
        	            <div class="text">
                        <span>
                           <b> How to be succesfull in Flexguru in simple steps</b>
                        </span>
                        <p>The key to your success on Flexguru is the brand you build for yourself through
                        your Flexguru reputation. We gathered some tips and resources to help you 
                        become a leading tutor on Flexguru.</p>
                        </div>
                        <div class="study_img_div">
                                                  <img src="<?php echo URLROOT . '/public/img/tutorprofileview/study.svg' ?>" id="study_img" alt="">

                        </div>


                        </div>

                 </div>
                 <div class="content" id="content2">
                       <span><b>Take these steps to become a popular tutor on Flexguru</b></span> 
                 </div>

    </div>




    </div>

    </div>
    <!-- <footer>
         <?php
include APPROOT . '/views/includes/footer.php';


?> 
    </footer> -->
</body>
</html>