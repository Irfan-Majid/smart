@include('elements.header')
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        @include('elements.topNavbar')

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                @include('elements.sidebar')
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <div class="row">
                                        <!-- unique visitor start -->
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="row">
                                                        <div class="col ml-1">
                                                            <h4 class="my-2 my-md-0" style="color: #00bcd4">@yield('breadcrumb-title')</h4>
                                                        </div>
                                                        <div class="col mr-1">
                                                            <div class="float-right">
                                                                @yield('breadcrumb-button')
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <h4 class="sub-title">
                                                        @yield('sub-title')
                                                    </h4>
                                                    @include('elements.flash-message')
                                                    @yield('content')
                                                </div>
                                            </div>
                                        </div>

                                        <!-- unique visitor start -->
                                        @yield('listContent')
                                        <!-- unique visitor start -->
                                    </div>
                                </div>
                            </div>

                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('script')
    <script src="{{asset('theme/bower_components/peity/js/jquery.peity.js')}}"></script>
    <script src="{{asset('theme/bower_components/chart.js/js/Chart.js')}}"></script>
    <script src="{{asset('theme/pages/widget/amchart/amcharts.js')}}"></script>
    <script src="{{asset('theme/pages/widget/amchart/gauge.js')}}"></script>
    <script src="{{asset('theme/pages/widget/amchart/serial.js')}}"></script>
    <script src="{{asset('theme/pages/widget/amchart/ammap.js')}}"></script>
    <script src="{{asset('theme/pages/widget/amchart/continentsLow.js')}}"></script>
    <script src="{{asset('theme/pages/widget/amchart/light.js')}}"></script>
    <script src="{{asset('theme/pages/widget/excanvas.js')}}"></script>
    <script src="{{asset('theme/pages/dashboard/analytic-dashboard.js')}}"></script>
@endsection
@include('elements.footer')


