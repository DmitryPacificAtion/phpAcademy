<?php

namespace app\Controller;

use app\Model\BlogModel;

class BlogController
{
    public function indexAction() {
        return 'Blog';
    }

    public  function listAction() {
        $blogModel = new BlogModel();
        $posts = $blogModel->getPosts();

        require __DIR__.'/../View/blogPosts.html.php';

//        return 'Blog list';
    }
}