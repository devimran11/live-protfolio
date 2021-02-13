<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top"><img src="{{url('backend/images/logo/',$logo->logo)}}" alt="No Image"></a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        @foreach ($viewMenus as $viewMenu)
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#{{strtolower($viewMenu->menu)}}">{{$viewMenu->menu}}</a>
          </li>
        </ul>
        @endforeach
      </div>
    </div>
  </nav>