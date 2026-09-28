<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f1f2e9">
    <meta name="description" content="@yield('description', 'Pulmify brings respiratory biomarker trends, clinical context, and team workflows together in one clear workspace.')">
    <title>@yield('title', 'Pulmify — Clinical intelligence')</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-0 min-h-screen bg-[#23291f] font-sans text-[#10140d] antialiased">
    <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-50 focus:bg-white focus:px-4 focus:py-3 focus:text-sm focus:text-[#243719]">
        Skip to content
    </a>
    <div class="mx-auto my-2 min-h-[calc(100vh-1rem)] max-w-[1440px] border border-[#d1d2c5] bg-[#f1f2e9] bg-[radial-gradient(#c8cbbb_0.75px,transparent_0.75px)] bg-[size:58px_60px] px-4 pb-8 pt-4 sm:my-3 sm:px-7 sm:pb-12 lg:px-10">
        <header class="mx-auto grid max-w-[1360px] grid-cols-[1fr_auto] items-center gap-y-3">
            <a href="{{ route('home') }}" class="w-fit text-[27px] font-semibold leading-none tracking-[-0.08em] text-[#11140d] no-underline" aria-label="Pulmify home">
                Pulmify<span class="align-top text-xs text-[#73805f]">®</span>
            </a>
            <a href="{{ route('home') }}#request-demo" class="justify-self-end bg-[#243719] px-4 py-3 text-center text-[9px] uppercase text-white transition-colors hover:bg-[#354d25] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#45583a] sm:min-w-44 sm:px-5">
                Request a demo
            </a>
            <div class="relative col-span-2 w-full max-w-[860px] justify-self-center">
                <nav aria-label="Main navigation" class="flex flex-nowrap items-center justify-start gap-x-5 overflow-x-auto border border-dotted border-[#a6aa9a] px-4 py-2.5 text-[8px] uppercase [scrollbar-width:none] [&::-webkit-scrollbar]:hidden sm:justify-center sm:gap-x-6 sm:py-3 sm:text-[9px]">
                    <a href="{{ route('home') }}#technology" class="shrink-0 whitespace-nowrap underline-offset-4 hover:text-[#617344] hover:underline">Technology</a>
                    <a href="{{ route('home') }}#features" class="shrink-0 whitespace-nowrap underline-offset-4 hover:text-[#617344] hover:underline">Highlights</a>
                    <a href="{{ route('home') }}#services" class="shrink-0 whitespace-nowrap underline-offset-4 hover:text-[#617344] hover:underline">Services</a>
                    <a href="{{ route('home') }}#platform" class="shrink-0 whitespace-nowrap underline-offset-4 hover:text-[#617344] hover:underline">Platform</a>
                    <a href="{{ route('about') }}" class="shrink-0 whitespace-nowrap underline-offset-4 hover:text-[#617344] hover:underline">About</a>
                    <a href="{{ route('home') }}#faq" class="shrink-0 whitespace-nowrap underline-offset-4 hover:text-[#617344] hover:underline">FAQ</a>
                    <a href="{{ route('home') }}#contact" class="shrink-0 whitespace-nowrap underline-offset-4 hover:text-[#617344] hover:underline">Contact</a>
                </nav>
                <span aria-hidden="true" class="pointer-events-none absolute inset-y-px right-px flex w-5 items-center justify-end bg-gradient-to-l from-[#f1f2e9] to-transparent pr-1 text-[#73796c] min-[615px]:hidden">›</span>
            </div>
        </header>

        @yield('content')

        <footer class="mx-auto mt-10 flex max-w-[1120px] flex-wrap items-center justify-between gap-3 border-t border-[#d5d8cc] pt-4 text-[8px] uppercase text-[#73796c]">
            <a href="{{ route('home') }}" class="font-semibold tracking-wide text-[#10140d]">Pulmify</a>
            <nav aria-label="Footer navigation" class="flex flex-wrap gap-x-4 gap-y-2">
                <a href="{{ route('about') }}" class="hover:text-[#354d25]">About</a>
                <a href="{{ route('home') }}#faq" class="hover:text-[#354d25]">FAQ</a>
                <a href="{{ route('privacy') }}" class="hover:text-[#354d25]">Privacy</a>
                <a href="{{ route('home') }}#contact" class="hover:text-[#354d25]">Contact</a>
            </nav>
            <span>© {{ date('Y') }} Pulmify</span>
        </footer>
    </div>
</body>
</html>
