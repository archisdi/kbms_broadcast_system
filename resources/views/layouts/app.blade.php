<!DOCTYPE html>
<html>

@include('layouts.header_script')

<body class="hold-transition skin-red-light sidebar-collapse sidebar-mini">

<div class="wrapper">

    @include('layouts.header')
    @include('layouts.sidebar')

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
