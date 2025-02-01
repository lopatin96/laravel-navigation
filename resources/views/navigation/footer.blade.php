<footer class="relative px-4 py-8 sm:p-8 bg-white">
    <div class="px-4 max-w-4xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4">
            <div class="space-y-3 w-auto">
                <div class="flex items-center space-x-3">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="h-5 w-auto" />
                    </a>

                    <span class="text-xs text-gray-500">
                        © {{ config('app.name') }}, {{ date('Y') }}.
                    </span>
                </div>

                <x-laravel-lang-switcher::lang-switcher class="text-gray-500 hover:text-gray-700 text-sm cursor-pointer" />
            </div>

            @foreach(config('laravel-navigation.footer') as $footerSection)
                <div class="md:text-right">
                    <span class="text-gray-600 uppercase font-semibold text-sm">
                        {{ __('laravel-navigation::navigation.' . $footerSection['title']) }}
                    </span>

                    <ul class="mt-2 space-y-1">
                        @foreach($footerSection['links'] as $link)
                            @if(
                                $link['href']
                                && (
                                    ! array_key_exists('gate', $link)
                                    || $link['gate'] === 'logged_in' && auth()->check()
                                    || $link['gate'] === 'logged_out' && ! auth()->check()
                                )
                            )
                                <li class="leading-3">
                                    <a
                                        class="text-gray-500 hover:text-gray-700 text-sm @if($link['target'] ?? '_self' === '_blank') after:content-['_↗'] @endif"
                                        href="{{ $link['href'] }}"
                                        target="{{ $link['target'] ?? '_self' }}"
                                    >
                                        {{ __('laravel-navigation::navigation.' . $link['title']) }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</footer>
