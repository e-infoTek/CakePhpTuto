<div class="container">
    <div class="row">
        <div class="col-4">
            <h3 style="color: #fff;" class="bg-info text-capitalize p-1">Recent books</h3>
            <ul class="list-group list-group-flush">
            <?php foreach ($booksName as $key => $value) :?>
              <li class="list-group-item">
                <a href=<?= $this->Url->build(['controller'=>'main' , 'action'=>'view' , $key]); ?>><?= $value?> </a>
              </li>
              <?php endforeach?>
        </div>

        <div class="col-8">
            <div class="row">
               <div class="list-group ">
               <?php foreach ($bookList as $key => $book) : ?>
                  <a href=<?= $this->Url->build(['controller'=>'main' , 'action'=>'view' , $book->id]); ?> class="list-group-item list-group-item-action flex-column mb-2">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1"><?= $book->title ?></h5>
                      <small><?= $book->auteur?></small>
                    </div>
                    <p class="mb-1"><?= $this->Text->truncate(
                                  $book->description,
                                  100,
                                  [
                                      'ellipsis' => '...',
                                      'exact' => false
                                  ]
                              );  ?></p>
                   <small><?= $book->date?></small>
                  </a>
               <?php endforeach ?>
              </div>
            </div>
            <ul class="pagination">
            <?= $this->Paginator->prev("<<")?>
               <?= $this->Paginator->numbers()?>
               <?= $this->Paginator->next(">>")?>
            </ul>
        </div>
    </div>

    </div>
    
