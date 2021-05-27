<li class="col-span-1 flex flex-col bg-white shadow overflow-hidden rounded-lg w-full">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Amplifier Specifications
        </h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Characteristics of the amplifier being modeled.
        </p>
    </div>
    <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
        <div class="flex justify-center mb-8">
            <img src="/img/amps/{{$amp->slug}}/img.png" class="object-contain max-h-36 max-w-36" alt="{{$amp->name}}">
        </div>
        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 grid-cols-2 sm:grid-cols-2">
            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">
                    Years of Manufacture
                </dt>
                <dd class="mt-1 text-sm text-gray-900">
                    @if($amp->manufacture_start && $amp->manufacture_end)
                        {{ $amp->manufacture_start }} - {{ $amp->manufacture_end }}
                    @else
                        In Production
                    @endif
                </dd>
            </div>
            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">
                    Circuit
                </dt>
                <dd class="mt-1 text-sm text-gray-900">
                    {{ $amp->circuit ?? 'N/A' }}
                </dd>
            </div>
            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">
                    Power
                </dt>
                <dd class="mt-1 text-sm text-gray-900">
                    @if($amp->wattage)
                        {{ $amp->wattage}} watts
                    @else
                        N/A
                    @endif
                </dd>
            </div>
            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">
                    Master Volume
                </dt>
                <dd class="mt-1 text-sm text-gray-900">
                    @if($amp->master_volume )
                        {{ $amp->master_volume ? __('Yes') : __('No') }}
                    @else
                        N/A
                    @endif
                </dd>
            </div>
            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">
                    Negative Feedback
                </dt>
                <dd class="mt-1 text-sm text-gray-900">
                    @if($amp->negative_feedback)
                        {{ $amp->negative_feedback ? __('Yes') : __('No') }}
                    @else
                        N/A
                    @endif
                </dd>
            </div>
            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">
                    Preamp Tubes
                </dt>
                <dd class="mt-1 text-sm text-gray-900">
                    {{ $amp->preamp_tubes ?? 'N/A' }}
                </dd>
            </div>
            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">
                    Power Amp Tubes
                </dt>
                <dd class="mt-1 text-sm text-gray-900">
                    {{ $amp->power_amp_tubes ?? 'N/A' }}
                </dd>
            </div>
            <div class="sm:col-span-1">
                <dt class="text-sm font-medium text-gray-500">
                    Tone Stack Location
                </dt>
                <dd class="mt-1 text-sm text-gray-900">
                    {{ $amp->tone_stack_location ?? 'N/A' }}
                </dd>
            </div>
        </dl>
    </div>
</li>
