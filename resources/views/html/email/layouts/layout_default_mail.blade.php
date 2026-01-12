<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <link href="https://fonts.googleapis.com/css?family=Open+sans:200,300,400,500,600,700" rel="stylesheet">

    <!-- CSS Reset : BEGIN -->
    <style>

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            background: #f6f6f2;
        }

        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* What it does: Fixes webkit padding issue. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }

        /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
        a {
            text-decoration: none;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        *[x-apple-data-detectors],  /* iOS */
        .unstyle-auto-detected-links *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }

        /* What it does: Prevents Gmail from changing the text color in conversation threads. */
        .im {
            color: inherit !important;
        }

        /* If the above doesn't work, add a .g-img class to any image in question. */
        img.g-img + div {
            display: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */

        /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            u ~ div .email-container {
                min-width: 320px !important;
            }
        }
        /* iPhone 6, 6S, 7, 8, and X */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u ~ div .email-container {
                min-width: 375px !important;
            }
        }
        /* iPhone 6+, 7+, and 8+ */
        @media only screen and (min-device-width: 414px) {
            u ~ div .email-container {
                min-width: 414px !important;
            }
        }
    </style>

    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

        .primary{
            background: #17bebb;
        }
        .bg_white{
            background: #ffffff;
        }
        .bg_light{
            background: #f7fafa;
        }
        .bg_black{
            background: #000000;
        }
        .bg_dark{
            background: rgba(0,0,0,.8);
        }
        .email-section{
            padding:2.5em,2.5em,2.5em,2.5em;
        }

        /*BUTTON*/
        .btn{
            padding: 10px 15px;
            display: inline-block;
        }
        .btn.btn-primary{
            border-radius: 5px;
            background: #29ABE2;
            color: #ffffff;
        }
        .btn.btn-white{
            border-radius: 5px;
            background: #ffffff;
            color: #000000;
        }
        .btn.btn-white-outline{
            border-radius: 5px;
            background: transparent;
            border: 1px solid #fff;
            color: #fff;
        }
        .btn.btn-black-outline{
            border-radius: 0px;
            background: transparent;
            border: 2px solid #000;
            color: #000;
            font-weight: 700;
        }
        .btn-custom{
            color: rgba(0,0,0,.3);
            text-decoration: underline;
        }

        h1,h2,h3,h4,h5,h6{
            font-family: 'Open Sans', sans-serif;
            color: #000000;
            margin-top: 0;
            font-weight: 400;
        }

        body{
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
            font-size: 15px;
            line-height: 1.8;
            color: rgba(0,0,0,.4);
        }

        a{
            color: #29ABE2;
        }

        table{
        }
        /*LOGO*/

        .logo h1{
            margin: 0;
        }
        .logo h1 a{
            color: #29ABE2;
            font-size: 24px;
            font-weight: 700;
            font-family: 'Open Sans', sans-serif;
        }

        /*HERO*/
        .hero{
            position: relative;
            z-index: 0;
        }

        .hero .text{
            color: rgba(0,0,0,.3);
        }
        .hero .text h2{
            color: #000;
            font-size: 34px;
            margin-bottom: 15px;
            font-weight: 300;
            line-height: 1.2;
        }
        .hero .text h3{
            font-size: 24px;
            font-weight: 200;
        }
        .hero .text h2 span{
            font-weight: 600;
            color: #000;
        }


        /*PRODUCT*/
        .product-entry{
            display: block;
            position: relative;
            float: left;
            padding-top: 20px;
        }
        .product-entry .text{
            width: calc(100% - 125px);
            padding-left: 20px;
        }
        .product-entry .text h3{
            margin-bottom: 0;
            padding-bottom: 0;
        }
        .product-entry .text p{
            margin-top: 0;
        }
        .product-entry img, .product-entry .text{
            float: left;
        }

        ul.social{
            padding: 0;
        }
        ul.social li{
            display: inline-block;
            margin-right: 10px;
        }

        /*FOOTER*/

        .footer{
            border-top: 1px solid rgba(0,0,0,.05);
            color: rgba(0,0,0,.5);
        }
        .footer .heading{
            color: #000;
            font-size: 20px;
        }
        .footer ul{
            margin: 0;
            padding: 0;
        }
        .footer ul li{
            list-style: none;
            margin-bottom: 10px;
        }
        .footer ul li a{
            color: rgba(0,0,0,1);
        }


        @media screen and (max-width: 500px) {

        }

    </style>

</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
<center style="width: 100%; background-color: #f1f1f1;">
    <div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
        &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
    </div>
    <div style="max-width: 600px; margin: 0 auto; background: white" class="email-container">
        <!-- BEGIN BODY -->

        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
            <tr>
                <td valign="top" class="bg_white" style="padding: 1em 2.5em 0 2.5em;">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td class="logo" style="text-align: left;">
                                <h1 style="padding-top: 10px">


                                    <img style="    left: -10px;
    position: relative; background: #ffffff;border-radius: 1px;padding: 5px 20px 5px 0;" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTk1IiBoZWlnaHQ9IjcyIiB2aWV3Qm94PSIwIDAgMTk1IDcyIiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8bWFzayBpZD0ibWFzazBfNDAzXzc3IiBzdHlsZT0ibWFzay10eXBlOmx1bWluYW5jZSIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgd2lkdGg9IjE5NSIgaGVpZ2h0PSI3MiI+CjxwYXRoIGQ9Ik0wIDBIMTk1VjcySDBWMFoiIGZpbGw9IndoaXRlIi8+CjwvbWFzaz4KPGcgbWFzaz0idXJsKCNtYXNrMF80MDNfNzcpIj4KPHBhdGggZD0iTTg2LjU5NDcgMjYuODE1NlYyNS4xMTg0Qzg2LjU5NDcgMjQuMzM0NSA4Ni43NDExIDIzLjY2MyA4Ny4wMzMyIDIzLjEwNEM4Ny4zMjQ5IDIyLjU0NCA4Ny43MzQzIDIyLjExOTggODguMjU5NCAyMS44MzFDODguNzg1NiAyMS41NDE2IDg5LjM5MiAyMS4zOTY2IDkwLjA4MDEgMjEuMzk2NkM5MC43ODEyIDIxLjM5NjYgOTEuNDAxIDIxLjU0MTYgOTEuOTQwMSAyMS44MzFDOTIuNDc4MSAyMi4xMTk4IDkyLjg5NCAyMi41NDQgOTMuMTg1NiAyMy4xMDRDOTMuNDc3OCAyMy42NjMgOTMuNjI0MSAyNC4zMzQ1IDkzLjYyNDEgMjUuMTE4NFYyNi44MTU2SDg2LjU5NDdaTTkzLjIyNDkgMTkuOTAyNEM5Mi4zMDk3IDE5LjQyMDcgOTEuMjYxMSAxOS4xNzkzIDkwLjA4MDEgMTkuMTc5M0M4OC44OTkxIDE5LjE3OTMgODcuODUzNyAxOS40MjA3IDg2Ljk0NTUgMTkuOTAyNEM4Ni4wMzYzIDIwLjM4NDIgODUuMzI2MSAyMS4wNzI3IDg0LjgxMzMgMjEuOTY1OEM4NC4zIDIyLjg2IDg0LjA0MzkgMjMuOTEwOCA4NC4wNDM5IDI1LjExODRWMzEuNjI3NkM4NC4wNDM5IDMyLjMyNTIgODQuNjE0OCAzMi44OTExIDg1LjMxOTYgMzIuODkxMUM4Ni4wMjM5IDMyLjg5MTEgODYuNTk0NyAzMi4zMjUyIDg2LjU5NDcgMzEuNjI3NlYyOS4wMzRIOTMuNjI0MVYzMS42NDY4QzkzLjYyNDEgMzIuMzM0MiA5NC4xODY0IDMyLjg5MTEgOTQuODc5OSAzMi44OTExQzk1LjU3MzkgMzIuODkxMSA5Ni4xMzYyIDMyLjMzNDIgOTYuMTM2MiAzMS42NDY4VjI1LjExODRDOTYuMTM2MiAyMy45MTA4IDk1Ljg3OSAyMi44NiA5NS4zNjY4IDIxLjk2NThDOTQuODU0MSAyMS4wNzI3IDk0LjE0MDEgMjAuMzg0MiA5My4yMjQ5IDE5LjkwMjRaIiBmaWxsPSIjMTMyRTYyIi8+CjwvZz4KPG1hc2sgaWQ9Im1hc2sxXzQwM183NyIgc3R5bGU9Im1hc2stdHlwZTpsdW1pbmFuY2UiIG1hc2tVbml0cz0idXNlclNwYWNlT25Vc2UiIHg9IjAiIHk9IjAiIHdpZHRoPSIxOTUiIGhlaWdodD0iNzIiPgo8cGF0aCBkPSJNMCAwSDE5NVY3MkgwVjBaIiBmaWxsPSJ3aGl0ZSIvPgo8L21hc2s+CjxnIG1hc2s9InVybCgjbWFzazFfNDAzXzc3KSI+CjxwYXRoIGQ9Ik0xMDIuNzM0IDI3LjI3OTJIMTA1LjAzNUwxMDguODIyIDMyLjQzMThDMTA5LjAzNCAzMi43MjA2IDEwOS4zNzIgMzIuODkxMSAxMDkuNzMzIDMyLjg5MTFDMTEwLjY1IDMyLjg5MTEgMTExLjE4MiAzMS44NjQyIDExMC42NDkgMzEuMTI1NkwxMDYuOTMxIDI1Ljk4MTFMMTEwLjM3NyAyMS4xNTFDMTEwLjkwNCAyMC40MTE5IDExMC4zNyAxOS4zOTE0IDEwOS40NTcgMTkuMzkxNEgxMDkuMzk3QzEwOS4wMTggMTkuMzkxNCAxMDguNjY0IDE5LjU4IDEwOC40NTYgMTkuODkzNEwxMDUuMDcxIDI0Ljk4MzVIMTAyLjczNFYyMC42MzUxQzEwMi43MzQgMTkuOTQ4MyAxMDIuMTcyIDE5LjM5MTQgMTAxLjQ3OCAxOS4zOTE0QzEwMC43ODUgMTkuMzkxNCAxMDAuMjIzIDE5Ljk0ODMgMTAwLjIyMyAyMC42MzUxVjMxLjY0NzNDMTAwLjIyMyAzMi4zMzQyIDEwMC43ODUgMzIuODkxMSAxMDEuNDc4IDMyLjg5MTFDMTAyLjE3MiAzMi44OTExIDEwMi43MzQgMzIuMzM0MiAxMDIuNzM0IDMxLjY0NzNWMjcuMjc5MloiIGZpbGw9IiMxMzJFNjIiLz4KPC9nPgo8bWFzayBpZD0ibWFzazJfNDAzXzc3IiBzdHlsZT0ibWFzay10eXBlOmx1bWluYW5jZSIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgd2lkdGg9IjE5NSIgaGVpZ2h0PSI3MiI+CjxwYXRoIGQ9Ik0wIDBIMTk1VjcySDBWMFoiIGZpbGw9IndoaXRlIi8+CjwvbWFzaz4KPGcgbWFzaz0idXJsKCNtYXNrMl80MDNfNzcpIj4KPHBhdGggZD0iTTEyMy43MTUgMjkuOTExNUMxMjMuNDg3IDMwLjE4OCAxMjMuMTU5IDMwLjM4NjggMTIyLjczMSAzMC41MDg4QzEyMi4zMDMgMzAuNjMwOSAxMjEuNzg0IDMwLjY5MjcgMTIxLjE3MyAzMC42OTI3SDExNy4xNjJWMjcuMTI1SDEyMS42NkMxMjIuMzc0IDI3LjEyNSAxMjIuOTUyIDI3LjI1OTggMTIzLjM5MyAyNy41M0MxMjMuODM0IDI3Ljc5OTYgMTI0LjA1NSAyOC4yNDk0IDEyNC4wNTUgMjguODc5OEMxMjQuMDU1IDI5LjI5MTIgMTIzLjk0MSAyOS42MzU0IDEyMy43MTUgMjkuOTExNVpNMTIwLjgwMyAyMS41ODkzQzEyMS42NiAyMS41ODkzIDEyMi4zMTIgMjEuNzMxNiAxMjIuNzYgMjIuMDE0NkMxMjMuMjA4IDIyLjI5NyAxMjMuNDMyIDIyLjc0MDQgMTIzLjQzMiAyMy4zNDQ3QzEyMy40MzIgMjMuNzU2NiAxMjMuMzM1IDI0LjA4MDYgMTIzLjE0IDI0LjMxODJDMTIyLjk0NSAyNC41NTcgMTIyLjY2OSAyNC43MjY0IDEyMi4zMTIgMjQuODI5M0MxMjEuOTU1IDI0LjkzMzIgMTIxLjUxMSAyNC45ODM4IDEyMC45NzkgMjQuOTgzOEgxMTcuMTYyVjIxLjU4OTNIMTIwLjgwM1pNMTI1LjU0NSAyNi44OTI2QzEyNS4wMTQgMjYuNDIyNiAxMjQuMzExIDI2LjEwNSAxMjMuNDQ2IDI1LjkzMDhDMTIzLjgzNyAyNS44MjA1IDEyNC4xODkgMjUuNjc1IDEyNC40OTMgMjUuNDg1OEMxMjQuOTY3IDI1LjE5MDEgMTI1LjMyNyAyNC44MTM4IDEyNS41NzQgMjQuMzU2NkMxMjUuODIgMjMuOTAwNSAxMjUuOTQ0IDIzLjM3NjYgMTI1Ljk0NCAyMi43ODU3QzEyNS45NDQgMjIuMDc4NSAxMjUuNzU2IDIxLjQ3MSAxMjUuMzc5IDIwLjk2MjZDMTI1LjAwMyAyMC40NTQ4IDEyNC40NjQgMjAuMDY1OCAxMjMuNzYzIDE5Ljc5NjFDMTIzLjA2MiAxOS41MjYgMTIyLjIzOCAxOS4zOTExIDEyMS4yOSAxOS4zOTExSDExNi4yMjRDMTE1LjM1NSAxOS4zOTExIDExNC42NSAyMC4wODkyIDExNC42NSAyMC45NDk4VjMxLjMzMjdDMTE0LjY1IDMyLjE5MzMgMTE1LjM1NSAzMi44OTA5IDExNi4yMjQgMzIuODkwOUgxMjEuNTYzQzEyMi41NzUgMzIuODkwOSAxMjMuNDYxIDMyLjc0NTkgMTI0LjIyIDMyLjQ1NjZDMTI0Ljk4IDMyLjE2NzcgMTI1LjU2MSAzMS43NTI2IDEyNS45NjMgMzEuMjEyOEMxMjYuMzY1IDMwLjY3MzUgMTI2LjU2NyAzMC4wMjk4IDEyNi41NjcgMjkuMjg0OEMxMjYuNTY3IDI4LjI5NDEgMTI2LjIyNiAyNy40OTc1IDEyNS41NDUgMjYuODkyNloiIGZpbGw9IiMxMzJFNjIiLz4KPC9nPgo8bWFzayBpZD0ibWFzazNfNDAzXzc3IiBzdHlsZT0ibWFzay10eXBlOmx1bWluYW5jZSIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgd2lkdGg9IjE5NSIgaGVpZ2h0PSI3MiI+CjxwYXRoIGQ9Ik0wIDBIMTk1VjcySDBWMFoiIGZpbGw9IndoaXRlIi8+CjwvbWFzaz4KPGcgbWFzaz0idXJsKCNtYXNrM180MDNfNzcpIj4KPHBhdGggZD0iTTEzMi4xNDEgMjYuODE1NlYyNS4xMTg0QzEzMi4xNDEgMjQuMzM0NSAxMzIuMjg3IDIzLjY2MyAxMzIuNTc5IDIzLjEwNEMxMzIuODcxIDIyLjU0NCAxMzMuMjggMjIuMTE5OCAxMzMuODA1IDIxLjgzMUMxMzQuMzMyIDIxLjU0MTYgMTM0LjkzOCAyMS4zOTY2IDEzNS42MjYgMjEuMzk2NkMxMzYuMzI3IDIxLjM5NjYgMTM2Ljk0NyAyMS41NDE2IDEzNy40ODYgMjEuODMxQzEzOC4wMjQgMjIuMTE5OCAxMzguNDQgMjIuNTQ0IDEzOC43MzIgMjMuMTA0QzEzOS4wMjQgMjMuNjYzIDEzOS4xNyAyNC4zMzQ1IDEzOS4xNyAyNS4xMTg0VjI2LjgxNTZIMTMyLjE0MVpNMTQwLjQyNiAzMi44OTExQzE0MS4xMiAzMi44OTExIDE0MS42ODIgMzIuMzM0MiAxNDEuNjgyIDMxLjY0NjhWMjUuMTE4NEMxNDEuNjgyIDIzLjkxMDggMTQxLjQyNSAyMi44NiAxNDAuOTEzIDIxLjk2NThDMTQwLjQgMjEuMDcyNyAxMzkuNjg2IDIwLjM4NDIgMTM4Ljc3MSAxOS45MDI0QzEzNy44NTYgMTkuNDIwNyAxMzYuODA3IDE5LjE3OTMgMTM1LjYyNiAxOS4xNzkzQzEzNC40NDUgMTkuMTc5MyAxMzMuNCAxOS40MjA3IDEzMi40OTEgMTkuOTAyNEMxMzEuNTgyIDIwLjM4NDIgMTMwLjg3MiAyMS4wNzI3IDEzMC4zNTkgMjEuOTY1OEMxMjkuODQ2IDIyLjg2IDEyOS41OSAyMy45MTA4IDEyOS41OSAyNS4xMTg0VjMxLjYyNzZDMTI5LjU5IDMyLjMyNTIgMTMwLjE2MSAzMi44OTExIDEzMC44NjYgMzIuODkxMUMxMzEuNTcgMzIuODkxMSAxMzIuMTQxIDMyLjMyNTIgMTMyLjE0MSAzMS42Mjc2VjI5LjAzNEgxMzkuMTdWMzEuNjQ2OEMxMzkuMTcgMzIuMzM0MiAxMzkuNzMyIDMyLjg5MTEgMTQwLjQyNiAzMi44OTExWiIgZmlsbD0iIzEzMkU2MiIvPgo8L2c+CjxtYXNrIGlkPSJtYXNrNF80MDNfNzciIHN0eWxlPSJtYXNrLXR5cGU6bHVtaW5hbmNlIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiB3aWR0aD0iMTk1IiBoZWlnaHQ9IjcyIj4KPHBhdGggZD0iTTAgMEgxOTVWNzJIMFYwWiIgZmlsbD0id2hpdGUiLz4KPC9tYXNrPgo8ZyBtYXNrPSJ1cmwoI21hc2s0XzQwM183NykiPgo8cGF0aCBkPSJNMTQ2LjEzOCAyOS40NzczSDE1MS43MDhDMTUyLjIzNCAyOS40NzczIDE1Mi42NjIgMjkuMDU0MiAxNTIuNjYyIDI4LjUzMjVDMTUyLjY2MiAyOC4wMTAyIDE1Mi4yMzQgMjcuNTg3NyAxNTEuNzA4IDI3LjU4NzdIMTQ2LjEzOEMxNDUuNjEyIDI3LjU4NzcgMTQ1LjE4NSAyOC4wMTAyIDE0NS4xODUgMjguNTMyNUMxNDUuMTg1IDI5LjA1NDIgMTQ1LjYxMiAyOS40NzczIDE0Ni4xMzggMjkuNDc3M1oiIGZpbGw9IiMxMzJFNjIiLz4KPC9nPgo8bWFzayBpZD0ibWFzazVfNDAzXzc3IiBzdHlsZT0ibWFzay10eXBlOmx1bWluYW5jZSIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgd2lkdGg9IjE5NSIgaGVpZ2h0PSI3MiI+CjxwYXRoIGQ9Ik0wIDBIMTk1VjcySDBWMFoiIGZpbGw9IndoaXRlIi8+CjwvbWFzaz4KPGcgbWFzaz0idXJsKCNtYXNrNV80MDNfNzcpIj4KPHBhdGggZD0iTTkyLjI1MDggNDUuMjU1QzkxLjE2NzIgNDQuNjUxMiA4OS45NDk3IDQ0LjM0OTEgODguNjAwMyA0NC4zNDkxQzg3LjQ4MzQgNDQuMzQ5MSA4Ni40NzQ1IDQ0LjUzMTkgODUuNTcyMyA0NC44OTlDODUuMDY2IDQ1LjEwNDcgODQuNTkzMSA0NS4zNjggODQuMTU0IDQ1LjY4OTNDODMuNjA1OCA0Ni4wOSA4My41NzYyIDQ2Ljg5NTggODQuMDgxNCA0Ny4zNDgyQzg0LjQ2MTIgNDcuNjg3NiA4NS4wMzY5IDQ3LjczMDMgODUuNDQyNiA0Ny40MjE3Qzg1Ljc1MjUgNDcuMTg1NyA4Ni4wODQ1IDQ2Ljk4NzQgODYuNDM4NSA0Ni44MjdDODcuMDQ4NiA0Ni41NTEgODcuNzI5OCA0Ni40MTI0IDg4LjQ4MzUgNDYuNDEyNEM4OS4zNjU0IDQ2LjQxMjQgOTAuMTY3NiA0Ni42MjgzIDkwLjg4NzUgNDcuMDU4OEM5MS42MDc5IDQ3LjQ4ODkgOTIuMTc1NSA0OC4wNzcyIDkyLjU5MTQgNDguODIzOEM5Mi44NDk3IDQ5LjI4NjggOTMuMDE4MSA0OS43ODQ2IDkzLjExNiA1MC4zMDc5SDg3LjYwNjZDODcuMTAxMyA1MC4zMDc5IDg2LjY5MTQgNTAuNzEzNCA4Ni42OTE0IDUxLjIxNDNDODYuNjkxNCA1MS43MTQ3IDg3LjEwMTMgNTIuMTIwOCA4Ny42MDY2IDUyLjEyMDhIOTMuMTQ5OUM5My4wNjE3IDUyLjcyODMgOTIuODc5OCA1My4yODk5IDkyLjU5MTQgNTMuNzk4M0M5Mi4xNzU1IDU0LjUzMTYgOTEuNjA3OSA1NS4xMDcxIDkwLjg4NzUgNTUuNTI0OUM5MC4xNjc2IDU1Ljk0MjEgODkuMzcxOCA1Ni4xNTE2IDg4LjUwMjkgNTYuMTUxNkM4Ny43NzU1IDU2LjE1MTYgODcuMDkxMSA1Ni4wMTQxIDg2LjQ0ODIgNTUuNzM3Qzg2LjA2ODkgNTUuNTczNCA4NS43MTc1IDU1LjM2ODcgODUuMzk0MiA1NS4xMjI1Qzg0Ljk5MTIgNTQuODE1MSA4NC40MTYgNTQuODYyNSA4NC4wMzgzIDU1LjIwMDNMODQuMDEwNCA1NS4yMjU0QzgzLjUxMzIgNTUuNjcwNCA4My41MzIxIDU2LjQ1OTYgODQuMDYwNCA1Ni44Njc4Qzg0LjQ5MTkgNTcuMjAwOCA4NC45Njk3IDU3LjQ3NjkgODUuNDk0MyA1Ny42OTQ4Qzg2LjQyMjQgNTguMDgwMSA4Ny40MjUyIDU4LjI3MjUgODguNTAyOSA1OC4yNzI1Qzg5Ljg2NTcgNTguMjcyNSA5MS4wOTg0IDU3Ljk3MDggOTIuMjAyNCA1Ny4zNjcxQzkzLjMwNTQgNTYuNzYyMiA5NC4xNzE2IDU1LjkyOTMgOTQuODAxNiA1NC44Njk0Qzk1LjQzMTEgNTMuODA4NCA5NS43NDU5IDUyLjYyMjIgOTUuNzQ1OSA1MS4zMTA4Qzk1Ljc0NTkgNDkuOTk5MyA5NS40MzQ0IDQ4LjgxMzYgOTQuODExMyA0Ny43NTI3Qzk0LjE4ODMgNDYuNjkyMiA5My4zMzQ0IDQ1Ljg1OTggOTIuMjUwOCA0NS4yNTVaIiBmaWxsPSIjMTMyRTYyIi8+CjwvZz4KPG1hc2sgaWQ9Im1hc2s2XzQwM183NyIgc3R5bGU9Im1hc2stdHlwZTpsdW1pbmFuY2UiIG1hc2tVbml0cz0idXNlclNwYWNlT25Vc2UiIHg9IjAiIHk9IjAiIHdpZHRoPSIxOTUiIGhlaWdodD0iNzIiPgo8cGF0aCBkPSJNMCAwSDE5NVY3MkgwVjBaIiBmaWxsPSJ3aGl0ZSIvPgo8L21hc2s+CjxnIG1hc2s9InVybCgjbWFzazZfNDAzXzc3KSI+CjxwYXRoIGQ9Ik0xMDguMjg5IDQ0LjU2MTNIMTA4LjIyOUMxMDcuODUgNDQuNTYxMyAxMDcuNDk2IDQ0Ljc0OTkgMTA3LjI4OCA0NS4wNjMzTDEwMy45MDMgNTAuMTUzNUgxMDEuNTY2VjQ1LjgwNTFDMTAxLjU2NiA0NS4xMTgyIDEwMS4wMDQgNDQuNTYxMyAxMDAuMzEgNDQuNTYxM0M5OS42MTY5IDQ0LjU2MTMgOTkuMDU0NyA0NS4xMTgyIDk5LjA1NDcgNDUuODA1MVY1Ni44MTY3Qzk5LjA1NDcgNTcuNTAzNiA5OS42MTY5IDU4LjA2MSAxMDAuMzEgNTguMDYxQzEwMS4wMDQgNTguMDYxIDEwMS41NjYgNTcuNTAzNiAxMDEuNTY2IDU2LjgxNjdWNTIuNDQ5MkgxMDMuODY3TDEwNy42NTQgNTcuNjAxN0MxMDcuODY2IDU3Ljg5IDEwOC4yMDQgNTguMDYxIDEwOC41NjUgNTguMDYxQzEwOS40ODIgNTguMDYxIDExMC4wMTUgNTcuMDM0MiAxMDkuNDgxIDU2LjI5NTZMMTA1Ljc2MyA1MS4xNTFMMTA5LjIwOSA0Ni4zMjA5QzEwOS43MzYgNDUuNTgxOCAxMDkuMjAyIDQ0LjU2MTMgMTA4LjI4OSA0NC41NjEzWiIgZmlsbD0iIzEzMkU2MiIvPgo8L2c+CjxtYXNrIGlkPSJtYXNrN180MDNfNzciIHN0eWxlPSJtYXNrLXR5cGU6bHVtaW5hbmNlIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiB3aWR0aD0iMTk1IiBoZWlnaHQ9IjcyIj4KPHBhdGggZD0iTTAgMEgxOTVWNzJIMFYwWiIgZmlsbD0id2hpdGUiLz4KPC9tYXNrPgo8ZyBtYXNrPSJ1cmwoI21hc2s3XzQwM183NykiPgo8cGF0aCBkPSJNMTIxLjE3NiA1NS43MzY5QzEyMC41MzMgNTYuMDE0IDExOS44NDggNTYuMTUxNSAxMTkuMTIxIDU2LjE1MTVDMTE4LjI1MSA1Ni4xNTE1IDExNy40NTcgNTUuOTQyNiAxMTYuNzM2IDU1LjUyNDhDMTE2LjAxNiA1NS4xMDcgMTE1LjQ1MSA1NC41MzE1IDExNS4wNDMgNTMuNzk4M0MxMTQuNjMzIDUzLjA2NjEgMTE0LjQyOSA1Mi4yMzA1IDExNC40MjkgNTEuMjkxNUMxMTQuNDI5IDUwLjM5MiAxMTQuNjMzIDQ5LjU2OTIgMTE1LjA0MyA0OC44MjM3QzExNS40NTEgNDguMDc3NyAxMTYuMDE2IDQ3LjQ4OTQgMTE2LjczNiA0Ny4wNTg4QzExNy40NTcgNDYuNjI4MiAxMTguMjU4IDQ2LjQxMjQgMTE5LjE0MSA0Ni40MTI0QzExOS44OTQgNDYuNDEyNCAxMjAuNTc1IDQ2LjU1MDkgMTIxLjE4NSA0Ni44Mjc1QzEyMS41NCA0Ni45ODg0IDEyMS44NzMgNDcuMTg3MiAxMjIuMTg1IDQ3LjQyNDNDMTIyLjU4OSA0Ny43MzI0IDEyMy4xNjMgNDcuNjkxMyAxMjMuNTQ0IDQ3LjM1NTFDMTI0LjA1NiA0Ni45MDE2IDEyNC4wMjcgNDYuMDg3MyAxMjMuNDcxIDQ1LjY4NjFDMTIzLjAzIDQ1LjM2NjMgMTIyLjU1NyA0NS4xMDQxIDEyMi4wNTIgNDQuODk5QzEyMS4xNSA0NC41MzE4IDEyMC4xNDYgNDQuMzQ5IDExOS4wNDQgNDQuMzQ5QzExNy42ODEgNDQuMzQ5IDExNi40NTcgNDQuNjUxMiAxMTUuMzczIDQ1LjI1NDlDMTE0LjI4OSA0NS44NTk4IDExMy40MzYgNDYuNjkyNyAxMTIuODEzIDQ3Ljc1MjZDMTEyLjE5IDQ4LjgxMzYgMTExLjg3OCA0OS45OTkzIDExMS44NzggNTEuMzExM0MxMTEuODc4IDUyLjYyMjcgMTEyLjE5MyA1My44MDg0IDExMi44MjMgNTQuODY5NEMxMTMuNDUyIDU1LjkyOTggMTE0LjMyMiA1Ni43NjIyIDExNS40MzIgNTcuMzY3QzExNi41NDIgNTcuOTcwOCAxMTcuNzcyIDU4LjI3MjkgMTE5LjEyMSA1OC4yNzI5QzEyMC4xOTkgNTguMjcyOSAxMjEuMjAxIDU4LjA4IDEyMi4xMyA1Ny42OTQ4QzEyMi42NTMgNTcuNDc3MyAxMjMuMTMxIDU3LjIwMjkgMTIzLjU2NSA1Ni44NzE0QzEyNC4xMDEgNTYuNDYyNyAxMjQuMTE5IDU1LjY2NSAxMjMuNjE1IDU1LjIxODRMMTIzLjU4NyA1NS4xOTM0QzEyMy4yMDggNTQuODU4NyAxMjIuNjM1IDU0LjgxMjkgMTIyLjIzMyA1NS4xMTk4QzEyMS45MDkgNTUuMzY3MSAxMjEuNTU3IDU1LjU3MzMgMTIxLjE3NiA1NS43MzY5WiIgZmlsbD0iIzEzMkU2MiIvPgo8L2c+CjxtYXNrIGlkPSJtYXNrOF80MDNfNzciIHN0eWxlPSJtYXNrLXR5cGU6bHVtaW5hbmNlIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiB3aWR0aD0iMTk1IiBoZWlnaHQ9IjcyIj4KPHBhdGggZD0iTTAgMEgxOTVWNzJIMFYwWiIgZmlsbD0id2hpdGUiLz4KPC9tYXNrPgo8ZyBtYXNrPSJ1cmwoI21hc2s4XzQwM183NykiPgo8cGF0aCBkPSJNMTM2LjUxIDQ0LjU2MTNIMTM2LjQ0OUMxMzYuMDcxIDQ0LjU2MTMgMTM1LjcxNyA0NC43NDk5IDEzNS41MDggNDUuMDYzM0wxMzIuMTI0IDUwLjE1MzVIMTI5Ljc4N1Y0NS44MDUxQzEyOS43ODcgNDUuMTE4MiAxMjkuMjI1IDQ0LjU2MTMgMTI4LjUzMSA0NC41NjEzQzEyNy44MzggNDQuNTYxMyAxMjcuMjc1IDQ1LjExODIgMTI3LjI3NSA0NS44MDUxVjU2LjgxNjdDMTI3LjI3NSA1Ny41MDM2IDEyNy44MzggNTguMDYxIDEyOC41MzEgNTguMDYxQzEyOS4yMjUgNTguMDYxIDEyOS43ODcgNTcuNTAzNiAxMjkuNzg3IDU2LjgxNjdWNTIuNDQ5MkgxMzIuMDg4TDEzNS44NzUgNTcuNjAxN0MxMzYuMDg3IDU3Ljg5IDEzNi40MjUgNTguMDYxIDEzNi43ODYgNTguMDYxQzEzNy43MDIgNTguMDYxIDEzOC4yMzYgNTcuMDM0MiAxMzcuNzAyIDU2LjI5NTZMMTMzLjk4NCA1MS4xNTFMMTM3LjQzIDQ2LjMyMDlDMTM3Ljk1NyA0NS41ODE4IDEzNy40MjMgNDQuNTYxMyAxMzYuNTEgNDQuNTYxM1oiIGZpbGw9IiMxMzJFNjIiLz4KPC9nPgo8bWFzayBpZD0ibWFzazlfNDAzXzc3IiBzdHlsZT0ibWFzay10eXBlOmx1bWluYW5jZSIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgd2lkdGg9IjE5NSIgaGVpZ2h0PSI3MiI+CjxwYXRoIGQ9Ik0wIDBIMTk1VjcySDBWMFoiIGZpbGw9IndoaXRlIi8+CjwvbWFzaz4KPGcgbWFzaz0idXJsKCNtYXNrOV80MDNfNzcpIj4KPHBhdGggZD0iTTE0Ni43MDMgNTIuMjM3MkgxNDYuNjg0TDE0My44NTMgNDUuMjgwM0MxNDMuNjgxIDQ0Ljg1NzggMTQzLjI2NyA0NC41ODA3IDE0Mi44MDYgNDQuNTgwN0gxNDIuNzc3QzE0MS45NjQgNDQuNTgwNyAxNDEuNDE4IDQ1LjQwNTYgMTQxLjc0MiA0Ni4xNDM2TDE0NS40OTggNTQuNzA0NUwxNDUuNDM3IDU0Ljg0MDRDMTQ1LjIzIDU1LjMxNTcgMTQ1LjAwMyA1NS42NTA0IDE0NC43NTYgNTUuODQzM0MxNDQuNTA5IDU2LjAzNjIgMTQ0LjE4NSA1Ni4xMzI3IDE0My43ODIgNTYuMTMyN0MxNDMuNTM2IDU2LjEzMjcgMTQzLjI2NyA1Ni4xMDY2IDE0Mi45NzQgNTYuMDU1NEMxNDIuOTY4IDU2LjA1NDMgMTQyLjk2MiA1Ni4wNTMzIDE0Mi45NTcgNTYuMDUyMkMxNDIuNDkzIDU1Ljk2ODUgMTQyLjAzIDU2LjE5NTYgMTQxLjg0OSA1Ni42MjcyQzE0MS42MjIgNTcuMTY5MSAxNDEuOTI1IDU3Ljc5MTYgMTQyLjQ5OSA1Ny45MzU0QzE0Mi41MjUgNTcuOTQxOCAxNDIuNTUgNTcuOTQ4MiAxNDIuNTc2IDU3Ljk1NDZDMTQzLjA4MiA1OC4wNzY3IDE0My41NDIgNTguMTM3OSAxNDMuOTU4IDU4LjEzNzlDMTQ0LjU4MSA1OC4xMzc5IDE0NS4xMDcgNTguMDUwNSAxNDUuNTM1IDU3Ljg3NzRDMTQ1Ljk2NCA1Ny43MDM2IDE0Ni4zMzYgNTcuNDI3NiAxNDYuNjU1IDU3LjA0ODdDMTQ2Ljk3MiA1Ni42NjkzIDE0Ny4yODEgNTYuMTUxOSAxNDcuNTggNTUuNDk1M0wxNDcuOTEgNTQuNzQ0TDE1MS42NTIgNDYuMTQwNEMxNTEuOTczIDQ1LjQwMjQgMTUxLjQyNyA0NC41ODA3IDE1MC42MTYgNDQuNTgwN0MxNTAuMTU3IDQ0LjU4MDcgMTQ5Ljc0NCA0NC44NTU2IDE0OS41NzEgNDUuMjc2MUwxNDYuNzAzIDUyLjIzNzJaIiBmaWxsPSIjMTMyRTYyIi8+CjwvZz4KPG1hc2sgaWQ9Im1hc2sxMF80MDNfNzciIHN0eWxlPSJtYXNrLXR5cGU6bHVtaW5hbmNlIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiB3aWR0aD0iMTk1IiBoZWlnaHQ9IjcyIj4KPHBhdGggZD0iTTAgMEgxOTVWNzJIMFYwWiIgZmlsbD0id2hpdGUiLz4KPC9tYXNrPgo8ZyBtYXNrPSJ1cmwoI21hc2sxMF80MDNfNzcpIj4KPHBhdGggZD0iTTE2My41MDUgNTAuNjk0MUMxNjMuMjM5IDUxLjA3OTQgMTYyLjg1MyA1MS4zNjIzIDE2Mi4zNDYgNTEuNTQyNUMxNjEuODQxIDUxLjcyMiAxNjEuMjMxIDUxLjgxMjEgMTYwLjUxNyA1MS44MTIxSDE1Ny42NzRWNDYuNzU5MkgxNjAuNTM2QzE2MS42MTMgNDYuNzU5MiAxNjIuNDQ0IDQ2Ljk2ODcgMTYzLjAyOCA0Ny4zODU5QzE2My42MTIgNDcuODA0OCAxNjMuOTA0IDQ4LjQyNTEgMTYzLjkwNCA0OS4yNDc4QzE2My45MDQgNDkuODI2IDE2My43NzEgNTAuMzA3OCAxNjMuNTA1IDUwLjY5NDFaTTE2My43MSA0NS4xMjAxQzE2Mi44MjYgNDQuNzQ3NiAxNjEuNzk1IDQ0LjU2MTEgMTYwLjYxMyA0NC41NjExSDE1Ny42NzRIMTU2LjY4OEMxNTUuODQ1IDQ0LjU2MTEgMTU1LjE2MiA0NS4yMzc4IDE1NS4xNjIgNDYuMDcyOVY1Ni44MTdDMTU1LjE2MiA1Ny41MDM5IDE1NS43MjQgNTguMDYwOCAxNTYuNDE4IDU4LjA2MDhDMTU3LjExMSA1OC4wNjA4IDE1Ny42NzQgNTcuNTAzOSAxNTcuNjc0IDU2LjgxN1Y1NC4wMTE0SDE2MC41NzVDMTYxLjc2OSA1NC4wMTE0IDE2Mi44MDcgNTMuODIxMSAxNjMuNjkgNTMuNDQyMkMxNjQuNTczIDUzLjA2MzMgMTY1LjI1MSA1Mi41MTYxIDE2NS43MjUgNTEuODAzQzE2Ni4xOTkgNTEuMDg5IDE2Ni40MzUgNTAuMjM3OSAxNjYuNDM1IDQ5LjI0NzhDMTY2LjQzNSA0OC4yOTYxIDE2Ni4yMDIgNDcuNDYzMiAxNjUuNzM0IDQ2Ljc1MDJDMTY1LjI2NyA0Ni4wMzYxIDE2NC41OTIgNDUuNDkzNiAxNjMuNzEgNDUuMTIwMVoiIGZpbGw9IiMxMzJFNjIiLz4KPC9nPgo8bWFzayBpZD0ibWFzazExXzQwM183NyIgc3R5bGU9Im1hc2stdHlwZTpsdW1pbmFuY2UiIG1hc2tVbml0cz0idXNlclNwYWNlT25Vc2UiIHg9IjAiIHk9IjAiIHdpZHRoPSIxOTUiIGhlaWdodD0iNzIiPgo8cGF0aCBkPSJNMCAwSDE5NVY3MkgwVjBaIiBmaWxsPSJ3aGl0ZSIvPgo8L21hc2s+CjxnIG1hc2s9InVybCgjbWFzazExXzQwM183NykiPgo8cGF0aCBkPSJNMTgwLjc4NCA1NS4yMDM1QzE4MC4zOTkgNTQuODYzIDE3OS44MTcgNTQuODE3NyAxNzkuNDA3IDU1LjEyODlDMTc5LjA4NiA1NS4zNzI0IDE3OC43MzggNTUuNTc0OSAxNzguMzYyIDU1LjczNjlDMTc3LjcxOSA1Ni4wMTQgMTc3LjAzNCA1Ni4xNTE1IDE3Ni4zMDggNTYuMTUxNUMxNzUuNDM3IDU2LjE1MTUgMTc0LjY0MyA1NS45NDI2IDE3My45MjIgNTUuNTI0OEMxNzMuMjAyIDU1LjEwNyAxNzIuNjM3IDU0LjUzMTUgMTcyLjIyOSA1My43OTgzQzE3MS44MTkgNTMuMDY2MSAxNzEuNjE1IDUyLjIzMDUgMTcxLjYxNSA1MS4yOTE1QzE3MS42MTUgNTAuMzkyIDE3MS44MTkgNDkuNTY4NyAxNzIuMjI5IDQ4LjgyMzdDMTcyLjYzNyA0OC4wNzc3IDE3My4yMDIgNDcuNDg4OCAxNzMuOTIyIDQ3LjA1ODhDMTc0LjY0MyA0Ni42MjgyIDE3NS40NDQgNDYuNDEyNCAxNzYuMzI3IDQ2LjQxMjRDMTc3LjA3OSA0Ni40MTI0IDE3Ny43NjEgNDYuNTUwOSAxNzguMzcxIDQ2LjgyNzVDMTc4LjcyNyA0Ni45ODc5IDE3OS4wNiA0Ny4xODcyIDE3OS4zNzEgNDcuNDI0M0MxNzkuNzc1IDQ3LjczMjQgMTgwLjM0OSA0Ny42OTEzIDE4MC43MjkgNDcuMzU1MUMxODEuMjQyIDQ2LjkwMTYgMTgxLjIxMyA0Ni4wODczIDE4MC42NTcgNDUuNjg1NUMxODAuMjE2IDQ1LjM2NjMgMTc5Ljc0MyA0NS4xMDM2IDE3OS4yMzggNDQuODk5QzE3OC4zMzYgNDQuNTMxOCAxNzcuMzMyIDQ0LjM0OSAxNzYuMjMgNDQuMzQ5QzE3NC44NjcgNDQuMzQ5IDE3My42NDMgNDQuNjUxMiAxNzIuNTU5IDQ1LjI1NDlDMTcxLjQ3NSA0NS44NTk4IDE3MC42MjIgNDYuNjkyMiAxNjkuOTk5IDQ3Ljc1MjZDMTY5LjM3NiA0OC44MTM2IDE2OS4wNjQgNDkuOTk5MyAxNjkuMDY0IDUxLjMxMDdDMTY5LjA2NCA1Mi42MjI3IDE2OS4zNzkgNTMuODA4NCAxNzAuMDA5IDU0Ljg2OTRDMTcwLjYzOCA1NS45MjkzIDE3MS41MDggNTYuNzYyMiAxNzIuNjE4IDU3LjM2N0MxNzMuNzI4IDU3Ljk3MDggMTc0Ljk1OCA1OC4yNzI5IDE3Ni4zMDggNTguMjcyOUMxNzcuMzg1IDU4LjI3MjkgMTc4LjM4NyA1OC4wOCAxNzkuMzE2IDU3LjY5NDhDMTc5LjgzMiA1Ny40ODA1IDE4MC4zMDQgNTcuMjEwNCAxODAuNzMzIDU2Ljg4NDhDMTgxLjI4IDU2LjQ3MDcgMTgxLjI5NyA1NS42NTc1IDE4MC43ODQgNTUuMjAzNVoiIGZpbGw9IiMxMzJFNjIiLz4KPC9nPgo8bWFzayBpZD0ibWFzazEyXzQwM183NyIgc3R5bGU9Im1hc2stdHlwZTpsdW1pbmFuY2UiIG1hc2tVbml0cz0idXNlclNwYWNlT25Vc2UiIHg9IjAiIHk9IjAiIHdpZHRoPSIxOTUiIGhlaWdodD0iNzIiPgo8cGF0aCBkPSJNMCAwSDE5NVY3MkgwVjBaIiBmaWxsPSJ3aGl0ZSIvPgo8L21hc2s+CjxnIG1hc2s9InVybCgjbWFzazEyXzQwM183NykiPgo8cGF0aCBkPSJNNDkuNzY1OSAxNC44MzIzQzQ3LjE2MDIgMTQuMDg4OSA0NC40Mjg2IDEzLjcxMTYgNDEuNjQ3NSAxMy43MTE2SDM4LjE2N0MzNy41NzU3IDEzLjcxMTYgMzcuMDMwNyAxNC4xMzIgMzYuOTc4NSAxNC43MTU2QzM2LjkyMDQgMTUuMzcwNSAzNy40NDAxIDE1LjkxOTkgMzguMDg5IDE1LjkxOTlINDEuNjQ3NUM0NC4yMTk5IDE1LjkxOTkgNDYuNzQzMiAxNi4yNjc5IDQ5LjE0ODggMTYuOTU0MkM2MC43MjM0IDIwLjI1NzYgNjguNTAwMSAzMC44OTczIDY4LjUwMDEgNDMuNDMwNFY0Ny41Njk5QzY4LjUwMDEgNDcuNTc3OSA2OC40OTM3IDQ3LjU4NDggNjguNDg1NiA0Ny41ODU5QzY2LjM5MSA0Ny44NDIyIDY1LjE2NzUgNDguNzkxOCA2NC4wNzE2IDQ5LjY0NkM2Mi45MzIgNTAuNTMzMyA2MS45NDggNTEuMzAwNyA1OS45MDc4IDUxLjMwMDdDNTcuODY2NSA1MS4zMDA3IDU2Ljg4MjQgNTAuNTMzMyA1NS43NDI5IDQ5LjY0NUM1NC40NjM0IDQ4LjY0NzkgNTMuMDEyNCA0Ny41MTc3IDUwLjE5OTUgNDcuNTE3N0M0Ny4zODc4IDQ3LjUxNzcgNDUuOTM4OSA0OC42NDc5IDQ0LjY1OTQgNDkuNjQ2QzQzLjUyMSA1MC41MzMzIDQyLjUzNzQgNTEuMzAwNyA0MC40OTgzIDUxLjMwMDdDMzguNDU4NiA1MS4zMDA3IDM3LjQ3NTcgNTAuNTMzMyAzNi4zMzY2IDQ5LjY0NkMzNS4wNzI4IDQ4LjY2MDcgMzMuODI4OSA0Ny41NDU0IDMxLjA4OTIgNDcuNTE4MkMzMC40ODc3IDQ3LjUxMTggMjkuOTI0OSA0Ny45MzQ0IDI5Ljg3NzYgNDguNTI4NkMyOS44MjU5IDQ5LjE3NjYgMzAuMzQxOSA0OS43MTggMzAuOTg0OSA0OS43MThWNDkuNzI2QzMzLjAyNTEgNDkuNzI2IDMzLjgxODEgNTAuNDkyOCAzNC45NTcxIDUxLjM4MDZDMzYuMjM2NiA1Mi4zNzgyIDM3LjY4NjYgNTMuNTA5IDQwLjQ5ODMgNTMuNTA5QzQzLjMxMDEgNTMuNTA5IDQ0Ljc2MDEgNTIuMzc4MiA0Ni4wMzg5IDUxLjM4MDZDNDcuMTc3NCA1MC40OTI4IDQ4LjE2MDkgNDkuNzI2IDUwLjE5OTUgNDkuNzI2QzUyLjI0MDggNDkuNzI2IDUzLjIyNDkgNTAuNDkyOCA1NC4zNjM5IDUxLjM4MTdDNTUuNjQzOSA1Mi4zNzgyIDU3LjA5NDQgNTMuNTA5IDU5LjkwNzggNTMuNTA5QzYyLjcyMDYgNTMuNTA5IDY0LjE3MDYgNTIuMzc4MiA2NS40NTA2IDUxLjM4MTdDNjYuMzUzNCA1MC42NzcyIDY3LjE2NzkgNTAuMDU2NCA2OC40Nzk3IDQ5LjgyNjJDNjguNDg5OSA0OS44MjQgNjguNTAwMSA0OS44MzI2IDY4LjUwMDEgNDkuODQyN1Y1Ny4xMDcxQzY4LjUwMDEgNTcuNjkyNyA2OC45MjUyIDU4LjIzMjUgNjkuNTE0MyA1OC4yODM3QzcwLjE3NTUgNTguMzQxMiA3MC43Mjk3IDU3LjgyNyA3MC43Mjk3IDU3LjE4NDNWNDMuNDMwNEM3MC43Mjk3IDI5LjkwMyA2Mi4zMDUyIDE4LjQxMDEgNDkuNzY1OSAxNC44MzIzWiIgZmlsbD0iIzBFODhEMyIvPgo8L2c+CjxtYXNrIGlkPSJtYXNrMTNfNDAzXzc3IiBzdHlsZT0ibWFzay10eXBlOmx1bWluYW5jZSIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgd2lkdGg9IjE5NSIgaGVpZ2h0PSI3MiI+CjxwYXRoIGQ9Ik0wIDBIMTk1VjcySDBWMFoiIGZpbGw9IndoaXRlIi8+CjwvbWFzaz4KPGcgbWFzaz0idXJsKCNtYXNrMTNfNDAzXzc3KSI+CjxwYXRoIGQ9Ik0yNi43MjIzIDU2LjA2NDRIMTUuMDM2MkMxNC40NDQ5IDU2LjA2NDQgMTMuODk5OSA1Ni40ODQ5IDEzLjg0ODMgNTcuMDY4NEMxMy43ODk2IDU3LjcyMzMgMTQuMzA5NCA1OC4yNzI3IDE0Ljk1ODIgNTguMjcyN0gyNi42NDQyQzI3LjIzNTUgNTguMjcyNyAyNy43ODA2IDU3Ljg1MjMgMjcuODMyOCA1Ny4yNjg3QzI3Ljg5MDkgNTYuNjEzOCAyNy4zNzExIDU2LjA2NDQgMjYuNzIyMyA1Ni4wNjQ0WiIgZmlsbD0iIzBFODhEMyIvPgo8L2c+CjxtYXNrIGlkPSJtYXNrMTRfNDAzXzc3IiBzdHlsZT0ibWFzay10eXBlOmx1bWluYW5jZSIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgd2lkdGg9IjE5NSIgaGVpZ2h0PSI3MiI+CjxwYXRoIGQ9Ik0wIDBIMTk1VjcySDBWMFoiIGZpbGw9IndoaXRlIi8+CjwvbWFzaz4KPGcgbWFzaz0idXJsKCNtYXNrMTRfNDAzXzc3KSI+CjxwYXRoIGQ9Ik0yNi43MjIzIDUxLjgyNzZIMTUuMDM2MkMxNC40NDQ5IDUxLjgyNzYgMTMuODk5OSA1Mi4yNDggMTMuODQ4MyA1Mi44MzE2QzEzLjc4OTYgNTMuNDg2NSAxNC4zMDk0IDU0LjAzNTkgMTQuOTU4MiA1NC4wMzU5SDI2LjY0NDJDMjcuMjM1NSA1NC4wMzU5IDI3Ljc4MDYgNTMuNjE1NCAyNy44MzI4IDUzLjAzMTlDMjcuODkwOSA1Mi4zNzcgMjcuMzcxMSA1MS44Mjc2IDI2LjcyMjMgNTEuODI3NloiIGZpbGw9IiMwRTg4RDMiLz4KPC9nPgo8bWFzayBpZD0ibWFzazE1XzQwM183NyIgc3R5bGU9Im1hc2stdHlwZTpsdW1pbmFuY2UiIG1hc2tVbml0cz0idXNlclNwYWNlT25Vc2UiIHg9IjAiIHk9IjAiIHdpZHRoPSIxOTUiIGhlaWdodD0iNzIiPgo8cGF0aCBkPSJNMCAwSDE5NVY3MkgwVjBaIiBmaWxsPSJ3aGl0ZSIvPgo8L21hc2s+CjxnIG1hc2s9InVybCgjbWFzazE1XzQwM183NykiPgo8cGF0aCBkPSJNMjYuNzIyNiA0Ny41OTFIMTUuMDM3NkMxNC40NDU4IDQ3LjU5MSAxMy44OTk3IDQ4LjAxMiAxMy44NDggNDguNTk2NkMxMy43OTEgNDkuMjUwNCAxNC4zMTAyIDQ5Ljc5OTMgMTQuOTU4NSA0OS43OTkzSDI2LjY0MzVDMjcuMjM1MyA0OS43OTkzIDI3Ljc4MiA0OS4zNzgzIDI3LjgzMzEgNDguNzkzOEMyNy44OTA2IDQ4LjEzOTkgMjcuMzcxNCA0Ny41OTEgMjYuNzIyNiA0Ny41OTFaIiBmaWxsPSIjMEU4OEQzIi8+CjwvZz4KPG1hc2sgaWQ9Im1hc2sxNl80MDNfNzciIHN0eWxlPSJtYXNrLXR5cGU6bHVtaW5hbmNlIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiB3aWR0aD0iMTk1IiBoZWlnaHQ9IjcyIj4KPHBhdGggZD0iTTAgMEgxOTVWNzJIMFYwWiIgZmlsbD0id2hpdGUiLz4KPC9tYXNrPgo8ZyBtYXNrPSJ1cmwoI21hc2sxNl80MDNfNzcpIj4KPHBhdGggZD0iTTI2LjcyMjMgNDMuMzU0MkgxNS4wMzYyQzE0LjQ0NDkgNDMuMzU0MiAxMy44OTk5IDQzLjc3NDYgMTMuODQ4MyA0NC4zNTgyQzEzLjc4OTYgNDUuMDEzMSAxNC4zMDk0IDQ1LjU2MjUgMTQuOTU4MiA0NS41NjI1SDI2LjY0NDJDMjcuMjM1NSA0NS41NjI1IDI3Ljc4MDYgNDUuMTQyIDI3LjgzMjggNDQuNTU4NUMyNy44OTA5IDQzLjkwMzYgMjcuMzcxMSA0My4zNTQyIDI2LjcyMjMgNDMuMzU0MloiIGZpbGw9IiMwRTg4RDMiLz4KPC9nPgo8bWFzayBpZD0ibWFzazE3XzQwM183NyIgc3R5bGU9Im1hc2stdHlwZTpsdW1pbmFuY2UiIG1hc2tVbml0cz0idXNlclNwYWNlT25Vc2UiIHg9IjAiIHk9IjAiIHdpZHRoPSIxOTUiIGhlaWdodD0iNzIiPgo8cGF0aCBkPSJNMCAwSDE5NVY3MkgwVjBaIiBmaWxsPSJ3aGl0ZSIvPgo8L21hc2s+CjxnIG1hc2s9InVybCgjbWFzazE3XzQwM183NykiPgo8cGF0aCBkPSJNMjYuOTIwNSAzOS4xMTc0SDE1LjIzNDVDMTQuNjQzMiAzOS4xMTc0IDE0LjA5ODIgMzkuNTM3OCAxNC4wNDY1IDQwLjEyMTNDMTMuOTg3OSA0MC43NzYzIDE0LjUwNzYgNDEuMzI1NyAxNS4xNTY1IDQxLjMyNTdIMjYuODQyNUMyNy40MzM4IDQxLjMyNTcgMjcuOTc4OCA0MC45MDUyIDI4LjAzMSA0MC4zMjE3QzI4LjA4OTEgMzkuNjY2OCAyNy41Njk0IDM5LjExNzQgMjYuOTIwNSAzOS4xMTc0WiIgZmlsbD0iIzBFODhEMyIvPgo8L2c+CjxtYXNrIGlkPSJtYXNrMThfNDAzXzc3IiBzdHlsZT0ibWFzay10eXBlOmx1bWluYW5jZSIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgd2lkdGg9IjE5NSIgaGVpZ2h0PSI3MiI+CjxwYXRoIGQ9Ik0wIDBIMTk1VjcySDBWMFoiIGZpbGw9IndoaXRlIi8+CjwvbWFzaz4KPGcgbWFzaz0idXJsKCNtYXNrMThfNDAzXzc3KSI+CjxwYXRoIGQ9Ik0yNy42NDAyIDM0Ljg4MDhIMTUuOTU0N0MxNS4zNjM0IDM0Ljg4MDggMTQuODE4MyAzNS4zMDEzIDE0Ljc2NjIgMzUuODg0OEMxNC43MDgxIDM2LjUzOTcgMTUuMjI3OCAzNy4wODkxIDE1Ljg3NjcgMzcuMDg5MUgyNy41NjIxQzI4LjE1MzQgMzcuMDg5MSAyOC42OTg1IDM2LjY2ODcgMjguNzUwNiAzNi4wODUxQzI4LjgwODggMzUuNDMwMiAyOC4yODkgMzQuODgwOCAyNy42NDAyIDM0Ljg4MDhaIiBmaWxsPSIjMEU4OEQzIi8+CjwvZz4KPG1hc2sgaWQ9Im1hc2sxOV80MDNfNzciIHN0eWxlPSJtYXNrLXR5cGU6bHVtaW5hbmNlIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiB3aWR0aD0iMTk1IiBoZWlnaHQ9IjcyIj4KPHBhdGggZD0iTTAgMEgxOTVWNzJIMFYwWiIgZmlsbD0id2hpdGUiLz4KPC9tYXNrPgo8ZyBtYXNrPSJ1cmwoI21hc2sxOV80MDNfNzcpIj4KPHBhdGggZD0iTTMwLjIyNDcgMzEuNjQ4QzMwLjE3MzEgMzEuMDY0NCAyOS42MjggMzAuNjQ0IDI5LjAzNjggMzAuNjQ0SDE3LjQyODdDMTYuODM3NCAzMC42NDQgMTYuMjkyNCAzMS4wNjQ0IDE2LjI0MDggMzEuNjQ4QzE2LjE4MjcgMzIuMzAyOSAxNi43MDE5IDMyLjg1MjMgMTcuMzUwNyAzMi44NTIzSDI5LjExNDJDMjkuNzYzNiAzMi44NTIzIDMwLjI4MjggMzIuMzAyOSAzMC4yMjQ3IDMxLjY0OFoiIGZpbGw9IiMwRTg4RDMiLz4KPC9nPgo8bWFzayBpZD0ibWFzazIwXzQwM183NyIgc3R5bGU9Im1hc2stdHlwZTpsdW1pbmFuY2UiIG1hc2tVbml0cz0idXNlclNwYWNlT25Vc2UiIHg9IjAiIHk9IjAiIHdpZHRoPSIxOTUiIGhlaWdodD0iNzIiPgo8cGF0aCBkPSJNMCAwSDE5NVY3MkgwVjBaIiBmaWxsPSJ3aGl0ZSIvPgo8L21hc2s+CjxnIG1hc2s9InVybCgjbWFzazIwXzQwM183NykiPgo8cGF0aCBkPSJNMTkuMzQxNSAyOC42MTU1SDMxLjczNjZDMzIuMzI4NSAyOC42MTU1IDMyLjg3MyAyOC4xOTUgMzIuOTI1MiAyNy42MTE1QzMyLjk4MzMgMjYuOTU2NiAzMi40NjQxIDI2LjQwNzIgMzEuODE0NyAyNi40MDcySDE5LjQxOTVDMTguODI4MiAyNi40MDcyIDE4LjI4MzIgMjYuODI3NiAxOC4yMzEgMjcuNDExMUMxOC4xNzI5IDI4LjA2NjEgMTguNjkyNiAyOC42MTU1IDE5LjM0MTUgMjguNjE1NVoiIGZpbGw9IiMwRTg4RDMiLz4KPC9nPgo8bWFzayBpZD0ibWFzazIxXzQwM183NyIgc3R5bGU9Im1hc2stdHlwZTpsdW1pbmFuY2UiIG1hc2tVbml0cz0idXNlclNwYWNlT25Vc2UiIHg9IjAiIHk9IjAiIHdpZHRoPSIxOTUiIGhlaWdodD0iNzIiPgo8cGF0aCBkPSJNMCAwSDE5NVY3MkgwVjBaIiBmaWxsPSJ3aGl0ZSIvPgo8L21hc2s+CjxnIG1hc2s9InVybCgjbWFzazIxXzQwM183NykiPgo8cGF0aCBkPSJNMjIuNTMgMjQuMzc4OUgzNS40NTc4QzM2LjA0OTEgMjQuMzc4OSAzNi41OTQxIDIzLjk1ODUgMzYuNjQ1NyAyMy4zNzQ5QzM2LjcwNDQgMjIuNzIgMzYuMTg0NiAyMi4xNzA2IDM1LjUzNTggMjIuMTcwNkgyMi42MDhDMjIuMDE2NyAyMi4xNzA2IDIxLjQ3MTcgMjIuNTkxMSAyMS40MTk1IDIzLjE3NDZDMjEuMzYxNCAyMy44Mjk1IDIxLjg4MTEgMjQuMzc4OSAyMi41MyAyNC4zNzg5WiIgZmlsbD0iIzBFODhEMyIvPgo8L2c+CjxtYXNrIGlkPSJtYXNrMjJfNDAzXzc3IiBzdHlsZT0ibWFzay10eXBlOmx1bWluYW5jZSIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgd2lkdGg9IjE5NSIgaGVpZ2h0PSI3MiI+CjxwYXRoIGQ9Ik0wIDBIMTk1VjcySDBWMFoiIGZpbGw9IndoaXRlIi8+CjwvbWFzaz4KPGcgbWFzaz0idXJsKCNtYXNrMjJfNDAzXzc3KSI+CjxwYXRoIGQ9Ik0yNy41MTA0IDIwLjE0MjFINDIuMDQ4NkM0Mi42NDA0IDIwLjE0MjEgNDMuMTg1NCAxOS43MjE2IDQzLjIzNzEgMTkuMTM4MUM0My4yOTUyIDE4LjQ4MzIgNDIuNzc1NCAxNy45MzM4IDQyLjEyNjYgMTcuOTMzOEgyNy41ODg1QzI2Ljk5NzIgMTcuOTMzOCAyNi40NTIxIDE4LjM1NDIgMjYuMzk5OSAxOC45Mzc4QzI2LjM0MTggMTkuNTkyNyAyNi44NjE2IDIwLjE0MjEgMjcuNTEwNCAyMC4xNDIxWiIgZmlsbD0iIzBFODhEMyIvPgo8L2c+Cjwvc3ZnPgo=" alt="{{ config('app.name') }}" loading="lazy"  width="195" height="72">


                                </h1>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr><!-- end tr -->
            <tr>
                <td valign="middle" class="hero bg_white" style="padding: 2em 0 2em 0;">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td style="padding: 0 2.5em; text-align: left;">
                                <div class="text">
                                    <h2>@yield('title')</h2>
                                    <p style="line-height: 1.4em; color: #858585;     font-weight: 200;  font-size: 1.2em;">
                                        @yield('description')
                                    </p>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr><!-- end tr -->
            <tr>
                <table class="bg_white" role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">

                    <tr>
                        <td valign="middle" style="text-align:left; padding: 1em 2.5em;">

                            @yield('content')

                        </td>
                    </tr>
                </table>
            </tr><!-- end tr -->
            <!-- 1 Column Text + Button : END -->
        </table>

        <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
            <tr>
                <td valign="middle" class="bg_light footer email-section" style="background: #f7fafa;border-top-color: rgba( 0 , 0 , 0 , 0.05 );border-top-style: solid;border-top-width: 1px;color: rgba( 0 , 0 , 0 , 0.5 );padding: 2.5em;">
                    <table>
                        <tr>
                            <td valign="top" width="100%" style="padding-top: 20px;">
                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                    <tr>
                                        <td style="text-align: left; padding-right: 10px;">
                                            <h3 class="heading">© {{  now()->year }} {{ config('app.name') }}</h3>
                                            <p></p>
                                        </td>
                                    </tr>
                                </table>
                            </td>

                        </tr>
                    </table>
                </td>
            </tr><!-- end: tr -->
            <tr>
                <td class="bg_white" style="text-align: center; ">
                    <p style="margin: 4px 0">Не хотите получать уведомления? Напишите на {{ config('app.mail_username')}} </p>
                </td>
            </tr>
        </table>

    </div>
</center>
</body>
</html>
