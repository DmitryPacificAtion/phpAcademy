<?php


namespace app\Model;

class BlogModel {
    public function getPosts() {
        return [
            [
                'title' => 'First post title ....',
                'text' => 'Lorem ipsum',
            ],
            [
                'title' => 'Second post title ....',
                'text' => 'Lorem ipsum 2',
            ],
        ];
    }
}