<!-- START LEFT SIDEBAR NAV-->
<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    {!! getAvatar(Auth::user()->id,77) !!}

                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="user/{!! Auth::user()->id !!}"><i class="mdi-action-face-unlock"></i> Profile</a>
                        </li>
                        @if(Entrust::can('manage-configuration'))
                        <li><a href="configuration"><i class="mdi-action-settings"></i> Settings</a>
                        </li>
                        @endif
                        <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="lock"><i class="mdi-action-lock-outline"></i> Lock</a>
                        </li>

                        <li><a href="#" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="mdi-hardware-keyboard-tab"></i> {!! trans('messages.logout') !!}</a>
                        </li>


                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">{!!Auth::user()->full_name !!}<i class="mdi-navigation-arrow-drop-down right"></i></a>



                </div>
                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </li>
        <li class="bold"><a href="/home" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i>Home</a>
        </li>

        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-view-carousel"></i> Archivos</a>
                    <div class="collapsible-body">
                        <ul>
                            @if(Entrust::can('manage-user'))
                            <li><a href="user">Users</a>
                            </li>
                            @endif


                        </ul>

                    </div>
                </li>
            </ul>
        </li>

        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-settings"></i>Configuración</a>
                    <div class="collapsible-body">
                        <ul>
                            @if(Entrust::can('manage-configuration'))
                            <li><a href="{{URL::to('configuration')}}">Settings</a>
                            </li>
                            @endif

                            @if(Entrust::can('manage-permission'))
                            <li><a href="{{URL::to('permission')}}"></i> {{trans('messages.permission') }}</a></li>
                            @endif

                            @if(Entrust::can('manage-role'))
                            <li><a href="{{URL::to('role')}}"></i> {{trans('messages.user').' '.trans('messages.role') }}</a></li>
                            @endif

                            @if(Entrust::can('manage-ip-filter') && config('config.enable_ip_filter'))
                            <li><a href="{{URL::to('ip-filter')}}">IP {{trans('messages.filter') }}</a></li>
                            @endif
                            @if(Entrust::can('manage-template') && config('config.enable_email_template'))
                            <li><a href="{{URL::to('template')}}">{{trans('messages.email').' '.trans('messages.template') }}</a></li>
                            @endif
                            @if(config('config.enable_activity_log'))
                            <li><a href="{{URL::to('activity-log')}}">{{trans('messages.activity').' '.trans('messages.log') }}</a></li>
                            @endif

                            @if(Entrust::can('manage-backup') && config('config.enable_backup'))
                            <li><a href="{{URL::to('backup')}}">{{trans('messages.backup')}}</a></li>
                            @endif

                            @if(Entrust::can('manage-language') && config('config.multilingual'))
                            <li><a href="/language"><i class="fa fa-globe fa-fw"></i> {{trans('messages.language') }}</a></li>
                            @endif

                        </ul>





                </li>
            </ul>
        </li>
        <li><a href="#" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="mdi-hardware-keyboard-tab"></i> {!! trans('messages.logout') !!}</a>
        </li>




        {{-- <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-view-carousel"></i> Layouts</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="layout-fullscreen.html">Full Screen</a>
                            </li>
                            <li><a href="layout-horizontal-menu.html">Horizontal Menu</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>

       <li class="bold"><a href="app-email.html" class="waves-effect waves-cyan"><i class="mdi-communication-email"></i> Mailbox <span class="new badge">4</span></a>
        </li>
        <li class="bold"><a href="app-calendar.html" class="waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> Calender</a>
        </li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-invert-colors"></i> CSS</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="css-typography.html">Typography</a>
                            </li>
                            <li><a href="css-icons.html">Icons</a>
                            </li>
                            <li><a href="css-animations.html">Animations</a>
                            </li>
                            <li><a href="css-shadow.html">Shadow</a>
                            </li>
                            <li><a href="css-media.html">Media</a>
                            </li>
                            <li><a href="css-sass.html">Sass</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-image-palette"></i> UI Elements</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="ui-alerts.html">Alerts</a>
                            </li>
                            <li><a href="ui-buttons.html">Buttons</a>
                            </li>
                            <li><a href="ui-badges.html">Badges</a>
                            </li>
                            <li><a href="ui-breadcrumbs.html">Breadcrumbs</a>
                            </li>
                            <li><a href="ui-collections.html">Collections</a>
                            </li>
                            <li><a href="ui-collapsibles.html">Collapsibles</a>
                            </li>
                            <li><a href="ui-tabs.html">Tabs</a>
                            </li>
                            <li><a href="ui-navbar.html">Navbar</a>
                            </li>
                            <li><a href="ui-pagination.html">Pagination</a>
                            </li>
                            <li><a href="ui-preloader.html">Preloader</a>
                            </li>
                            <li><a href="ui-toasts.html">Toasts</a>
                            </li>
                            <li><a href="ui-tooltip.html">Tooltip</a>
                            </li>
                            <li><a href="ui-waves.html">Waves</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-av-queue"></i> Advanced UI <span class="new badge"></span></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="advanced-ui-chips.html">Chips</a>
                            </li>
                            <li><a href="advanced-ui-cards.html">Cards</a>
                            </li>
                            <li><a href="advanced-ui-modals.html">Modals</a>
                            </li>
                            <li><a href="advanced-ui-media.html">Media</a>
                            </li>
                            <li><a href="advanced-ui-range-slider.html">Range Slider</a>
                            </li>
                            <li><a href="advanced-ui-sweetalert.html">SweetAlert</a>
                            </li>
                            <li><a href="advanced-ui-nestable.html">Shortable & Nestable</a>
                            </li>
                            <li><a href="advanced-ui-translation.html">Language Translation</a>
                            </li>
                            <li><a href="advanced-ui-highlight.html">Highlight</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a href="app-widget.html" class="waves-effect waves-cyan"><i class="mdi-device-now-widgets"></i> Widgets</a>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-border-all"></i> Tables</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="table-basic.html">Basic Tables</a>
                            </li>
                            <li><a href="table-data.html">Data Tables</a>
                            </li>
                            <li><a href="table-jsgrid.html">jsGrid</a>
                            </li>
                            <li><a href="table-editable.html">Editable Table</a>
                            </li>
                            <li><a href="table-floatThead.html">floatThead</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-insert-comment"></i> Forms <span class="new badge"></span></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="form-elements.html">Form Elements</a>
                            </li>
                            <li><a href="form-layouts.html">Form Layouts</a>
                            </li>
                            <li><a href="form-validation.html">Form Validations</a>
                            </li>
                            <li><a href="form-masks.html">Form Masks</a>
                            </li>
                            <li><a href="form-file-uploads.html">File Uploads</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-cyan active"><i class="mdi-social-pages"></i> Pages</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="page-contact.html">Contact Page</a>
                            </li>
                            <li><a href="page-todo.html">ToDos</a>
                            </li>
                            <li><a href="page-blog-1.html">Blog Type 1</a>
                            </li>
                            <li><a href="page-blog-2.html">Blog Type 2</a>
                            </li>
                            <li><a href="page-404.html">404</a>
                            </li>
                            <li><a href="page-500.html">500</a>
                            </li>
                            <li class="active"><a href="page-blank.html">Blank</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-shopping-cart"></i> eCommers</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="eCommerce-products-page.html">Products Page</a>
                            </li>
                            <li><a href="eCommerce-pricing.html">Pricing Table</a>
                            </li>
                            <li><a href="eCommerce-invoice.html">Invoice</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-image-image"></i> Medias</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="media-gallary-page.html">Gallery Page</a>
                            </li>
                            <li><a href="media-hover-effects.html">Image Hover Effects</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-account-circle"></i> User</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="user-profile-page.html">User Profile</a>
                            </li>
                            <li><a href="user-login.html">Login</a>
                            </li>
                            <li><a href="user-register.html">Register</a>
                            </li>
                            <li><a href="user-forgot-password.html">Forgot Password</a>
                            </li>
                            <li><a href="user-lock-screen.html">Lock Screen</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-chart"></i> Charts</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="charts-chartjs.html">Chart JS</a>
                            </li>
                            <li><a href="charts-chartist.html">Chartist</a>
                            </li>
                            <li><a href="charts-morris.html">Morris Charts</a>
                            </li>
                            <li><a href="charts-xcharts.html">xCharts</a>
                            </li>
                            <li><a href="charts-flotcharts.html">Flot Charts</a>
                            </li>
                            <li><a href="charts-sparklines.html">Sparkline Charts</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li class="li-hover"><div class="divider"></div></li>
        <li class="li-hover"><p class="ultra-small margin more-text">MORE</p></li>
        <li><a href="angular-ui.html"><i class="mdi-action-verified-user"></i> Angular UI  <span class="new badge"></span></a>
        </li>
        <li><a href="css-grid.html"><i class="mdi-image-grid-on"></i> Grid</a>
        </li>
        <li><a href="css-color.html"><i class="mdi-editor-format-color-fill"></i> Color</a>
        </li>
        <li><a href="css-helpers.html"><i class="mdi-communication-live-help"></i> Helpers</a>
        </li>
        <li><a href="changelogs.html"><i class="mdi-action-swap-vert-circle"></i> Changelogs</a>
        </li>
        <li class="li-hover"><div class="divider"></div></li>
        <li class="li-hover"><p class="ultra-small margin more-text">Daily Sales</p></li>
        <li class="li-hover">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="sample-chart-wrapper">
                        <div class="ct-chart ct-golden-section" id="ct2-chart"></div>
                    </div>
                </div>
            </div>
        </li>--}}
    </ul>
    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
</aside>
<!-- END LEFT SIDEBAR NAV-->

<!-- //////////////////////////////////////////////////////////////////////////// -->
