<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body id="page-top">
  <div id="wrapper">
    @include('layouts.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        @include('layouts.navbar')
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>
      @include('layouts.footer')
    </div>
  </div>
  @include('layouts.topButton')
    @include('layouts.modal')
  @include('layouts.script')
</body>
</html>