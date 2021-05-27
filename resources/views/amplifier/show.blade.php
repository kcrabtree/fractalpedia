<x-app-layout>
    <div class="max-w-7xl mx-4 lg:mx-auto">
        @include('/simple-breadcrumbs')

        <div class="mx-auto my-8">
            <ul class="grid grid-cols-1 gap-6 md:grid-cols-2">
                {{-- Build out components later? Abstracting to separate templates should be good enough for now --}}
                @include('amplifier.general-info')
                @include('amplifier.amp-specs')
            </ul>
        </div>

        <x-divider>Models</x-divider>

        <div class="bg-white shadow overflow-hidden rounded-lg mx-auto">
            <ul class="divide-y divide-gray-200">
                @foreach($models as $model)
                    <li>
                        <a href="{{route('model.show', $model)}}" class="block hover:bg-indigo-50 transition duration-150 ease-in-out">
                            <div class="px-4 py-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <p class="text-md text-indigo-600">
                                        {{ $model->name }}
                                    </p>
                                    <div class="text-sm flex justify-between">
                                        <p class="pr-2">Avg. Rating</p>
                                        <p class="px-2 text-white font-extrabold rounded-md bg-yellow-500">
                                            4.5 {{-- TODO: implement ratings --}}
                                        </p>
                                    </div>
                                </div>
                                <div class="mt-2 sm:flex sm:justify-between">
                                    <div class="sm:flex">
                                        <p class="flex items-center text-sm text-gray-500">
                                            {{ $model->description }}
                                        </p>
                                    </div>
                                    <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 hidden sm:flex">
                                        {{-- Heroicon name: annotation --}}
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                        </svg>
                                        <p>
                                            two days ago {{-- TODO: implement comments/discussion --}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>
