<!doctype html>
<html lang="en" data-bs-theme="auto">
  <!-- <head><script src="../assets/js/color-modes.js"></script> -->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Dashboard Template · Bootstrap v5.3</title>

    
    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/"> -->

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3"> -->



 
    
    <!-- Custom styles for this template -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet"> -->
    <!-- Custom styles for this template -->
    <!-- <link href="dashboard.css" rel="stylesheet"> -->

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  </head>
  <body>
     
     
     @include('layouts.includes.navbar') 
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    
    @yield('content')
      

   
    </main>
  </div>
</div>
<!-- <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="dashboard.js"></script></body> -->
</html>
