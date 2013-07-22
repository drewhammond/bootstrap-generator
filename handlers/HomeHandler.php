<?php
class HomeHandler extends AbstractHandler
{
    public function get()
    {
        $this->render('pages/home', array(
            'title_for_layout' => 'Home'
        ));
    }
}