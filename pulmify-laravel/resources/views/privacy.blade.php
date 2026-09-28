@extends('layouts.app')

@section('title', 'Privacy — Pulmify')
@section('description', 'Privacy details for the Pulmify demo website and its email-only contact form.')

@section('content')
<main id="main-content" class="mx-auto max-w-3xl py-12 sm:py-16">
    <p class="text-[9px] uppercase tracking-[0.2em] text-[#73796c]">Website information</p>
    <h1 class="mt-2 text-4xl font-medium tracking-[-0.07em] sm:text-5xl">Privacy notice</h1>
    <p class="mt-3 text-[11px] text-[#73796c]">For this Pulmify demonstration website.</p>

    <div class="mt-8 space-y-7 border-t border-[#d8dbd0] pt-7 text-sm leading-relaxed text-[#62685c]">
        <section>
            <h2 class="text-base font-medium text-[#10140d]">Demo content</h2>
            <p class="mt-2">Patient names, clinical records, measurements, notes, and risk scores shown on this site are fictional examples. Do not use this demo to enter or share patient health information.</p>
        </section>
        <section>
            <h2 class="text-base font-medium text-[#10140d]">Contact requests</h2>
            <p class="mt-2">The contact form validates the fields on the web server and, once an administrator has configured SMTP, sends the request to the configured Pulmify contact email. This application does not store contact requests in a database. Do not include sensitive health information in your message.</p>
        </section>
        <section>
            <h2 class="text-base font-medium text-[#10140d]">Temporary technical data</h2>
            <p class="mt-2">Laravel uses a temporary file-based session for security tokens and form status, plus a file-based cache for request throttling. Validation errors are not flashed with submitted field values. The hosting provider may keep standard server logs according to its own policies.</p>
        </section>
        <section>
            <h2 class="text-base font-medium text-[#10140d]">Email delivery</h2>
            <p class="mt-2">When SMTP is configured, the contents of a submitted contact request are processed by the configured email service and delivered to the configured recipient. Email providers may retain messages under their own terms and retention policies.</p>
        </section>
    </div>

    <a href="{{ route('home') }}" class="mt-8 inline-flex min-h-10 items-center justify-center border border-[#45583a] px-5 text-[9px] uppercase text-[#243719] transition-colors hover:bg-[#243719] hover:text-white">Back to Pulmify</a>
</main>
@endsection
