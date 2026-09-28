@extends('layouts.app')

@section('title', 'Pulmify — Your clinical command center')

@section('content')
<main id="main-content">
    <section id="technology" class="mx-auto max-w-4xl scroll-mt-6 px-2 pb-1 pt-9 text-center sm:pt-12">
        <p class="mb-3 text-[9px] uppercase tracking-[0.2em] text-[#73796c]">The future of respiratory care</p>
        <h1 class="text-balance text-[clamp(2.8rem,7.3vw,5.6rem)] font-medium leading-[0.91] tracking-[-0.075em]">
            Your Clinical<br class="sm:hidden"> Command Center
        </h1>
        <p class="mx-auto mt-4 max-w-[570px] text-[13px] leading-relaxed tracking-[-0.03em] sm:text-[15px]">
            From high-level AI risk scores to individual biomarker fluctuations, the platform offers unprecedented depth, all presented with absolute clarity.
        </p>
        <a href="#request-demo" class="mt-6 inline-flex min-h-10 min-w-44 items-center justify-center bg-[#243719] px-6 text-[9px] uppercase text-white transition-colors hover:bg-[#354d25] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#45583a]">
            Request a demo
        </a>
        <p class="mt-3 text-[8px] uppercase tracking-wide text-[#73796c]">Illustrative product demo · No patient data required</p>
    </section>

    <section id="features" aria-label="Platform highlights" class="mx-auto mt-8 grid max-w-[1120px] gap-px border border-[#d8dbd0] bg-[#d8dbd0] sm:grid-cols-3">
        <article class="bg-[#f8f9f4] p-4 sm:p-5">
            <p class="text-[9px] font-semibold uppercase tracking-[0.12em] text-[#45583a]">01 / Earlier insights</p>
            <p class="mt-2 text-[11px] leading-relaxed text-[#62685c]">See meaningful risk and biomarker trends together, with clinical context in view.</p>
        </article>
        <article class="bg-[#f8f9f4] p-4 sm:p-5">
            <p class="text-[9px] font-semibold uppercase tracking-[0.12em] text-[#45583a]">02 / Patient context</p>
            <p class="mt-2 text-[11px] leading-relaxed text-[#62685c]">Compare example clinical patterns with a cohort and follow changes over time.</p>
        </article>
        <article class="bg-[#f8f9f4] p-4 sm:p-5">
            <p class="text-[9px] font-semibold uppercase tracking-[0.12em] text-[#45583a]">03 / One clear workspace</p>
            <p class="mt-2 text-[11px] leading-relaxed text-[#62685c]">Bring analytics, sample follow-ups, and team notes into one focused view.</p>
        </article>
    </section>

    <section id="services" class="mx-auto mt-14 max-w-[1120px] scroll-mt-6">
        <p class="text-[9px] uppercase tracking-[0.2em] text-[#73796c]">One platform, connected workflows</p>
        <div class="mt-2 flex flex-wrap items-end justify-between gap-3">
            <h2 class="text-2xl font-medium tracking-[-0.055em] sm:text-3xl">Tools for clearer clinical insight.</h2>
            <a href="#platform" class="text-[9px] uppercase tracking-wide text-[#45583a] underline underline-offset-4 hover:text-[#243719]">Explore the platform</a>
        </div>
        <div class="mt-5 grid gap-2 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ([
                ['01 / Observe', 'Biomarker trends', 'Review example changes over time and compare current results with previous tests.'],
                ['02 / Compare', 'Cohort context', 'Explore illustrative cohort benchmarks alongside individual profiles.'],
                ['03 / Explore', 'Risk scenarios', 'See how example assumptions change an illustrative risk estimate.'],
                ['04 / Coordinate', 'Care team notes', 'Keep sample follow-ups and activity visible in one workspace.'],
            ] as [$step, $title, $description])
                <article class="border border-[#dfe3d7] bg-[#f8f9f4] p-4 sm:p-5">
                    <span class="text-[9px] font-medium uppercase tracking-[0.14em] text-[#788366]">{{ $step }}</span>
                    <h3 class="mt-4 text-base font-medium tracking-tight">{{ $title }}</h3>
                    <p class="mt-2 text-[11px] leading-relaxed text-[#62685c]">{{ $description }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section id="platform" class="mx-auto mt-14 max-w-[1120px] scroll-mt-6 border border-[#929788] bg-[#fbfcf7] shadow-[0_12px_38px_rgba(33,40,23,0.07)]">
        <div class="flex flex-wrap items-center justify-between gap-3 border-b border-[#e3e5dc] px-4 py-3">
            <div>
                <p class="text-[9px] font-bold uppercase tracking-wide">Pulmify / Clinical workspace</p>
                <p class="mt-1 text-[8px] uppercase text-[#73796c]">Illustrative demo data — not for clinical use</p>
            </div>
            <span class="inline-flex items-center gap-2 text-[8px] uppercase text-[#45583a]"><i class="h-2 w-2 rounded-full bg-[#718355]"></i>Demo environment</span>
        </div>

        <div class="p-3 sm:p-5">
            <div class="mb-4 flex flex-wrap items-end justify-between gap-3">
                <div>
                    <p class="mb-1 text-[9px] uppercase tracking-[0.16em] text-[#73796c]">Clinical overview / Analytics</p>
                    <h2 class="text-2xl font-medium leading-none tracking-[-0.055em] sm:text-[30px]">Deep Dive Analytics</h2>
                </div>
                <a href="#request-demo" class="border border-[#45583a] px-4 py-2.5 text-[9px] uppercase text-[#243719] transition-colors hover:bg-[#243719] hover:text-white">Explore the platform</a>
            </div>

            <div class="mb-3 grid grid-cols-2 gap-2 xl:grid-cols-4">
                @foreach ([
                    ['Patients tracked', '128', 'Example care cohort'],
                    ['Needs review', '08', 'Illustrative status'],
                    ['Stable profiles', '94', 'Example overview'],
                    ['Workspace status', 'All systems clear', 'Demo data up to date'],
                ] as [$label, $value, $caption])
                    <article class="border border-[#e0e4d8] bg-white p-3 sm:p-4">
                        <p class="text-[8px] font-medium uppercase tracking-[0.12em] text-[#73796c] sm:text-[9px]">{{ $label }}</p>
                        <p class="mt-2 text-xl font-medium leading-tight tracking-[-0.05em] sm:text-2xl">{{ $value }}</p>
                        <p class="mt-2 text-[8px] text-[#73796c] sm:text-[9px]">{{ $caption }}</p>
                    </article>
                @endforeach
            </div>

            <div class="grid gap-2 xl:grid-cols-12">
                <article class="border border-[#dce2d1] bg-[#f0f4e6] p-3 sm:p-4 xl:col-span-4">
                    <div class="flex items-center justify-between border-b border-[#7f8870] pb-2">
                        <h3 class="text-[9px] font-semibold uppercase">Biomarker trend</h3>
                        <span class="text-[8px] uppercase text-[#73796c]">Example, 12 months</span>
                    </div>
                    <p class="mt-2 text-[9px] leading-relaxed text-[#4b5146]">A fictional example of a biomarker trend over time.</p>
                    <div role="img" aria-label="Illustrative biomarker trend chart" class="mt-4 flex h-28 items-end justify-around gap-1 border-b border-l border-[#c5cabc] bg-[linear-gradient(to_top,#e1e5d9_1px,transparent_1px)] bg-[size:100%_25%] px-2">
                        @foreach ([35, 28, 42, 38, 52, 45, 61, 55, 72, 64, 82, 75] as $height)
                            <span class="w-full max-w-4 rounded-t-sm bg-[#45583a]" style="height: {{ $height }}%"></span>
                        @endforeach
                    </div>
                    <div class="mt-1 flex justify-between text-[8px] uppercase text-[#646b5d]"><span>Q1</span><span>Q2</span><span>Q3</span><span>Q4</span></div>
                </article>

                <article class="border border-[#e0e4d8] bg-white p-3 sm:p-4 xl:col-span-4">
                    <div class="flex items-center justify-between border-b border-[#7f8870] pb-2">
                        <h3 class="text-[9px] font-semibold uppercase">Test comparison</h3>
                        <span class="text-[8px] uppercase text-[#73796c]">Example values</span>
                    </div>
                    <div class="mt-4 grid h-36 grid-cols-4 border border-[#adb2a5]">
                        @foreach ([
                            ['Lung', [82, 62, 72, 53]],
                            ['Metabolic', [67, 48, 58, 38]],
                            ['Immune', [78, 57, 68, 45]],
                            ['Other', [88, 65, 74, 52]],
                        ] as [$group, $values])
                            <div class="flex min-w-0 flex-col border-r border-[#adb2a5] last:border-r-0">
                                <div class="flex flex-1 items-end justify-around gap-1 px-1">
                                    @foreach ($values as $index => $height)
                                        <span @class(['w-2 sm:w-3', 'bg-[#243719]' => $index % 2 === 0, 'bg-[#cdd1c4]' => $index % 2 !== 0]) style="height: {{ $height }}%"></span>
                                    @endforeach
                                </div>
                                <span class="border-t border-[#adb2a5] py-1 text-center text-[7px] uppercase text-[#444a3d]">{{ $group }}</span>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-2 flex gap-3 text-[8px] uppercase text-[#62685c]"><span><i class="mr-1 inline-block h-2 w-2 bg-[#243719]"></i>Current</span><span><i class="mr-1 inline-block h-2 w-2 bg-[#cdd1c4]"></i>Previous</span></div>
                </article>

                <article class="border border-[#e0e4d8] bg-white p-3 sm:p-4 xl:col-span-4">
                    <div class="flex items-center justify-between border-b border-[#7f8870] pb-2">
                        <h3 class="text-[9px] font-semibold uppercase">Illustrative risk index</h3>
                        <span class="text-[8px] uppercase text-[#73796c]">Sample only</span>
                    </div>
                    <div class="mt-5 flex items-center gap-4">
                        <div role="img" aria-label="Illustrative sample risk score 18 percent" class="relative h-24 w-24 shrink-0">
                            <svg viewBox="0 0 100 100" class="h-full w-full -rotate-90">
                                <circle cx="50" cy="50" r="39" fill="none" stroke="#e0e9ca" stroke-width="10"></circle>
                                <circle cx="50" cy="50" r="39" fill="none" stroke="#45583a" stroke-width="10" stroke-dasharray="44.1 245.04"></circle>
                            </svg>
                            <span class="absolute inset-0 flex items-center justify-center text-xl font-medium">18<span class="text-xs">%</span></span>
                        </div>
                        <div class="min-w-0 space-y-2 text-[9px] uppercase">
                            <p class="flex items-center gap-2"><i class="h-2 w-2 bg-[#45583a]"></i>Baseline example <span class="ml-auto">12%</span></p>
                            <p class="flex items-center gap-2"><i class="h-2 w-2 bg-[#aab68d]"></i>Example change <span class="ml-auto">+6%</span></p>
                            <p class="border-t border-[#d4d8ce] pt-2 text-[8px] text-[#73796c]">Not a real patient score</p>
                        </div>
                    </div>
                </article>
            </div>

            <div class="mt-3 border border-[#e0e4d8] bg-white p-3 sm:p-4">
                <div class="flex flex-wrap items-center justify-between gap-2">
                    <div><p class="text-[9px] uppercase tracking-[0.14em] text-[#73796c]">Care team / Example records</p><h3 class="mt-1 text-base font-medium">Recent patient activity</h3></div>
                    <span class="text-[8px] uppercase text-[#73796c]">Fictional names and statuses</span>
                </div>
                <div class="mt-3 grid gap-2 sm:grid-cols-3">
                    @foreach ([
                        ['Sample patient A', 'Biomarker panel reviewed', 'Stable'],
                        ['Sample patient B', 'Follow-up requested', 'Review needed'],
                        ['Sample patient C', 'Previous results compared', 'Monitoring'],
                    ] as [$patient, $activity, $status])
                        <div class="flex items-center justify-between gap-3 border-t border-[#e5e7df] py-2">
                            <div><p class="text-[10px] font-medium">{{ $patient }}</p><p class="mt-1 text-[9px] text-[#73796c]">{{ $activity }}</p></div>
                            <span class="shrink-0 bg-[#e5ebd9] px-2 py-1 text-[8px] uppercase text-[#354d25]">{{ $status }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="mx-auto mt-14 max-w-[1120px] scroll-mt-6 border-t border-[#d8dbd0] pt-7">
        <p class="text-[9px] uppercase tracking-[0.2em] text-[#73796c]">Built for multidisciplinary care</p>
        <div class="mt-2 grid gap-5 lg:grid-cols-[0.8fr_1.2fr] lg:items-end">
            <h2 class="text-2xl font-medium tracking-[-0.055em] sm:text-3xl">Better decisions start with a shared view.</h2>
            <p class="max-w-xl text-sm leading-relaxed text-[#62685c]">Pulmify brings clinical context, biomarker patterns, and day-to-day follow-up into a single workspace designed to support collaboration across care and research teams.</p>
        </div>
        <div class="mt-5 grid gap-2 sm:grid-cols-3">
            @foreach ([
                ['Clinical teams', 'A clearer patient picture', 'Bring important signals and example history into the same conversation.'],
                ['Research teams', 'Patterns with context', 'Explore sample biomarker trends and cohort comparisons side by side.'],
                ['Care coordinators', 'Follow-ups in view', 'Keep example notes, orders, and next steps easy to find.'],
            ] as [$team, $title, $description])
                <article class="border border-[#dfe3d7] bg-white p-4">
                    <p class="text-[9px] uppercase tracking-[0.14em] text-[#788366]">{{ $team }}</p>
                    <h3 class="mt-2 text-sm font-medium">{{ $title }}</h3>
                    <p class="mt-1.5 text-[10px] leading-relaxed text-[#73796c]">{{ $description }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section id="faq" class="mx-auto mt-14 grid max-w-[1120px] scroll-mt-6 gap-6 border-t border-[#d8dbd0] pt-7 lg:grid-cols-[0.75fr_1.25fr]">
        <div>
            <p class="text-[9px] uppercase tracking-[0.2em] text-[#73796c]">Frequently asked questions</p>
            <h2 class="mt-2 text-2xl font-medium tracking-[-0.055em] sm:text-3xl">Good to know.</h2>
            <p class="mt-3 max-w-sm text-sm leading-relaxed text-[#62685c]">A few details about the demo, sample data, and getting in touch.</p>
        </div>
        <div class="divide-y divide-[#dfe3d7] border-y border-[#dfe3d7]">
            @foreach ([
                ['Do I need a database to run the site?', 'No. This version uses Laravel file sessions and cache and does not read or write application data to a database.'],
                ['Is the clinical information real?', 'No. All charts, patient records, notes, and risk numbers are fictional examples. They are not medical advice or a diagnostic tool.'],
                ['How does the demo form work?', 'The form validates your request on the Laravel server and emails it to the configured contact address after SMTP is set up. Contact details are not stored in a database.'],
                ['What happens if email is not configured?', 'The site tells you SMTP needs configuration instead of claiming the request was sent. You can still contact the team directly by email.'],
            ] as [$question, $answer])
                <details class="group py-4">
                    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 text-sm font-medium marker:content-none">
                        {{ $question }}
                        <span aria-hidden="true" class="text-lg font-normal text-[#65734e] transition-transform group-open:rotate-45">+</span>
                    </summary>
                    <p class="mt-3 max-w-xl text-[11px] leading-relaxed text-[#62685c]">{{ $answer }}</p>
                </details>
            @endforeach
        </div>
    </section>

    <section id="contact" class="mx-auto mt-10 flex max-w-[1120px] scroll-mt-6 flex-wrap items-center justify-between gap-4 border border-[#d8dbd0] bg-[#e8eddb] p-4 sm:p-5">
        <div>
            <p class="text-[9px] uppercase tracking-[0.16em] text-[#73796c]">Have another question?</p>
            <h2 class="mt-1 text-lg font-medium tracking-tight">We’d be happy to hear from you.</h2>
        </div>
        <a href="mailto:{{ config('services.pulmify.contact_email') }}?subject=Question%20about%20Pulmify" class="inline-flex min-h-10 items-center justify-center border border-[#45583a] px-5 text-[9px] uppercase text-[#243719] transition-colors hover:bg-[#243719] hover:text-white">
            Email {{ config('services.pulmify.contact_email') }}
        </a>
    </section>

    <section id="request-demo" class="mx-auto mt-12 grid max-w-[1120px] scroll-mt-6 gap-7 border-t border-dotted border-[#a6aa9a] py-8 sm:py-10 lg:grid-cols-[0.9fr_1.1fr] lg:gap-12">
        <div class="pt-1">
            <p class="text-[9px] uppercase tracking-[0.2em] text-[#73796c]">Clarity at every level of care</p>
            <h2 class="mt-2 text-3xl font-medium tracking-[-0.06em] sm:text-4xl">See the full picture.</h2>
            <p class="mt-3 max-w-md text-sm leading-relaxed text-[#62685c]">Tell us a little about your organization and we’ll help you explore the Pulmify demo.</p>
            <p class="mt-5 text-[9px] leading-relaxed text-[#73796c]">Please do not include patient names, diagnoses, or other health information.</p>
        </div>

        <form method="POST" action="{{ route('contact.store') }}" class="grid gap-3 border border-[#d8dbd0] bg-[#f8f9f4] p-4 sm:grid-cols-2 sm:p-5">
            @csrf
            <div aria-hidden="true" class="absolute -left-[10000px] top-auto h-px w-px overflow-hidden">
                <label for="company_website">Leave this field empty</label>
                <input id="company_website" name="company_website" type="text" tabindex="-1" autocomplete="off">
            </div>
            @if (session('contact_success'))
                <p role="status" class="border border-[#c9d6b6] bg-[#edf3e4] p-3 text-sm text-[#354d25] sm:col-span-2">{{ session('contact_success') }}</p>
            @endif
            @if (session('contact_error'))
                <p role="alert" class="border border-[#e2c9b7] bg-[#fbf0e8] p-3 text-sm text-[#744a2b] sm:col-span-2">{{ session('contact_error') }}</p>
            @endif

            <label class="grid gap-1.5 text-[9px] font-medium uppercase tracking-wide text-[#62685c]">
                Your name
                <input name="name" value="{{ old('name') }}" autocomplete="name" required maxlength="100" aria-invalid="{{ $errors->has('name') ? 'true' : 'false' }}" class="h-10 border border-[#d4d8cc] bg-white px-3 text-sm font-normal normal-case tracking-normal text-[#10140d] outline-none focus:border-[#45583a] focus:ring-1 focus:ring-[#45583a]">
                @error('name')<span class="text-[10px] normal-case text-[#8a442c]">{{ $message }}</span>@enderror
            </label>
            <label class="grid gap-1.5 text-[9px] font-medium uppercase tracking-wide text-[#62685c]">
                Work email
                <input name="email" type="email" value="{{ old('email') }}" autocomplete="email" required maxlength="254" aria-invalid="{{ $errors->has('email') ? 'true' : 'false' }}" class="h-10 border border-[#d4d8cc] bg-white px-3 text-sm font-normal normal-case tracking-normal text-[#10140d] outline-none focus:border-[#45583a] focus:ring-1 focus:ring-[#45583a]">
                @error('email')<span class="text-[10px] normal-case text-[#8a442c]">{{ $message }}</span>@enderror
            </label>
            <label class="grid gap-1.5 text-[9px] font-medium uppercase tracking-wide text-[#62685c] sm:col-span-2">
                Organization
                <input name="organization" value="{{ old('organization') }}" autocomplete="organization" required maxlength="120" aria-invalid="{{ $errors->has('organization') ? 'true' : 'false' }}" class="h-10 border border-[#d4d8cc] bg-white px-3 text-sm font-normal normal-case tracking-normal text-[#10140d] outline-none focus:border-[#45583a] focus:ring-1 focus:ring-[#45583a]">
                @error('organization')<span class="text-[10px] normal-case text-[#8a442c]">{{ $message }}</span>@enderror
            </label>
            <label class="grid gap-1.5 text-[9px] font-medium uppercase tracking-wide text-[#62685c] sm:col-span-2">
                What would you like to explore?
                <textarea name="message" required maxlength="1000" rows="3" aria-invalid="{{ $errors->has('message') ? 'true' : 'false' }}" class="resize-y border border-[#d4d8cc] bg-white px-3 py-2 text-sm font-normal normal-case tracking-normal text-[#10140d] outline-none focus:border-[#45583a] focus:ring-1 focus:ring-[#45583a]">{{ old('message') }}</textarea>
                @error('message')<span class="text-[10px] normal-case text-[#8a442c]">{{ $message }}</span>@enderror
            </label>
            @error('company_website')<p role="alert" class="text-[10px] text-[#8a442c] sm:col-span-2">{{ $message }}</p>@enderror
            <button type="submit" class="inline-flex min-h-10 items-center justify-center bg-[#243719] px-6 text-[9px] uppercase text-white transition-colors hover:bg-[#354d25] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#45583a] sm:col-span-2 sm:justify-self-start">
                Send demo request
            </button>
            <p class="text-[9px] leading-relaxed text-[#73796c] sm:col-span-2">Your request is sent by email only after SMTP is configured. We do not save form submissions in a database.</p>
        </form>
    </section>

    <p class="mx-auto mt-8 max-w-[1120px] border-t border-[#d5d8cc] pt-4 text-[9px] leading-relaxed text-[#73796c]">
        Pulmify is shown here as an illustrative product concept. Example content is fictional and is not intended for diagnosis, treatment, or other clinical decision-making.
    </p>
</main>
@endsection
