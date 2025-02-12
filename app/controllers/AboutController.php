
<?php
// app/controllers/AboutController.php

class AboutController
{
    public function index()
    {
        // Load the corresponding view
        require_once 'app/views/pages/about.php';
    }
}
