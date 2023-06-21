<?php

class Controller_Profile_All_Reviews extends Controller
{

    function action_index() 
    {
        $this->view->generate('profile_all_reviews_view.php', 'template_view.php');
    }
}
