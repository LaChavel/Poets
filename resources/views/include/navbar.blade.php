@section('navbar')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/styles/styles.css">
  <a class="navbar-brand" href="/">Log Out</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/Miguel-Angel">Miguel Ángel<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Claude-Monet">Claude Monet</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Pablo-Picasso">Pablo Picasso</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Diego-Velazquez">Diego Velázquez</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/show">Circle Poets</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" >
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="navbar" type="submit">Search</button>
    </form>
  </div>
</nav>

@show
