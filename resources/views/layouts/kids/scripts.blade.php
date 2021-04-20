<script src="{{asset('kids/js/modernizr-latest.js')}}"></script>
<script type='text/javascript' src='{{asset('kids/js/jquery.min.js')}}'></script>
<script type='text/javascript' src='{{asset('kids/js/fancybox/jquery.fancybox.pack.js')}}'></script>

<script type='text/javascript' src='{{asset('kids/js/jquery.mobile.customized.min.js')}}'></script>
<script type='text/javascript' src='{{asset('kids/js/jquery.easing.1.3.js')}}'></script>
<script type='text/javascript' src='{{asset('kids/js/camera.min.js')}}'></script>
<script src="{{asset('kids/js/bootstrap.min.js')}}"></script>
<script src="{{asset('kids/js/custom.js')}}"></script>
<script>
    jQuery(function(){

        jQuery('#camera_wrap_4').camera({
            transPeriod: 500,
            time: 3000,
            height: '600',
            loader: 'false',
            pagination: true,
            thumbnails: false,
            hover: false,
            playPause: false,
            navigation: false,
            opacityOnGrid: false,
            imagePath: 'kids/images/'
        });

    });

</script>
