@include('layouts.head')
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            @include('layouts.header')

            @include('layouts.sidebar')
        </nav>
        <div id="page-wrapper">
            @yield('breadcrumb')
            
            @include('common.message')
            
            <div class="divider"></div>

            @yield('content')
        </div>
    </div>
    <div id="overlay"></div>
    <div class="modal fade" id="myModal" role="basic" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            </div>
        </div>
    </div>
@include('layouts.foot')


