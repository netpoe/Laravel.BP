<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Revisions.CMS</title>
    <meta name="description" content="">
    <meta name="keywords" content=""> 
    <meta name="author" content="@MadeByGus">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <!-- FB: Open Graph -->
    <meta property="fb:app_id" content="123456789">
    <meta property="og:url" content="https://example.com/page.html">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Content Title">
    <meta property="og:image" content="https://example.com/image.jpg">
    <meta property="og:description" content="Description Here">
    <meta property="og:site_name" content="Site Name">
    <meta property="og:locale" content="en_US">
    <meta property="article:author" content="">
    <!-- TT: Open Graph -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@site_account">
    <meta name="twitter:creator" content="@individual_account">
    <meta name="twitter:url" content="https://example.com/page.html">
    <meta name="twitter:title" content="Content Title">
    <meta name="twitter:description" content="Content description less than 200 characters">
    <meta name="twitter:image" content="https://example.com/image.jpg">
    <!-- Google+ / Schema ORg -->
    <link href="https://plus.google.com/+YourPage" rel="publisher">
    <meta itemprop="name" content="Content Title">
    <meta itemprop="description" content="Content description less than 200 characters">
    <meta itemprop="image" content="https://example.com/image.jpg">

    <link rel="shortcut icon" href="/img/favicon.png">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/ebm.css" rel="stylesheet">
    @yield('head')
  </head>
  <body>
    <div class="site-wrapper"> <!-- Body -->
      @include('includes/include-header')
      <main class="site-content" role="main">
        
        @yield('main')

      </main>
      @include('includes/include-footer')
    </div>
    <script src="/js/jquery.min.js"></script> 
    <script src="/js/scripts.min.js"></script>
    @yield('footer')
  </body>
</html>