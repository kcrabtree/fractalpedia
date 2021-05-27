<div class="mx-auto my-10">
    <ul class="grid grid-cols-1 gap-6 md:grid-cols-2">
        <li class="col-span-1 flex flex-col bg-white shadow-lg overflow-hidden rounded-lg w-full">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    General Information
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Overview and helpful links.
                </p>
            </div>
            <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Description
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{ $model->description }}
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Stock Cabs
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{ $model->fractal_cabs }}
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            3rd Party Cab Packs
                        </dt>
                        @if($model->third_party_cabs)
                            @foreach($model->third_party_cabs as $cab)
                                <dd class="mt-1 text-sm text-gray-900">
                                    <a href="{{$cab['href']}}" class="inline-link" target="_blank">{{ $cab['name'] }}</a>
                                </dd>
                            @endforeach
                        @else
                            <dd class="mt-1 text-sm text-gray-900">
                                N/A
                            </dd>
                        @endif
                    </div>
                    @if($model->yek_quotes)
                        <div class="sm:col-span-2">
                            <dt class="text-sm font-medium text-gray-500">
                                Thoughts from Yek
                            </dt>
                            @foreach($model->yek_quotes as $quote)
                                <dd class="mt-1 text-sm text-gray-900 pb-2">
                                    {{ $quote  }}
                                </dd>
                            @endforeach
                        </div>
                    @endif
                </dl>
            </div>
        </li>
        @if($model->cliff_quotes)
            @foreach($model->cliff_quotes as $quote)
                <li class="col-span-1 flex flex-col">
                    <x-cliff-quote>{{ $quote }}</x-cliff-quote>
                </li>
            @endforeach
        @endif
    </ul>
</div>
