<?php

class Utility
{
    public $link;
    public $title;
    public $icon; 


    

    public function Utylity()
    {
        return view(
            'layouts.heading',
            [
                'link' => $this->link,
                'title' => $this->title,
                'icon' => $this->icon
            ]
        );
    }
}
