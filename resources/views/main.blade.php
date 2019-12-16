@include('includes/_header')
<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
  @include('includes/_head')
  <main>
  	<section class="main-content">
  		@yield('content')
  	</section>
  </main>
  @yield('srcipts')
 @include('includes/_footer')
</body>

</html>
