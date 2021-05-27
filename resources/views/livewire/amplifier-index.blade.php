<div>
    <li class="col-span-1 flex flex-col bg-white rounded-lg shadow divide-y divide-gray-200 hover:shadow-xl transition duration-150 ease-in-out">
        <a href="{{ route('amplifier.show', $amp) }}">
            <h4 class="px-4 pt-4 text-md font-audiowide">{{ $amp->name }}</h4>
            <div class="flex-1 flex flex-col px-4">
                {{-- <img src="/img/amps/{{$amp->slug}}/img.png" class="object-contain max-w-36 max-h-36 pt-4"  alt="{{$amp->name}}">--}}
                <p class="py-4 text-base">
                    {{ $amp->index_card_text }}
                </p>
            </div>
        </a>
    </li>
</div>
