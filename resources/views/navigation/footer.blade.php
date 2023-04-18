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
                    {{ __('All rights reserved...') }}
                </p>
            </div>
            <div class="w-auto p-8">
                <ul class="flex flex-wrap items-center -m-5">
                    <li class="p-3"><a class="text-gray-600 hover:text-gray-700 font-medium" href="/blog">{{ __('Blog') }}</a></li>
                    <li class="p-3"><a class="text-gray-600 hover:text-gray-700 font-medium" href="/terms-of-service">{{ __('Terms') }}</a></li>
                    <li class="p-3"><a class="text-gray-600 hover:text-gray-700 font-medium" href="/privacy-policy">{{ __('Privacy') }}</a></li>
                    <li class="p-3"><a class="text-gray-600 hover:text-gray-700 font-medium" href="mailto:{{ config('mail.support') }}">{{ __('Contact Us') }}</a></li>
                    <li class="p-3">
                        @include('laravel-lang-switcher::lang-switcher.index')
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
