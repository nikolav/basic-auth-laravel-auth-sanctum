<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, minimum-scale=1">
    <meta name="theme-color" content="#fafafa">
    <meta name="description" content="app">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="icon" href="/favicon.ico" />
    <title>{{ $title ?? 'Document' }}</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap");

        .typography-adjust {
            font-family: "Open Sans", "Segoe UI", Candara, "DejaVu Sans",
                "Bitstream Vera Sans", "Trebuchet MS", Verdana,
                "Verdana Ref", sans-serif !important;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .spacing-relaxed {
            word-spacing: 0.033rem;
            letter-spacing: 0.034rem;
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css"
        integrity="sha256-WAgYcAck1C1/zEl5sBl5cfyhxtLgKGdpI3oKyJffVRI=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/html5-boilerplate@8.0.0/dist/css/main.css"
        integrity="sha256-U28AVdusZHRB7t9Vk6dB6br4SbbTaxuPn+wm/rmT3hU=" crossorigin="anonymous">

</head>

<body class="antialiased typography-adjust spacing-relaxed">
    <main id="app">
        {{ $slot }}
    </main>
</body>

</html>
