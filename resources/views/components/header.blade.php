<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
    <p class="h5 my-0 me-md-auto fw-normal">El blog del Iniciado</p>
    <nav class="my-2 my-md-0 me-md-3">
      <a class="p-2 text-dark" href="{{ route("home")}}">Home</a>
      <a class="p-2 text-dark" href="{{ route("post.index")}}">post</a>
      <a class="p-2 text-dark" href="{{ route('categories.index')}}">Categorias</a>
    </nav>

</header>


{{-- <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="{{ route("post.index")}}">Noticias</a>
      </div>

      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="{{ route("home")}}">El Blog del inciado</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
      </div>
    </div>
</header> --}}
