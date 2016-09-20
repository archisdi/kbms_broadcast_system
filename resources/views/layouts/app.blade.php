<!DOCTYPE html>
<html>

@include('layouts.header_script')

<body class="hold-transition skin-red sidebar-mini">

<div class="wrapper">

    @include('layouts.header')

    <div class="content-wrapper">
        <div class="container">
            @yield('content')
        </div>
    </div>

    @include('layouts.footer')
</div>


@include('layouts.footer_script')
</body>
</html>
