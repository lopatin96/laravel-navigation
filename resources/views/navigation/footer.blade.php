<section class="relative py-8 bg-white">
    <div class="relative container px-4 max-w-5xl mx-auto">
        <div class="flex justify-between items-center">
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
            <div class="space-y-2 w-auto p-8">
                <x-laravel-navigation::social-media />
            </div>
            <div class="w-auto p-8">
                <ul class="flex flex-wrap items-center -m-5">
                    @foreach(config('laravel-navigation.footer.links') as $link)
                        <li class="mx-2.5"><a class="text-gray-500 hover:text-gray-700 font-medium" href="{{ $link['href'] }}">{{ __('laravel-navigation::navigation.' . $link['title']) }}</a></li>
                    @endforeach
                    <li class="mx-2.5"><a class="text-gray-500 hover:text-gray-700 font-medium" href="mailto:{{ config('mail.support') }}">{{ __('laravel-navigation::navigation.Contact Us') }}</a></li>
                    <li class="mx-2.5">
                        <x-laravel-lang-switcher::lang-switcher class="text-gray-500 hover:text-gray-700 font-medium cursor-pointer" />
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
