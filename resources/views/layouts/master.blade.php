
@include('layouts.head')

<body>
  <header>
    @include('layouts.nav')

  <div class="blog-header">
    <div class="container">
      <h1 class="blog-title">The Bootstrap Blog</h1>
      <p class="lead blog-description">An example blog template built with Bootstrap.</p>
    </div>
  </div>
  </header>

  <main role="main" class="container">
    <div class="row">
      <div class="col-sm-8 blog-main">

        @yield('content')
        
      </div><!-- /.blog-main -->
      
      @include('layouts.aside')

    </div><!-- /.row -->
  </main><!-- /.container -->

@include('layouts.footer')
