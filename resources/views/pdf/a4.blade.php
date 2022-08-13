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
        @import url("https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap");

        .typography-adjust {
            font-family: "Nunito Sans", "Segoe UI", Candara, "DejaVu Sans",
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

        html {
            line-height: 1.15
        }

        main {
            display: block
        }

        h1 {
            font-size: 2em;
            margin: .67em 0
        }

        hr {
            box-sizing: content-box;
            overflow: visible
        }

        pre {
            font-family: monospace, monospace;
            font-size: 1em
        }

        a {
            background-color: transparent
        }

        abbr[title] {
            border-bottom: none;
            text-decoration: underline;
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        code,
        kbd,
        samp {
            font-family: monospace, monospace;
            font-size: 1em
        }

        img {
            border-style: none
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            line-height: 1.15
        }

        button,
        input {
            overflow: visible
        }

        [type=button]::-moz-focus-inner,
        [type=reset]::-moz-focus-inner,
        [type=submit]::-moz-focus-inner,
        button::-moz-focus-inner {
            border-style: none;
            padding: 0
        }

        [type=button]:-moz-focusring,
        [type=reset]:-moz-focusring,
        [type=submit]:-moz-focusring,
        button:-moz-focusring {
            outline: 1px dotted ButtonText
        }

        fieldset {
            padding: .35em .75em .625em
        }

        legend {
            box-sizing: border-box;
            color: inherit;
            display: table;
            max-width: 100%;
            white-space: normal
        }

        textarea {
            overflow: auto
        }

        [type=checkbox],
        [type=radio] {
            box-sizing: border-box
        }

        [type=number]::-webkit-inner-spin-button,
        [type=number]::-webkit-outer-spin-button {
            height: auto
        }

        [type=search]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        details {
            display: block
        }

        [hidden],
        template {
            display: none
        }

        html {
            color: #222;
            font-size: 1em;
            line-height: 1.4
        }

        ::-moz-selection {
            background: #bbf7d0;
            text-shadow: none
        }

        ::selection {
            background: #bbf7d0;
            text-shadow: none
        }

        hr {
            border: 0;
            border-top: 1px solid #ccc;
            display: block;
            height: 1px;
            margin: 1em 0;
            padding: 0
        }

        audio,
        canvas,
        iframe,
        img,
        svg,
        video {
            vertical-align: middle
        }

        fieldset {
            border: 0
        }

        .hidden,
        [hidden] {
            display: none !important
        }

        .sr-only {
            clip: rect(0, 0, 0, 0);
            border: 0;
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            white-space: nowrap;
            width: 1px
        }

        .sr-only.focusable:active,
        .sr-only.focusable:focus {
            clip: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            position: static;
            white-space: inherit;
            width: auto
        }

        .invisible {
            visibility: hidden
        }

        .clearfix:after,
        .clearfix:before {
            content: " ";
            display: table
        }

        .clearfix:after {
            clear: both
        }

        @media print {

            *,
            :after,
            :before {
                background: #fff !important;
                box-shadow: none !important;
                color: #000 !important;
                text-shadow: none !important
            }

            a,
            a:visited {
                text-decoration: underline
            }

            a[href]:after {
                content: " ("attr(href) ")"
            }

            abbr[title]:after {
                content: " ("attr(title) ")"
            }

            a[href^="#"]:after,
            a[href^="javascript:"]:after {
                content: ""
            }

            pre {
                white-space: pre-wrap !important
            }

            blockquote,
            pre {
                border: 1px solid #999;
                page-break-inside: avoid
            }

            thead {
                display: table-header-group
            }

            img,
            tr {
                page-break-inside: avoid
            }

            h2,
            h3,
            p {
                orphans: 3;
                widows: 3
            }

            h2,
            h3 {
                page-break-after: avoid
            }
        }

        .pdf-sheet {
            background: white;
            padding: 2rem;
        }

        .tg {
            border: none;
            border-collapse: collapse;
            border-color: #ccc;
            border-spacing: 0;
            width: 100%;
            font-family: "Nunito Sans", "Segoe UI", Candara, "DejaVu Sans",
                "Bitstream Vera Sans", "Trebuchet MS", Verdana,
                "Verdana Ref", sans-serif !important;
        }

        .tg td {
            background-color: #fff;
            border-color: #ccc;
            border-style: solid;
            border-width: 0px;
            color: #333;
            font-size: 14px;
            overflow: hidden;
            padding: 24px 24px;
            word-break: normal;
            font-style: bold;
        }

        .tg th {
            background-color: #888;
            border-color: #ccc;
            border-style: solid;
            border-width: 0px;
            color: #fff;
            font-size: 14px;
            font-weight: normal;
            overflow: hidden;
            padding: 24px 24px;
            word-break: normal;
        }

        .tg .tg-9wq8 {
            border-color: inherit;
            text-align: center;
            vertical-align: middle
        }

        .tg .tg-c3ow {
            border-color: inherit;
            text-align: center;
            vertical-align: top;
            font-weight: bold;
            font-style: italic;
        }

        .tg .tg-kyy7 {
            background-color: #f9f9f9;
            border-color: inherit;
            text-align: center;
            vertical-align: middle
        }
    </style>

</head>

<body class="antialiased typography-adjust spacing-relaxed pdf-sheet">
    <table class="tg">
        <thead>
            <tr>
            @foreach (["Frequency", "Gross Income", "Tax", "Net Income"] as $field)
              <th class="tg-c3ow">{{ $field }}</th>
            @endforeach
            </tr>

        </thead>
        <tbody>
            @foreach ($calculation as $i => $calc)
                <tr>                
                    <td 
                        style="font-weight:bold;color: #15803d" 
                        class={{ $i % 2 ? "tg-kyy7" : "tg-9wq8" }}>{{ $calc["fq"] }}</td>
                    <td class={{ $i % 2 ? "tg-kyy7" : "tg-9wq8" }}>{{ $calc["gross"] }}</td>
                    <td class={{ $i % 2 ? "tg-kyy7" : "tg-9wq8" }}>{{ $calc["tax"] }}</td>
                    <td class={{ $i % 2 ? "tg-kyy7" : "tg-9wq8" }}>{{ $calc["net"] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
