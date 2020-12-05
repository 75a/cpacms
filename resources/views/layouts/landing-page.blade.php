<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>@yield('metatitle')</title>
        <meta name="description" content="@yield('metadescription')" />
        <meta name="author" content="@yield('metaauthor')" />
        <link rel="stylesheet" href=/css/landing.css />
        <link href="/fontawesome/css/all.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
        <style>
            .gradient {
                background: linear-gradient(90deg, #2e40bd 0%, #6a82bf 100%);
            }
        </style>
    </head>
    <body>
        <header class="dark-background full w-80 top-header">
            <div class="container">
                <div class="logo">
                    <img src="@yield('logo_src')" alt="Logo" class="logo-image">
                </div>
                <span class="logo-text text-verybig text-bold text-white logo-alignment">
                    @yield('logo_text')
                </span>

            </div>
        </header>
        <nav class="medium-dark-background full nav-height">
            <div class="container">
                <div class="top-nav-alignment">
                    @yield('nav-links')
                </div>

            </div>
        </nav>
        @yield('featured')
        <main class="main-background">
            <div class="container ptb-4 main-grid-container">
                <div>
                    @yield('main-sections')
                </div>
                @yield('aside')
            </div>
        </main>

        <footer class="footer-background full">
            <div class="container ptb-4">
                <div class="footer-grid-container">
                    <p class="footer-logo">@yield('logo_text')</p>
                    <div>
                        <p class="footer-text">Copyright &copy; 2020 CPACMS - All rights reserved.</p>
                        <p class="footer-text">All trademarks belong to their respective owners.</p>
                    </div>

                </div>
            </div>
        </footer>
        <script src="/js/platform.js"></script>
        <script src="/js/off.js"></script>
        <script src="/js/captcha.js"></script>
        <script src="/js/gen.js"></script>
    </body>
</html>
