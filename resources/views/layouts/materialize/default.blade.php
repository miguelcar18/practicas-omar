@include('layouts.materialize.head')
@include('layouts.materialize.header')


<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
        @include('layouts.materialize.left-side-nav')

        <!-- START CONTENT -->
        <section id="content">

            <!--breadcrumbs start-->
            <div id="breadcrumbs-wrapper">
                <!-- Search for small screen -->
                <div class="header-search-wrapper grey hide-on-large-only">
                    <i class="mdi-action-search active"></i>
                    <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            @yield('breadcrumbs')
                        </div>
                    </div>
                </div>
            </div>
            <!--breadcrumbs end-->


            <!--start container-->
            <div class="container">
                <div class="section">

                    <div class="divider"></div>
                    @yield('content')
                    <div class="divider"></div>
                </div>
                <!-- Floating Action Button -->
                <!-- <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                     <a class="btn-floating btn-large">
                         <i class="mdi-action-stars"></i>
                     </a>
                     <ul>
                         <li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li>
                         <li><a href="app-widget.html" class="btn-floating yellow darken-1"><i class="large mdi-device-now-widgets"></i></a></li>
                         <li><a href="app-calendar.html" class="btn-floating green"><i class="large mdi-editor-insert-invitation"></i></a></li>
                         <li><a href="app-email.html" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
                     </ul>
                 </div>
                <!-- Floating Action Button -->
            </div>
            <!--end container-->
        </section>
        <!-- END CONTENT -->

        @include('layouts.materialize.rigth-side-nav')

    </div>
    <!-- END WRAPPER -->

</div>
<!-- END MAIN -->

@include('layouts.materialize.foot')



