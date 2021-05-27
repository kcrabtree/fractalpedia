<div>
    <div class="max-w-7xl mx-4 lg:mx-auto">
        <div class="filters flex flex-wrap border-b-2 border-gray-500 pb-10">
            <div class="w-full mb-6 sm:mb-0 sm:w-1/2 lg:w-1/3">
                <select wire:model="manufacturer" name="manufacturer" id="manufacturer" class="w-full rounded-lg px-4 border-none">
                    <option value="All">All Manufacturers</option>
                    @foreach($manufacturers as $manufacturer)
                        <option value="{{$manufacturer->id}}">
                            {{$manufacturer->name}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="w-full sm:pl-8 sm:w-1/2 lg:w-1/3 relative">
                <div class="absolute top-0 flex items-center h-full ml-2">
                    <i class="fas fa-search w-4 text-gray-500"></i>
                </div>
                <input wire:model="search" type="search" placeholder="Search by name" class="w-full rounded-lg bg-white px-4 py-2 pl-8 border-none placeholder-gray-500"/>
            </div>
        </div>

        {{-- Amplifiers Container --}}
        <div class="mx-auto my-10">
            <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @forelse($amplifiers as $amp)
                    <livewire:amplifier-index :key="$amp->id" :amp="$amp"/>
                @empty
                    <div class="text-gray-400">No amplifiers found</div>
                @endforelse
            </ul>
        </div>
        <div>
            {{ $amplifiers->links() }}
        </div>
    </div>
</div>
