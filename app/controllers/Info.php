
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

class Info extends Controller
{
    public function __construct()
    {
        session_start();
        if (isset($_SESSION['type'])) {
            switch ($_SESSION['type']) {
                case 'student':
                    header('location:' . URLROOT . '/student');
                    break;
                case 'tutor';
                    header('location' . URLROOT . '/student');
                    break;
                case 'affiliate':
                    header('location' . URLROOT . '/affiliatemarketer');
                    break;
            }
        }
    }

    public function student()
    {
        $this->view('pages/become-a-student');
    }
}
