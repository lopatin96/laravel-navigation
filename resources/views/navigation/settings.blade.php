<x-app-layout>
    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <ul
                class="mb-14 flex list-none flex-row flex-wrap border-b-0 pl-0 space-x-3"
                role="tablist"
                data-te-nav-ref
            >
                <li role="presentation">
                    <a
                        href="#tabs-subscription"
                        class="rounded-2xl transition block px-3.5 py-2.5 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-200 focus:isolate focus:border-transparent data-[te-nav-active]:bg-neutral-200 data-[te-nav-active]:text-gray-700 dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                        data-te-toggle="pill"
                        data-te-target="#tabs-subscription"
                        data-te-nav-active
                        role="tab"
                        aria-controls="tabs-subscription"
                        aria-selected="true"
                    >
                        {{ __('laravel-navigation::navigation.Subscription') }}
                    </a>
                </li>

                <li role="presentation">
                    <a
                        href="#tabs-account"
                        class="rounded-2xl transition block px-3.5 py-2.5 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-200 focus:isolate focus:border-transparent data-[te-nav-active]:bg-neutral-200 data-[te-nav-active]:text-gray-700 dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                        data-te-toggle="pill"
                        data-te-target="#tabs-account"
                        role="tab"
                        aria-controls="tabs-account"
                        aria-selected="false"
                    >
                        {{ __('laravel-navigation::navigation.Account') }}
                    </a>
                </li>
            </ul>

            <div class="mb-6">
                <div
                    class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-subscription"
                    role="tabpanel"
                    aria-labelledby="tabs-subscription-tab"
                    data-te-tab-active
                >
                    @include('laravel-subscription::subscription.card')
                </div>

                <div
                    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-account"
                    role="tabpanel"
                    aria-labelledby="tabs-account-tab"
                >
                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                        @livewire('profile.update-profile-information-form')

                        <x-section-border />
                    @endif

                    @if (! Auth::user()->socialAccount && Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.update-password-form')
                        </div>

                        <x-section-border/>
                    @endif

                    @if (! Auth::user()->socialAccount && Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                        <div class="mt-10 sm:mt-0">
                            @livewire('profile.two-factor-authentication-form')
                        </div>

                        <x-section-border/>
                    @endif

                    <div class="mt-10 sm:mt-0">
                        @livewire('logout-other-browser-sessions-form')
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                        <x-section-border/>

                        <div class="mt-10 sm:mt-0">
                            @livewire('delete-user-form')
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
