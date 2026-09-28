@extends('layouts.app')

@section('title', 'About Pulmify — Clinical intelligence')
@section('description', 'Learn about the Pulmify product concept and how its example workspace brings clinical context together.')

@section('content')
<main id="main-content" class="mx-auto max-w-[1120px]">
    <section class="mx-auto max-w-3xl py-14 text-center sm:py-20">
        <p class="text-[9px] uppercase tracking-[0.2em] text-[#73796c]">About Pulmify</p>
        <h1 class="mt-3 text-4xl font-medium leading-[0.98] tracking-[-0.07em] sm:text-6xl">Clinical context,<br>made clearer.</h1>
        <p class="mx-auto mt-5 max-w-2xl text-sm leading-relaxed text-[#62685c] sm:text-base">
            Pulmify is a product concept for bringing respiratory biomarker trends, patient context, and care-team workflows together in one considered workspace.
        </p>
        <a href="{{ route('home') }}#platform" class="mt-6 inline-flex min-h-10 items-center justify-center bg-[#243719] px-6 text-[9px] uppercase text-white transition-colors hover:bg-[#354d25]">Explore the demo</a>
    </section>

    <section class="grid gap-3 border-t border-[#d8dbd0] py-8 sm:grid-cols-3 sm:py-10">
        @foreach ([
            ['A connected view', 'Example biomarkers and trends are presented alongside patient context instead of in disconnected screens.'],
            ['Designed for teams', 'A shared workspace can help clinical, research, and coordination teams discuss the same picture.'],
            ['Transparent by design', 'The public demo labels fictional content clearly and does not present its sample scores as medical advice.'],
        ] as [$title, $description])
            <article class="border border-[#dfe3d7] bg-[#f8f9f4] p-5">
                <h2 class="text-base font-medium">{{ $title }}</h2>
                <p class="mt-2 text-[11px] leading-relaxed text-[#62685c]">{{ $description }}</p>
            </article>
        @endforeach
    </section>

    <section class="border-t border-[#d8dbd0] py-8 sm:py-10">
        <p class="text-[9px] uppercase tracking-[0.2em] text-[#73796c]">Important note</p>
        <h2 class="mt-2 text-xl font-medium tracking-tight">This is an illustrative product demonstration.</h2>
        <p class="mt-3 max-w-3xl text-sm leading-relaxed text-[#62685c]">
            Patient details, test values, risk indicators, notes, and charts shown in this demo are fictional. Pulmify as presented here does not assess actual patients, diagnose or treat conditions, or replace professional medical judgment.
        </p>
        <a href="{{ route('privacy') }}" class="mt-4 inline-flex text-[10px] uppercase text-[#45583a] underline underline-offset-4">Read the privacy notice</a>
    </section>
</main>
@endsection
