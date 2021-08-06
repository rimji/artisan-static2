<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>
    <section>
        <header>
            <nav>
               <strong>じ <a href="https://www.cocomeo.com/">CoCoMeO</a></strong><br>
            </nav>
        </header>

        <article>
            <section>
                @yield('content')
            </section>
        </article>

        <footer>
             <small><center>
             &copy; 2021 CoCoMeo
             </center></small>
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>

