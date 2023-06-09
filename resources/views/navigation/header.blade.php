<section>
    <div class="overflow-hidden max-w-6xl mx-auto">
        <div class="flex items-center justify-between px-4 py-10">
            <div class="flex flex-wrap items-center">
                <div class="w-auto mr-6">
                    <a href="{{ route('home') }}" >
                        <x-application-logo class="h-11 w-auto" />
                    </a>
                </div>
            </div>
            <div class="w-auto">
                <div class="flex flex-wrap items-center space-x-10">
                    @if (isset($showLinks) && $showLinks)
                        <div class="w-auto hidden lg:block">
                            <ul class="flex items-center space-x-6">
                                @foreach(config('laravel-navigation.header.links') as $link)
                                    <li class="font-medium link-underline link-underline-black"><a href="{{ $link['href'] }}">{{ __('laravel-navigation::navigation.' . $link['title']) }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="w-auto">
                        @if (Auth::check())
                            <div class="inline-block">
                                <a
                                    class="flex items-center space-x-2 py-3 px-5 w-full text-white font-semibold rounded-xl focus:ring focus:outline-none focus:ring-gray-500 bg-black hover:bg-gray-900 transition ease-in-out duration-200 select-none"
                                    href="{{ route('dashboard') }}"
                                >
                                    <span>{{ __('laravel-navigation::navigation.Go dashboard') }}</span>

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                    </svg>
                                </a>
                            </div>
                        @else
                            <div class="inline-block">
                                <a
                                    class="py-3 px-5 w-full text-white font-semibold rounded-xl focus:ring focus:outline-none focus:ring-gray-500 bg-black hover:bg-gray-900 transition ease-in-out duration-200 select-none"
                                    href="{{ route('login') }}"
                                >
                                    {{ __('laravel-navigation::navigation.Sign in') }}
                                </a>
                            </div>
                            <div class="inline-block">
                                <a
                                    class="py-3 px-1 sm:px-5 w-full font-semibold transition ease-in-out select-none hover:underline"
                                    href="{{ route('register') }}"
                                >
                                    {{ __('laravel-navigation::navigation.Sign up') }}
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
