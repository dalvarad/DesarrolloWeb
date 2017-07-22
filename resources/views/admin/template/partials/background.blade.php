@if(Auth::user())

    <style type="text/css">
        body {
            background-image: url("fondo/adminbg2.jpg");
            background-color: #C4D4EA;
        }
    </style>
@else
    <style type="text/css">
        body {
            background-image: url("fondo/guestBg.jpg");
            background-color: #C4D4EA;
        }
    </style>
@endif  