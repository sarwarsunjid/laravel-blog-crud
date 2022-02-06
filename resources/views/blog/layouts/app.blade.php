
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Simple Blog CRUD | @yield('title')</title>
    <meta name="title" content="@yield('title')">
    <meta name="description" content="@yield('description')">
	 <meta name="keywords" content="@yield('keywords')">
    @include('blog.partials.styles')
  </head>
  <body>
    <div class="container-scroller">
      @include('blog.partials.navbar')
      <div class="container-fluid page-body-wrapper">
        @include('blog.partials.sidebar')
        <div class="main-panel">
              @yield('content')
          <!-- content-wrapper ends -->
          @include('blog.partials.footer')
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('blog.partials.scripts')
  </body>
</html>