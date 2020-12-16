<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title')</title>
    @stack('base-css')
</head>

<body>
    <div id="app">
        @yield('content')
    </div>

    @stack('base-script')
    </body>

    </html>
