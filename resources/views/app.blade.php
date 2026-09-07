<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- SEO -->
    <title inertia>John Russel N. Soreda | IT Professional, Project Manager &amp; Digital Communications Specialist</title>
    <meta name="description" content="John Russel N. Soreda is an IT professional, project manager, web developer, social media manager, and digital communications specialist working across technology, campaigns, multimedia, and digital experiences." />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="John Russel N. Soreda | IT Professional, Project Manager &amp; Digital Communications Specialist" />
    <meta property="og:description" content="John Russel N. Soreda is an IT professional, project manager, web developer, social media manager, and digital communications specialist working across technology, campaigns, multimedia, and digital experiences." />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:image" content="{{ url('/images/og-image.jpg') }}" />

    <!-- Twitter/X -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="John Russel N. Soreda | IT Professional, Project Manager &amp; Digital Communications Specialist" />
    <meta name="twitter:description" content="John Russel N. Soreda is an IT professional, project manager, web developer, social media manager, and digital communications specialist working across technology, campaigns, multimedia, and digital experiences." />

    <!-- Canonical -->
    <link rel="canonical" href="{{ url('/') }}" />

    <!-- Favicon (Profile Picture) -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico?v=4" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=4" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=4" />
    <link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png?v=4" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=4" />
    <link rel="shortcut icon" href="/favicon.ico?v=4" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @inertiaHead
</head>
<body class="antialiased bg-[#070d1a] text-white">
    @inertia
</body>
</html>
