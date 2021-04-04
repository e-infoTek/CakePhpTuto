<nav class="navbar navbar-expand-lg navbar-light ">

<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav mx-auto">

    <li class="nav-item active">
      <a class="nav-link" href=<?= $this->Url->build(['controller'=>'test' , 'action'=>'home']); ?>>Home</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href=<?= $this->Url->build(['controller'=>'test' , 'action'=>'about']); ?>>About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href=<?= $this->Url->build(['controller'=>'test' , 'action'=>'contact']); ?>>Contact</a>
    </li>
  </ul>
</div>

</nav>