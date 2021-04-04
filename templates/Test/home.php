<div class="container">

    <div class="row">
        <div class="col-4">
            <h3 style="color: #fff;" class="bg-info text-capitalize p-1">Recent books</h3>
            <?php foreach ($booksList as $key => $book): ?>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <a href=<?= $this->Url->build(['controller'=>'test' , 'action'=>'view' , $key]); ?>><?= $book ?></a>
              </li>
            <?php endforeach ?>
        </div>

        <div class="col-8">
            <div class="row">
               <div class="list-group ">
               <?php foreach ($books as $key => $book):  ?>
                  <a href="#" class="list-group-item list-group-item-action flex-column mb-2">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1"><?= $book->title ?></h5>
                      <small><?= $book->auteur ?></small>
                    </div>
                    <p class="mb-1"><?= $this->Text->truncate(
                                          $book->description,
                                          100,
                                          [
                                              'ellipsis' => '...',
                                              'exact' => false
                                          ]
                                      );  ?></p>
                    <small><?= $book->date ?></small>
                  </a>
               <?php endforeach; ?>
               <ul class="pagination  justify-content-center">
               <?= $this->Paginator->prev("<<")?>
               <?= $this->Paginator->numbers()?>
               <?= $this->Paginator->next(">>")?>
               </ul>  
              </div>
                
            </div>
        </div>
    </div>

    </div>
    
