<html>
<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>TRON SPACE - Stake TRON and receive earnings daily</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <link rel="stylesheet" href="{{asset('/anim/animate.min.css?v=2')}}">

    <link rel="stylesheet" href="{{asset('/assets_df/css/style--.css?v=2')}}">
    <link rel="stylesheet" href="{{asset('/assets_df/css/iziToast.min.css?v=2')}}">


    <!-- Favicons -->
    <link href="{{asset('/assets_df/img/matic-logo.png')}}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('/assets_df/vendor/bootstrap/css/bootstrap.min.css?v=2')}}" rel="stylesheet">
    <link href="{{asset('/assets_df/vendor/icofont/icofont.min.css?v=2')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('/assets_df/css/style.css?v=2')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/vue-toastr-2/dist/vue-toastr-2.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Favicon Icon -->

</head>

<body class="body-bg">

<div id="app">

    <main-component></main-component>
</div>

<script src="https://unpkg.com/vue-toastr-2/dist/vue-toastr-2.js"></script>
<script src="https://momentjs.com/downloads/moment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
<script src="{{asset('/assets_df/vue.min.js?v=2')}}"></script>

{{--<script src="{{asset('/anim/animaciones.js')}}"></script>--}}


<!--<script src="/assets_df/vendor/jquery/jquery.min.js"></script>-->
<script src="{{asset('/assets_df/vendor/bootstrap/js/bootstrap.bundle.min.js?v=2')}}"></script>
<script src="{{asset('/assets_df/vendor/jquery.easing/jquery.easing.min.js?v=2')}}"></script>
<script src="{{asset('/assets_df/vendor/php-email-form/validate.js?v=2')}}"></script>
<script src="{{asset('/assets_df/vendor/jquery-countdown/jquery.countdown.min.js?v=2')}}"></script>


<script src="{{asset('/assets_df/scripts/jquery.min.js?v=2')}}"></script>
{{--<script src="{{asset('/assets_df/scripts/main.js')}}"></script>--}}
<script src="{{asset('/assets_df/scripts/web3.min.js?v=2')}}"></script>

<script src="{{asset('/assets_df/scripts/iziToast.min.js?v=2')}}"></script>


<!-- Template Main JS File -->
<script src="{{asset('/assets_df/js/main.js?v=2')}}"></script>
<script src="{{asset('/js/app.js?v=2')}}"></script>

<script>
    function copyreftext() {
        var copyText = document.getElementById("referral_link");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");
        swal("Referral link copied!", "Your referral link has been copied into clipboard. Spread the word and earn the bonus!", "info");
    }
</script>

</body>
</html>
