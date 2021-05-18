<x-app-layout>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="filters flex space-x-8 border-b-2 border-gray-500 pb-8">
                <div class="w-1/4">
                    <select name="manufacturer" id="manufacturer" class="w-full rounded-lg px-4 py-2 border-none">
                        <option value="">Manufacturer</option>
                        @foreach($manufacturers as $manufacturer)
                            <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-1/4">
                    <select name="amp" id="amp" class="w-full rounded-lg px-4 py-2 border-none">
                        <option value="">Amplifier</option>
                        @foreach($amplifiers as $amplifier)
                            <option value="{{$amplifier->id}}">{{$amplifier->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-1/4">
                    <select name="model" id="model" class="w-full rounded-lg px-4 py-2 border-none">
                        <option value="">Fractal Model</option>
                        @foreach($models as $model)
                            <option value="{{$model->slug}}">{{$model->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-1/2 relative">
                    <div class="absolute top-0 flex items-center h-full ml-2">
                        <i class="fas fa-search w-4 text-gray-700"></i>
                    </div>
                    <input type="search" placeholder="Search" class="w-full rounded-xl bg-white px-4 py-2 pl-8 border-none placeholder-gray-900"/>
                </div>
            </div>

            <div class="models-container flex space-x-8 my-10">
                @foreach($models as $model)
                    <a href="{{ route('model.show', $model) }}" class="w-1/3">
                    <div class="model-container bg-white rounded-xl hover:shadow-md transition duration-150 ease-in-out" style="height: 100%">

                            <h4 class="text-lg font-audiowide py-4 px-4">
{{--                                <a href="{{ route('model.show', $model) }}">--}}
                                    {{ $model->name }}
{{--                                </a>--}}
                            </h4>
                            <p class="py-4 px-4">
                                {{ $model->description }}
                            </p>

{{--                        <p>--}}
{{--                            {{$model->created_at->diffForHumans()}}--}}
{{--                        </p>--}}
                    </div>
                    </a>
                @endforeach
            </div>
            <div>
                {{ $models->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
