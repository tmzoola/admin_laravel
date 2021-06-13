<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{"Create Member"}} - {{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.23.0/slimselect.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="{{ asset('assets') }}/css/nucleo-icons.css" rel="stylesheet" />

    <!-- CSS -->
    <link href="{{ asset('assets') }}/css/white-dashboard.css?v=1.0.0" rel="stylesheet" />
    <link href="{{ asset('assets') }}/css/theme.css" rel="stylesheet" />
</head>
<body class="white-content {{ 'Create Member' }}">

    <div class="wrapper wrapper-full-page">
        <div class="full-page {{ $contentClass ?? '' }}">
            <div class="content">
                <div class="container">
                    <div class="container-fluid mt--7">
                        <div class="row">
                            <div class="col-xl-12 order-xl-1">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <h3 class="mb-0">{{ __('Become a member') }}</h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <form method="post" action="/course/member" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="pl-lg-4">
                                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="" required autofocus>
                                                    @include('alerts.feedback', ['field' => 'name'])
                                                </div>
                                                <div class="form-group{{ $errors->has('card_number') ? ' has-danger' : '' }}">
                                                    <label class="form-control-label" for="input-name">{{ __('Card Number') }}</label>
                                                    <input type="number" name="card_number" id="input-name" class="form-control form-control-alternative{{ $errors->has('card_number') ? ' is-invalid' : '' }}" placeholder="{{ __('Card Number') }}" value="" required autofocus>
                                                    @include('alerts.feedback', ['field' => 'card_number'])
                                                </div>
                                                <input type="number" name="id" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Card Number') }}" value="{{$course_id}}" hidden>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-success mt-4">{{ __('Pay') }}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="{{ asset('assets') }}/js/core/jquery.min.js"></script>
<script src="{{ asset('assets') }}/js/core/popper.min.js"></script>
<script src="{{ asset('assets') }}/js/core/bootstrap.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Chart JS -->
{{-- <script src="{{ asset('assets') }}/js/plugins/chartjs.min.js"></script> --}}
<!--  Notifications Plugin    -->
<script src="{{ asset('assets') }}/js/plugins/bootstrap-notify.js"></script>

<script src="{{ asset('assets') }}/js/white-dashboard.min.js?v=1.0.0"></script>
<script src="{{ asset('assets') }}/js/theme.js"></script>
<script>
    $(document).ready(function() {
        $().ready(function() {
            $sidebar = $('.sidebar');
            $navbar = $('.navbar');
            $main_panel = $('.main-panel');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');
            sidebar_mini_active = true;
            white_color = false;

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

            $('.fixed-plugin a').click(function(event) {
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .background-color span').click(function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data', new_color);
                }

                if ($main_panel.length != 0) {
                    $main_panel.attr('data', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data', new_color);
                }
            });

            $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
                var $btn = $(this);

                if (sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    sidebar_mini_active = false;
                    whiteDashboard.showSidebarMessage('Sidebar mini deactivated...');
                } else {
                    $('body').addClass('sidebar-mini');
                    sidebar_mini_active = true;
                    whiteDashboard.showSidebarMessage('Sidebar mini activated...');
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);
            });

            $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
                var $btn = $(this);

                if (white_color == true) {
                    $('body').addClass('change-background');
                    setTimeout(function() {
                        $('body').removeClass('change-background');
                        $('body').removeClass('white-content');
                    }, 900);
                    white_color = false;
                } else {
                    $('body').addClass('change-background');
                    setTimeout(function() {
                        $('body').removeClass('change-background');
                        $('body').addClass('white-content');
                    }, 900);

                    white_color = true;
                }
            });

            $('.light-badge').click(function() {
                $('body').addClass('white-content');
            });

            $('.dark-badge').click(function() {
                $('body').removeClass('white-content');
            });
        });
    });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.23.0/slimselect.min.js"></script>
@stack('js')
</body>
</html>

