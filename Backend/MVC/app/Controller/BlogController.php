<?php

namespace app\Controller;

class BlogController
{
    public function indexAction() {
        return 'Blog';
    }

    public  function listAction() {
        return 'Post from blog';
    }
}