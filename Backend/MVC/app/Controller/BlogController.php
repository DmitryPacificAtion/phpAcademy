<?php

namespace app\Controller;

use app\Model\BlogModel;

class BlogController extends AbstractController
{
    public function indexAction() {
        return 'Blog';
    }

    public function listAction() {
        $blogModel = new BlogModel();
        $posts = $blogModel->getPosts();
        $this->renderView('blogPosts', ['posts' => $posts]);
    }
}