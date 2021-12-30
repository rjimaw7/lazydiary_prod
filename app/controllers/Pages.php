<?php
class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        if (isLoggedIn()) {
            redirect('posts');
        }

        $data = [
            'title' => 'Lazy Diary',
            'description' => 'Daily Journal for Procrastination'
        ];

        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us',
            'description' => 'Daily Journal for Procrastination'
        ];
        $this->view('pages/about', $data);
    }
}
