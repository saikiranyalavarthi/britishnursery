
<?php
// app/controllers/GalleryController.php

class GalleryController
{
    public function index()
    {
        // Load the corresponding view
        require_once 'app/views/pages/gallery.php';
    }
}
