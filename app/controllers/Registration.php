<?php

/** 
 * PROJECT NAME : FLEXGURU
 * PROJECT DESCRIPTION: Flexguru is a tutor freelancing platform where students can find the best tutors to fullfill their requirements in a much more flexible manner and provide a platform for enthusiastic tutors to distribute knowledge in whatever the area  they are good at. 
 * @package flexguru
 * AUTHORS: Kesara Karannagoda, Avishka Hettiarachchi, Kavindhu Galagedara, Razeen Nizar
 * CO-AUTHORS: 
 * LAST UPDATE BY: Kesara Karannagoda
 * LAST UPDATE DATA : Sep, 01, 2021
 * FILE TYPE: Controller File
 * 
 */
class Registration extends Controller
{
    public function __construct()
    {
    }

    public function roles()
    {
        $this->view('registration/roles');
    }

    public function tutor()
    {
        $this->view('registration/tutor');
    }
    public function student()
    {
        $this->view('registration/student');
    }
    public function affiliate()
    {
        $this->view('registration/affiliate-marketer');
    }
}
