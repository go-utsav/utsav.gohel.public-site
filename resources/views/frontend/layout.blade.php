<!-- jay gansesh jay chamunda maa jay mamadev -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Utsav Gohel - Full Stack Developer & Cloud Architect</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Full Stack Developer and Cloud Solutions Architect specializing in scalable web applications and cloud infrastructure.">
    <meta name="keywords" content="full stack developer, cloud architect, web development, AWS, React, Node.js">
    <meta name="author" content="Utsav Gohel">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- link  -->
    <link rel="stylesheet" href="/style/style.css">    
    <!-- Simple Custom Styles -->
   <link rel="stylesheet" href="assests/style/style.css">
</head>

<body>

    @include('frontend.shared.nav')

    @yield('content')

    @include('frontend.shared.footer')

</body>
</html>

