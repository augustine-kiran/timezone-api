<html>

<head>
    <title>Timezone</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <div class="container" style="margin-top: 2%;">
        <div class="row">
            <div class="col-md-6" style="border: 1px solid grey; padding: 2%;">
                <h3>Time from Timezone</h3>
                <div class="form-group">
                    <label for="timezone">Select Timezone</label>
                    <select class="form-control" id="timezone"></select>
                </div>
            </div>
            <div class="col-md-5 offset-md-1" style="border: 1px solid grey; padding: 2%;">
                <h5 id="timezone_id"></h5>
                <p id="time"></p>
            </div>
        </div>
    </div>
    <img id="loader" src="{{ asset('image/loader.gif') }}" alt="loader" style="display: none;">

    <script>
        var base_path = "{{ url('/') }}/";
        var token = "{{ csrf_token() }} ";
    </script>
</body>

</html>