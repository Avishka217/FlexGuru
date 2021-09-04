<?php

/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * @package flexguru
 * AUTHORS: Kesara Karannagoda, Avishka Hettiarachchi, Kavindhu Galagedara, Razeen Nizar
 * CO-AUTHORS: 
 * LAST UPDATE BY: Kesara Karannagoda
 * LAST UPDATE DATA : Sep, 01, 2021
 * FILE TYPE: View
 * PARENT FOLDER: components
 */
?>
<div class="fg-login bold gray alert-white hidden">
    <span style="color:#343A40; font-size:18px; margin: 23px 0 48px 0;">Login in to Flexguru</span>
    <span class="display-3 darkpurple bold"><?php echo $main["site-name"] ?></span>
    <span style="font-size:18px; margin-top:-9px;">Smart Learning</span>
    <form action="">
        <div class="input-field"> <input type="email" name="email" id="email" placeholder="Email">
        </div>
        <span class="form-errors"></span>
        <div class="input-field"> <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <span class="form-errors"></span>
        <div class="input-field forgot-password">
            <div class="remember-me"><input class="pointer" type="checkbox" name="" id=""> Remember Me
            </div>
            <span class="pointer darkpurple">Forgot Password?</span>
        </div>
        <button class="white alert-darkpurple bold w-100" style="font-size: 14px;">CONTINUE</button>
        <hr class="gray w-100" style="margin: 20px 0; height:1px">
        <div class="join-now"><span>Not a member yet?</span><span class="darkpurple pointer">Join now</span></div>
    </form>
</div>