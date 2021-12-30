<?php

// Base Controller
// Loads Models and views

class Controller
{
    // Load Model
    public function model($model)
    {
        // Require model file
        require_once '../app/models/' . $model . '.php';

        // Instantiate model
        return new $model();
    }

    // Load views
    public function view($view, $data = [])
    {
        // Check for view file
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            // View doesn't exist'
            die('View file does not exist');
        }
    }
}
