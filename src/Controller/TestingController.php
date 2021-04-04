<?php

namespace App\Controller;

class TestingController extends AppController {

    public function home(){
        $this->viewBuilder()->setLayout('Layout');
    }

}