<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex flex-1">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="hover:opacity-50 transition">
                        <x-application-mark class="h-10 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden sm:flex flex-1 justify-between">
                    <div class="flex space-x-8 sm:-my-px sm:ml-10">
                        @foreach(array_filter(config('laravel-navigation.navigation-menu.navigation-links'), fn($link) => !isset($link['alignment']) || $link['alignment'] === 'left') as $link)
                            <x-nav-link
                                href="{{ route($link['route']) }}"
                                :active="request()->routeIs($link['route'])"
                                target="{{ $link['target'] ?? '_self' }}"
                            >
                                <div class="flex items-center space-x-2">
                                    @if(isset($link['icon']))
                                        <span class="relative shrink-0">
                                            {!! $link['icon'] !!}

                                            @if(isset($link['ping']) ?auth()->user()->{$link['ping']}() : false)
                                                <span class="flex absolute top-0 end-0 size-3 -mt-1.5 -me-1.5">
                                                    <span class="animate-ping absolute inline-flex size-full rounded-full bg-red-400 opacity-75 dark:bg-red-600"></span>
                                                    <span class="relative inline-flex rounded-full size-3 bg-red-500"></span>
                                                </span>
                                            @elseif(isset($link['total']) ? $total = auth()->user()->{$link['total']}() : false)
                                                <span class="absolute top-0 end-0 inline-flex items-center py-0.5 px-1.5 rounded-full text-xs font-medium transform -translate-y-1/2 translate-x-1/2 bg-red-500 text-white">
                                                    {{ $total }}
                                                </span>
                                            @endif
                                        </span>
                                    @endif
                                    @if(! isset($link['hidden-title']) || ! $link['hidden-title'])
                                        <span>
                                            {{ __('laravel-navigation::navigation.' . $link['title']) }}
                                        </span>
                                    @endif
                                </div>
                            </x-nav-link>
                        @endforeach
                    </div>

                    <div class="flex space-x-8 sm:-my-px sm:ml-10">
                        @foreach(array_filter(config('laravel-navigation.navigation-menu.navigation-links'), fn($link) => ($link['alignment'] ?? null) === 'right') as $link)
                            <x-nav-link
                                href="{{ route($link['route']) }}"
                                :active="request()->routeIs($link['route'])"
                                target="{{ $link['target'] ?? '_self' }}"
                            >
                                <div class="flex items-center space-x-2">
                                    @if(isset($link['icon']))
                                        <span class="relative shrink-0">
                                            {!! $link['icon'] !!}

                                            @if(isset($link['ping']) ?auth()->user()->{$link['ping']}() : false)
                                                <span class="flex absolute top-0 end-0 size-3 -mt-1.5 -me-1.5">
                                                    <span class="animate-ping absolute inline-flex size-full rounded-full bg-red-400 opacity-75 dark:bg-red-600"></span>
                                                    <span class="relative inline-flex rounded-full size-3 bg-red-500"></span>
                                                </span>
                                            @elseif(isset($link['total']) ? $total = auth()->user()->{$link['total']}() : false)
                                                <span class="absolute top-0 end-0 inline-flex items-center py-0.5 px-1.5 rounded-full text-xs font-medium transform -translate-y-1/2 translate-x-1/2 bg-red-500 text-white">
                                                    {{ $total }}
                                                </span>
                                            @endif
                                        </span>
                                    @endif
                                    @if(! isset($link['hidden-title']) || ! $link['hidden-title'])
                                        <span>
                                            {{ __('laravel-navigation::navigation.' . $link['title']) }}
                                        </span>
                                    @endif
                                </div>
                            </x-nav-link>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if(Laravel\Jetstream\Jetstream::hasTeamFeatures() && auth()->user()->canManageTeams())
                    <div class="ml-3 relative">
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ auth()->user()->currentTeam->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-dropdown-link href="{{ route('teams.show', auth()->user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-dropdown-link>
                                    @endcan

                                    @if(method_exists(auth()->user(), 'canChangeTeam') && auth()->user()->canChangeTeam())
                                        <div class="border-t border-gray-200"></div>

                                        <!-- Team Switcher -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach(auth()->user()->allTeams() as $team)
                                            <x-switchable-team :team="$team" />
                                        @endforeach
                                    @endif
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if(Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="group flex items-center space-x-3 hover:bg-gray-50 p-2 rounded-lg">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ auth()->user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    <div class="text-right max-w-[150px]">
                                        <div class="font-semibold text-sm text-gray-700 truncate">{{ auth()->user()->name }}</div>
                                        <div class="text-xs text-gray-400 truncate">{{ auth()->user()->email }}</div>
                                    </div>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-gray-400 group-hover:text-gray-500 w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                        {{ auth()->user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            @foreach(config('laravel-navigation.navigation-menu.dropdown.sections') as $section)
                                @can($section['can'] ?? 'true_area')
                                    @cannot($section['cannot'] ?? 'false_area')
                                        <div class="block px-4 py-2 text-xs text-gray-400 select-none cursor-default">
                                            {{ __('laravel-navigation::navigation.' . $section['title']) }}
                                        </div>

                                        @foreach($section['links'] as $link)
                                            <x-dropdown-link :href="array_key_exists('href', $link) ? $link['href'] : route($link['route'])">
                                                {{ __('laravel-navigation::navigation.' . $link['title']) }}
                                            </x-dropdown-link>
                                        @endforeach
                                    @endcannot
                                @endcan
                            @endforeach

                            @if(Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link
                                    href="{{ route('logout') }}"
                                    @click.prevent="$root.submit();"
                                    class="text-red-500"
                                >
                                    {{ __('laravel-navigation::navigation.Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            @foreach(config('laravel-navigation.navigation-menu.navigation-links') as $link)
                <x-responsive-nav-link href="{{ route($link['route']) }}" :active="request()->routeIs($link['route'])">
                    {{ __('laravel-navigation::navigation.' . $link['title']) }}
                </x-responsive-nav-link>
            @endforeach
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if(Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ auth()->user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ auth()->user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ auth()->user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                @foreach(config('laravel-navigation.navigation-menu.dropdown.sections') as $section)
                    @can($section['can'] ?? 'true_area')
                        @cannot($section['cannot'] ?? 'false_area')
                            @foreach($section['links'] as $link)
                                <x-responsive-nav-link :href="array_key_exists('href', $link) ? $link['href'] : route($link['route'])">
                                    {{ __('laravel-navigation::navigation.' . $link['title']) }}
                                </x-responsive-nav-link>
                            @endforeach
                        @endcannot
                    @endcan
                @endforeach

                @if(Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link
                        href="{{ route('logout') }}"
                        @click.prevent="$root.submit();"
                        class="text-red-500 hover:text-red-500"
                    >
                        {{ __('laravel-navigation::navigation.Log Out') }}
                    </x-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if(Laravel\Jetstream\Jetstream::hasTeamFeatures() && auth()->user()->canManageTeams())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-responsive-nav-link href="{{ route('teams.show', auth()->user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-responsive-nav-link>
                    @endcan

                    @if(method_exists(auth()->user(), 'canChangeTeam') && auth()->user()->canChangeTeam())
                        <div class="border-t border-gray-200"></div>

                        <!-- Team Switcher -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>

                        @foreach(auth()->user()->allTeams() as $team)
                            <x-switchable-team :team="$team" component="responsive-nav-link" />
                        @endforeach
                    @endif
                @endif
            </div>
        </div>
    </div>
</nav>
