<section
    id="open-source"
    class="transition-colors duration-500 bg-white border-t border-neutral-200 text-neutral-950 dark:border-neutral-800 dark:bg-neutral-950 dark:text-neutral-50"
>
    <div class="px-6 mx-auto max-w-7xl py-28 lg:px-8 lg:py-36">


    {{-- ============================================================
        Header
    ============================================================= --}}
    <div class="grid gap-8 lg:grid-cols-12 lg:gap-16">

        <div class="lg:col-span-3">
            <p
                class="text-sm font-medium uppercase tracking-[0.25em] text-neutral-400 dark:text-neutral-500"
            >
                Open Source
            </p>
        </div>

        <div class="lg:col-span-9">

            <h2
                class="max-w-4xl text-3xl font-semibold tracking-tight text-neutral-950 sm:text-4xl lg:text-5xl dark:text-neutral-50"
            >
                Software built to be

                <span class="text-neutral-400 dark:text-neutral-600">
                    useful beyond one project.
                </span>
            </h2>

            <p
                class="max-w-2xl mt-6 text-lg leading-8 text-neutral-600 dark:text-neutral-400"
            >
                I build small developer tools and reusable packages
                around problems I have encountered while building
                real applications.
            </p>

        </div>

    </div>


    {{-- ============================================================
        Featured Package — Nepal Geography
    ============================================================= --}}
    <div class="mt-20">

        @php
            $nepalGeography = collect($openSource)
                ->firstWhere('package', 'roshan-dhungana/nepal-geography');
        @endphp

        @if($nepalGeography)

            <article
                class="
                    rounded-[2rem]
                    border
                    border-neutral-200
                    bg-neutral-50
                    p-8
                    transition
                    duration-300
                    hover:border-neutral-400
                    sm:p-10
                    lg:p-14
                    dark:border-neutral-800
                    dark:bg-neutral-900/40
                    dark:hover:border-neutral-600
                "
            >

                <div class="grid gap-12 lg:grid-cols-12 lg:items-start">

                    {{-- Main Information --}}
                    <div class="lg:col-span-8">

                        <div class="flex items-center gap-3">

                            <span
                                class="text-xs font-medium uppercase tracking-[0.2em] text-neutral-400 dark:text-neutral-500"
                            >
                                Featured Package
                            </span>

                            <span class="text-neutral-300 dark:text-neutral-700">
                                /
                            </span>

                            <span
                                class="text-xs text-neutral-400 dark:text-neutral-500"
                            >
                                {{ $nepalGeography['package'] }}
                            </span>

                        </div>


                        <h3
                            class="mt-6 text-4xl font-semibold tracking-tight text-neutral-950 sm:text-5xl dark:text-neutral-50"
                        >
                            Nepal Geography
                        </h3>


                        <p
                            class="max-w-3xl mt-6 text-lg leading-8 text-neutral-600 dark:text-neutral-400"
                        >
                            A reusable PHP package containing Nepal's
                            administrative geography — provinces,
                            districts, and municipalities — designed to
                            make location-based features easier to build
                            in Laravel applications.
                        </p>


                        {{-- Geography hierarchy --}}
                        <div class="grid grid-cols-1 gap-3 mt-10 sm:grid-cols-3">

                            <div
                                class="p-5 border rounded-2xl border-neutral-200 dark:border-neutral-800"
                            >
                                <p class="text-xs font-medium tracking-wider uppercase text-neutral-400">
                                    Level 01
                                </p>

                                <p class="mt-2 text-base font-medium text-neutral-950 dark:text-neutral-50">
                                    Provinces
                                </p>
                            </div>


                            <div
                                class="p-5 border rounded-2xl border-neutral-200 dark:border-neutral-800"
                            >
                                <p class="text-xs font-medium tracking-wider uppercase text-neutral-400">
                                    Level 02
                                </p>

                                <p class="mt-2 text-base font-medium text-neutral-950 dark:text-neutral-50">
                                    Districts
                                </p>
                            </div>


                            <div
                                class="p-5 border rounded-2xl border-neutral-200 dark:border-neutral-800"
                            >
                                <p class="text-xs font-medium tracking-wider uppercase text-neutral-400">
                                    Level 03
                                </p>

                                <p class="mt-2 text-base font-medium text-neutral-950 dark:text-neutral-50">
                                    Municipalities
                                </p>
                            </div>

                        </div>

                    </div>


                    {{-- Meta --}}
                    <div class="lg:col-span-4 lg:flex lg:justify-end">

                        <div class="w-full max-w-sm">

                            <div class="flex flex-wrap gap-2">

                                @foreach($nepalGeography['technologies'] as $technology)

                                    <span
                                        class="px-4 py-2 text-xs font-medium bg-white rounded-full text-neutral-600 dark:bg-neutral-800 dark:text-neutral-300"
                                    >
                                        {{ $technology }}
                                    </span>

                                @endforeach

                            </div>


                            <div
                                class="pt-6 mt-8 border-t border-neutral-200 dark:border-neutral-800"
                            >

                                <a
                                    href="{{ $nepalGeography['packagist_url'] }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="inline-flex items-center gap-2 text-sm font-medium text-neutral-950 group/link dark:text-neutral-50"
                                >
                                    View Package

                                    <span
                                        class="transition-transform duration-300 group-hover/link:translate-x-1"
                                    >
                                        ↗
                                    </span>
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </article>

        @endif

    </div>


    {{-- ============================================================
        Other Packages
    ============================================================= --}}
    <div class="mt-6 space-y-4">

        @foreach($openSource as $package)

            @if($package['package'] !== 'roshan-dhungana/nepal-geography')

                <article
                    class="
                        group
                        rounded-[2rem]
                        border
                        border-neutral-200
                        bg-white
                        p-8
                        transition
                        duration-300
                        hover:border-neutral-400
                        sm:p-10
                        lg:p-12
                        dark:border-neutral-800
                        dark:bg-neutral-950
                        dark:hover:border-neutral-600
                    "
                >

                    <div class="grid gap-10 lg:grid-cols-12 lg:items-center">

                        <div class="lg:col-span-7">

                            <div class="flex items-center gap-3">

                                <span
                                    class="text-xs font-medium uppercase tracking-[0.2em] text-neutral-400 dark:text-neutral-500"
                                >
                                    Developer Tool
                                </span>

                                <span class="text-neutral-300 dark:text-neutral-700">
                                    /
                                </span>

                                <span
                                    class="text-xs text-neutral-400 dark:text-neutral-500"
                                >
                                    {{ $package['package'] }}
                                </span>

                            </div>


                            <h3
                                class="mt-6 text-3xl font-semibold tracking-tight text-neutral-950 sm:text-4xl dark:text-neutral-50"
                            >
                                {{ $package['name'] }}
                            </h3>


                            <p
                                class="max-w-2xl mt-5 text-base leading-7 text-neutral-600 dark:text-neutral-400"
                            >
                                {{ $package['description'] }}
                            </p>

                        </div>


                        <div class="lg:col-span-5 lg:flex lg:justify-end">

                            <div class="w-full max-w-sm">

                                <div class="flex flex-wrap gap-2">

                                    @foreach($package['technologies'] as $technology)

                                        <span
                                            class="px-4 py-2 text-xs font-medium rounded-full bg-neutral-100 text-neutral-600 dark:bg-neutral-800 dark:text-neutral-300"
                                        >
                                            {{ $technology }}
                                        </span>

                                    @endforeach

                                </div>


                                <div
                                    class="flex items-center gap-6 pt-6 mt-8 border-t border-neutral-200 dark:border-neutral-800"
                                >

                                    <a
                                        href="{{ $package['github_url'] }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="inline-flex items-center gap-2 text-sm font-medium text-neutral-950 group/link dark:text-neutral-50"
                                    >
                                        GitHub

                                        <span
                                            class="transition-transform duration-300 group-hover/link:translate-x-1"
                                        >
                                            ↗
                                        </span>
                                    </a>


                                    @if(!empty($package['packagist_url']))

                                        <a
                                            href="{{ $package['packagist_url'] }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="inline-flex items-center gap-2 text-sm font-medium text-neutral-950 group/link dark:text-neutral-50"
                                        >
                                            Packagist

                                            <span
                                                class="transition-transform duration-300 group-hover/link:translate-x-1"
                                            >
                                                ↗
                                            </span>
                                        </a>

                                    @endif

                                </div>

                            </div>

                        </div>

                    </div>

                </article>

            @endif

        @endforeach

    </div>


    {{-- ============================================================
        Closing Statement
    ============================================================= --}}
    <div class="mt-16 lg:ml-[25%] lg:max-w-3xl">

        <p
            class="text-base leading-7 text-neutral-500 dark:text-neutral-500"
        >
            The goal is simple: take problems worth solving once,
            turn them into reusable software, and keep improving them
            as I learn.
        </p>

    </div>

</div>


</section>
