<x-app-layout>
    <div class="">
        <div class="max-w-7xl mx-4 lg:mx-auto">
            <p class="text-base">
                Welcome to FractalPedia, an interactive reference guide for modeling products created by
                the wizards at <a href="https://fractalaudio.com" target="_blank" class="inline-link">Fractal Audio Systems</a>.
            </p>
            <p class="text-base mt-6">
                If this is your first time here, please take a moment to <a href="{{route('about')}}" class="inline-link">learn about us.</a>
            </p>
        </div>

        <div class="max-w-7xl mt-10 mx-4 lg:mx-auto flex flex-col justify-center space-y-12 lg:space-y-0 lg:space-x-12 lg:flex-row ">
            <div class="bg-white shadow-md rounded-lg lg:w-1/2">
                <h3 class="text-xl px-4 py-4 font-audiowide">Amp of the Day</h3>
                <div class="flex justify-center my-3 max-h-28">
                    <img class="object-contain w-3/4 md:w-1/2" src="https://wiki.fractalaudio.com/wiki/images/thumb/5/58/AFD.jpg/600px-AFD.jpg">
                </div>
                <p class="py-6 px-5 text-base">
                    The Marshall AFD100 is the amp of the day! Slash's latest signature amp, this limited edition head
                    replicates two of the amps used on the legendary Appetite for Destruction album and beyond. FAS
                    modeled both channels of this iconic amp and it is a must try for anyone seeking to cop the tone of
                    the man in the top hat.
                </p>
            </div>

            <div class="bg-white shadow-md rounded-lg lg:w-1/2">
                <h3 class="text-xl px-4 py-4 font-audiowide">Players Choice</h3>
                <div class="flex justify-center my-3 max-h-28">
                    <i class="far fa-sad-tear fa-7x object-cover place-self-center text-gray-200"></i>
                </div>
                <p class="py-6 px-5 text-base">
                    Unfortunately we don't have enough data to select an amp model to feature.
                </p>
                <p class="text-base px-5 pb-6">
                    @guest
                        You can help by <a href="{{ route('register') }}" class="inline-link">creating a free account</a>
                        so you can rate models, love your favorites, and more!
                    @endguest
                    @auth
                        Start rating amp models and loving your favorites so we can crunch some numbers and start featuring
                        them on the home page!
                    @endauth
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
