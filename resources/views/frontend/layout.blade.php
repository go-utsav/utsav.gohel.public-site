<!-- jay gansesh jay chamunda maa jay mamadev -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Dynamic Title & Meta Tags -->
    <title>{{ $meta_title ?? 'Utsav Gohel - Full Stack Developer & Cloud Architect' }}</title>
    <meta name="description"
        content="{{ $meta_description ?? 'Full Stack Developer and Cloud Solutions Architect specializing in scalable web applications and cloud infrastructure.' }}">
    <meta name="keywords"
        content="{{ $meta_keywords ?? 'full stack developer, cloud architect, web development, AWS, React, Node.js' }}">
    <meta name="author" content="Utsav Gohel">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $meta_title ?? 'Utsav Gohel - Full Stack Developer & Cloud Architect' }}">
    <meta property="og:description"
        content="{{ $meta_description ?? 'Full Stack Developer and Cloud Solutions Architect specializing in scalable web applications and cloud infrastructure.' }}">
    <meta property="og:image" content="{{ $meta_image ?? asset('images/og-image.jpg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title"
        content="{{ $meta_title ?? 'Utsav Gohel - Full Stack Developer & Cloud Architect' }}">
    <meta property="twitter:description"
        content="{{ $meta_description ?? 'Full Stack Developer and Cloud Solutions Architect specializing in scalable web applications and cloud infrastructure.' }}">
    <meta property="twitter:image" content="{{ $meta_image ?? asset('images/og-image.jpg') }}">

    <!-- Preconnect to External Domains -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net">

    <!-- Preload Critical Assets -->
    <link rel="preload"
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Sora:wght@100..800&display=swap"
        as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" as="style">

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Sora:wght@100..800&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="manifest" href="/site.webmanifest" />

    <!-- Google Analytics -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K3DN6CKZV8"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-K3DN6CKZV8');
    </script>

    <!-- Hotjar Tracking Code -->
    <!-- Hotjar Tracking Code for https://utsav.cloud/ -->
    <script>
    (function(h, o, t, j, a, r) {
        h.hj = h.hj || function() {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {
            hjid: 6419524,
            hjsv: 6
        };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
</head>

<body>
    @include('frontend.shared.nav')

    <main>
        @yield('content')
    </main>

    @include('frontend.shared.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>

    <!-- Custom JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>