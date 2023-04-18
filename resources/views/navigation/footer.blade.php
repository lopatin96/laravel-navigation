<section class="relative py-8 bg-white">
    <div class="relative container px-4 max-w-5xl mx-auto">
        <div class="flex flex-wrap justify-between items-center">
            <div class="space-y-2 w-auto p-8">
                <p>
                    <a href="{{ route('home') }}">
                        <x-application-logo class="h-7 w-auto" />
                    </a>
                </p>
                <p class="text-xs text-gray-500">
                    {{ __('laravel-navigation::navigation.All rights reserved...') }}
                </p>
            </div>
            <div class="w-auto p-8">
                <ul class="flex flex-wrap items-center space-x-5 -m-5">
                    @foreach(config('laravel-navigation.footer.links') as $link)
                        <li><a class="text-gray-500 hover:text-gray-700 font-medium" href="{{ $link['href'] }}">{{ __('laravel-navigation::navigation.' . $link['title']) }}</a></li>
                    @endforeach
                    <li><a class="text-gray-500 hover:text-gray-700 font-medium" href="mailto:{{ config('mail.support') }}">{{ __('Contact Us') }}</a></li>
                    <li>
                        @include('laravel-lang-switcher::lang-switcher.index')
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
