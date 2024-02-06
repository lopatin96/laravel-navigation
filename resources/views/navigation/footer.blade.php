<footer class="relative p-8 bg-white">
    <div class="px-4 max-w-5xl mx-auto">
        <div class="grid grid-cols-3 md:grid-cols-5 gap-4">
            <div class="space-y-3 w-auto">
                <div class="flex items-center space-x-3">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="h-5 w-auto" />
                    </a>

                    <span class="text-xs text-gray-500">
                        {{ __('laravel-navigation::navigation.All rights reserved...') }}
                    </span>
                </div>

                <x-laravel-lang-switcher::lang-switcher class="text-gray-500 hover:text-gray-700 text-sm cursor-pointer" />
            </div>

            @foreach(config('laravel-navigation.footer') as $footerSection)
                <div class="text-right">
                    <h4 class="text-gray-600 uppercase font-semibold text-sm">
                        {{ __('laravel-navigation::navigation.' . $footerSection['title']) }}
                    </h4>

                    <ul class="mt-2">
                        @foreach($footerSection['links'] as $link)
                            @if (
                                $link['href']
                                && (
                                    ! array_key_exists('gate', $link)
                                    || $link['gate'] === 'logged_in' && auth()->check()
                                    || $link['gate'] === 'logged_out' && ! auth()->check()
                                )
                            )
                                <li>
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



{{--                <ul class="flex flex-wrap items-center">--}}
{{--                    @foreach(config('laravel-navigation.footer.links') as $link)--}}
{{--                        <li class="mx-2"><a class="text-gray-500 hover:text-gray-700 text-sm" href="{{ $link['href'] }}">{{ __('laravel-navigation::navigation.' . $link['title']) }}</a></li>--}}
{{--                    @endforeach--}}
{{--                    <li class="mx-2"><a class="text-gray-500 hover:text-gray-700 text-sm" href="mailto:{{ config('mail.support') }}">{{ __('laravel-navigation::navigation.Contact Us') }}</a></li>--}}
{{--                    <li class="mx-2">--}}
{{--                        <x-laravel-lang-switcher::lang-switcher class="text-gray-500 hover:text-gray-700 text-sm cursor-pointer" />--}}
{{--                    </li>--}}
{{--                </ul>--}}
            </div>
        </div>
    </div>
</footer>
