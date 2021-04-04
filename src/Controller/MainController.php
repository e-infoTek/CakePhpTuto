<?php

namespace App\Controller;

class MainController extends AppController {

    // public function beforeFilter(EventInterface $event){
    //     $this->viewBuilder()->setLayout('Layout');  
    // }

    public function home(){
        $this->LoadModel('books');
        $Books = $this->books->find('all');
        debug($Books);
        $BooksNm = $this->books->find('list',['keyField'=>'id' , 'valueField'=>'title']);
        debug($BooksNm);
        $this->set('booksName',$BooksNm);
        $this->set('bookList' , $this->paginate($Books,['limit'=>'1']));   
    //     $this->viewBuilder()->setLayout('Layout');  
    }

    public function about(){
    //     $this->viewBuilder()->setLayout('Layout');  
    }

    public function contact(){
            //     $this->viewBuilder()->setLayout('Layout');  
    }

    public function view($id){
        $this->LoadModel('books');
        $Book = $this->books->get($id);
        $this->set('book' , $Book);
    }
}