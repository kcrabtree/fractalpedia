<x-app-layout>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-4">
            <div class="filters flex flex-wrap space-y-4 md:space-y-0 border-b-2 border-gray-500 pb-8 md:pb-4 lg:pb-8">
                <div class="px-4 w-full md:w-1/2 lg:w-1/3">
                    <select name="manufacturer" id="manufacturer" class="w-full rounded-lg px-4 border-none">
                        <option value="">Manufacturer</option>
                        @foreach($manufacturers as $manufacturer)
                            <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="px-4 w-full md:w-1/2 lg:w-1/3">
                    <select name="amp" id="amp" class="w-full rounded-lg px-4 border-none">
                        <option value="">Amplifier</option>
                        @foreach($amplifiers as $amplifier)
                            <option value="{{$amplifier->id}}">{{$amplifier->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="px-4 w-full md:w-1/2 md:py-4 lg:w-1/3 lg:py-0">
                    <select name="model" id="model" class="w-full rounded-lg px-4  border-none">
                        <option value="">Amp Model</option>
                        @foreach($models as $model)
                            <option value="{{$model->slug}}">{{$model->name}}</option>
                        @endforeach
                    </select>
                </div>

                {{-- TODO: implement search --}}
{{--                <div class="px-4 w-full md:w-1/2 md:py-4 relative">--}}
{{--                    <div class="absolute top-0 flex items-center h-full ml-2">--}}
{{--                        <i class="fas fa-search w-4 text-gray-700"></i>--}}
{{--                    </div>--}}
{{--                    <input type="search" placeholder="Search" class="w-full rounded-xl bg-white px-4 py-2 pl-8 border-none placeholder-gray-900"/>--}}
{{--                </div>--}}
            </div>

            {{-- Models Container --}}
            <div class="mx-auto px-4 my-6">
                {{-- Flex Wrapper --}}
                <div class="-mx-4 flex flex-wrap">
                    {{-- Column --}}
                    @foreach($models as $model)
                        {{-- Column Contents --}}
                        <a href="{{ route('model.show', $model) }}" class="w-full flex flex-col p-4 sm:w-full md:w-1/2 lg:w-1/3 xl:w-1/4">
                            <div class="flex-1 px-4 py-2 bg-white rounded-xl hover:shadow-md transition duration-150 ease-in-out">
                                <h4 class="px-4 py-4 text-lg font-audiowide">
                                    {{ $model->name }}
                                </h4>
                                <p class="px-4 py-2">
                                    {{ $model->description }}
                                </p>
                                <p class="px-4 py-6 text-xs lg:text-sm">
                                    Last updated {{$model->updated_at->diffForHumans()}}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="px-4">
                {{ $models->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
