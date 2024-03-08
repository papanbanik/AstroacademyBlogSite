<!DOCTYPE html>
<html lang="en">
@include('layouts.includes.head')

  <meta property="og:title" content="Astroacademy" />
  <meta property="og:description" content="This is meta description" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:updated_time" content="2020-03-15T15:40:24+06:00" />

<body>
  <!-- navigation -->
  @include('layouts.includes.navbar')
<!-- start of banner -->
  @include('layouts.includes.trainding')

@yield('mainSection')



@include('layouts.includes.footer')
@include('layouts.includes.script')


</body>
</html>
