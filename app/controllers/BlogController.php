
<?php
// app/controllers/Blog.php

class BlogController
{
    public function index()
    {
        // Load the corresponding view
        require_once 'app/views/pages/blog.php';
    }
    public function post01()
    {
        // Load the corresponding view
        require_once 'app/views/pages/posts/post-01.php';
    }
    public function post02()
    {
        // Load the corresponding view
        require_once 'app/views/pages/posts/post-02.php';
    }
    public function post03()
    {
        // Load the corresponding view
        require_once 'app/views/pages/posts/post-03.php';
    }
}
