<?php

namespace App\Controller;

use App\Controller\AppController;

class HomeController extends AppController
{
    public function initialize(): void
    {
        parent::initialize(); // AppController construct init
    }

    public function sayHello()
    {
        $this->autoRender = false; // stop Auto template rendering
        echo "<h1>This is the first Action</h1>";
    }

    public function say()
    {
        $this->autoRender = false;
        echo "<h1>This is the second action</h1>";
    }
}
