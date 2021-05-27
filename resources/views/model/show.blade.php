<x-app-layout>
    <div class="max-w-7xl mx-4 lg:mx-auto">
        @include('/simple-breadcrumbs')

        <div class="filters flex flex-wrap space-y-4 md:space-y-0 pb-8">
            <h1 class="text-2xl px-4 w-full text-center">{{ $model->name }}</h1>
        </div>

        <div x-data="{selectedTab: 1}">
            <div class="sm:hidden">
                <label for="tabs" class="sr-only">Select a tab</label>
                <select id="tabs" name="tabs" x-model.number="selectedTab" class="block w-full focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                    <option :value="1">General</option>
                    <option :value="2">Tone Tips</option>
                    <option :value="3">AxeChange HoF</option>
                    <option :value="4">Discuss</option>
                </select>
            </div>
            <div class="hidden sm:block">
                <div class="border-b border-gray-200">
                    <nav class="-mb-px flex" aria-label="Tabs">
                        <a
                            @click="selectedTab = 1"
                            href="#"
                            class="w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm"
                            :class="selectedTab === 1 ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'">
                            General
                        </a>

                        <a
                            @click="selectedTab = 2"
                            href="#"
                            class="w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm"
                            :class="selectedTab === 2 ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'">
                            Tone Tips
                        </a>

                        <a
                            @click="selectedTab = 3"
                            href="#"
                            class="w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm"
                            :class="selectedTab === 3 ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'">
                            AxeChange HoF
                        </a>

                        <a
                            @click="selectedTab = 4"
                            href="#"
                            class="w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm"
                            :class="selectedTab === 4 ? 'border-indigo-500 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'">
                            Discuss
                        </a>
                    </nav>
                </div>
            </div>
            <div>
                <div x-show="selectedTab === 1">
                    @include('model/tab-views/general')
                </div>
                <div x-show="selectedTab === 2">
                    @include('model/tab-views/tone-tips')
                </div>
                <div x-show="selectedTab === 3">
                    @include('model/tab-views/hall-of-fame')
                </div>
                <div x-show="selectedTab === 4">
                    @include('model/tab-views/discussion')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
