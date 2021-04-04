<?php

namespace App\Controller;
use Cake\Event\EventInterface;

class TestController extends AppController {

    public function beforefilter(EventInterface $event){
        $this->viewBuilder()->setLayout('MyLayout');  
    }

    public function home(){
        $this->loadModel('Books');
        // $Books = $this->Books->find('all', [
        //     'limit' => 2,
        //     'order' => 'books.id DESC'
        // ]);
        $Books = $this->Books->find('all');
        $BooksList = $this->Books->find('list' ,['keyField'=>'id' , 'valueField'=>'title'])->limit('2');
       // $this->set('books' , $Books);
        $this->set('books' , $this->paginate($Books,['limit'=>'1']));
        $this->set('booksList' , $BooksList);

    }

    public function about(){

    }
    public function contact(){
        
    }

    public function view($id){
        $this->loadModel('Books');
        $Book = $this->Books->get($id);
        $this->set('book',$Book);
    }
}