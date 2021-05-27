<li class="col-span-1 flex flex-col bg-white shadow overflow-hidden rounded-lg w-full">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            General Information
        </h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Overview of the amp and some helpful links.
        </p>
    </div>
    <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">
                    Synopsis
                </dt>
                <dd class="mt-1 text-sm text-gray-900">
                    {{ $amp->synopsis }}
                </dd>
            </div>
            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">
                    Speaker Cab
                </dt>
                <dd class="mt-1 text-sm text-gray-900">
                    {{ $amp->speaker_cab }}
                </dd>
            </div>
            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">
                    Web Resource
                </dt>
                <dd class="mt-1 text-sm text-gray-900">
                    @if($featuredResource)
                        <a href="{{ $featuredResource->href }}" class="inline-link" target="_blank">{{ $featuredResource->title }}</a>
                    @else
                        <p>N/A</p>
                    @endif
                </dd>
            </div>
            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">
                    Manual
                </dt>
                <dd class="mt-1 text-sm text-gray-900">
                    @if($manual)
                        <a href="{{ $manual['href'] }}" class="inline-link" target="_blank">{{ $manual['title'] }}</a>
                    @else
                        <p>N/A</p>
                    @endif
                </dd>
            </div>
            <div class="sm:col-span-2">
                <dt class="text-sm font-medium text-gray-500">
                    Cliffism
                </dt>
                <dd class="mt-1 text-sm text-gray-900">
                    {{ $amp->cliffism ?? 'N/A'}}
                </dd>
            </div>
            <div class="sm:col-span-2">
                <dt class="text-sm font-medium text-gray-500">
                    Videos and Related Links
                </dt>
                <dd class="mt-1 text-sm text-gray-900">
                    <ul class="border border-gray-200 rounded-md divide-y divide-gray-200">
                        @foreach($amp->links as $link)
                            @unless($link->type == 'featured-resource')
                                <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm hover:bg-indigo-50 transition duration-150 ease-in-out">
                                    <div class="w-0 flex-1 flex items-center">
                                        @switch($link->type)
                                            @case('video')
                                            {{-- Heroicon name: film  --}}
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                                            </svg>
                                            @break
                                            @case('forum')
                                            {{-- Heroicon name: chat-alt-2  --}}
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                            </svg>
                                            @break
                                            @case('article')
                                            {{-- Heroicon name: document --}}
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                            </svg>
                                        @endswitch
                                        <a href="{{ $link->href }}" class="ml-2 flex-1 w-0 truncate inline-link" target="_blank">{{ $link->title }}</a>
                                    </div>
                                </li>
                            @endunless
                        @endforeach
                    </ul>
                </dd>
            </div>
        </dl>
    </div>
</li>
