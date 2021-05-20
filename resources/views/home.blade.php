<x-app-layout>
    <div class="mt-1 py-8">
        <div class="max-w-7xl mx-4 lg:mx-auto sm:px-2 lg:px-8 text-semibold">
            <p>
                Welcome to FractalPedia, an interactive reference guide for modeling products created by
                the wizards at <a href="https://fractalaudio.com" target="_blank" class="inline-link">Fractal Audio Systems</a>.
            </p>
            <p class="mt-6">
                If this is your first time here, please take a moment to <a href="{{route('about')}}" class="inline-link">learn about us.</a>
            </p>
        </div>

        <div class="max-w-7xl mt-12 mx-4 lg:mx-auto sm:px-2 lg:px-8 flex flex-col justify-center space-y-12 lg:space-y-0 lg:space-x-12 lg:flex-row ">
            <div class="bg-white shadow-lg rounded-lg lg:w-1/2">
                <h3 class="text-xl px-4 py-4 font-audiowide">Model of the Day</h3>
                <div class="flex justify-center mt-3">
                    <img src="https://wiki.fractalaudio.com/wiki/images/thumb/5/58/AFD.jpg/600px-AFD.jpg" width="50%" height="50%">
                </div>
                <p class="py-6 px-5">
                    The BRIT AFS100 1 is today's model of the day! Seeking to recreate the tone of a Marshall AFD100
                    head in #34 mode, this is a must try for all Slash fans or anyone wanting to plug in a Les Paul and
                    peel the paint off the walls.
                </p>
            </div>

            <div class="bg-white shadow-lg rounded-lg lg:w-1/2">
                <h3 class="text-xl px-4 py-4 font-audiowide">Players Choice</h3>
                <div class="flex justify-center">
                    <i class="far fa-sad-tear fa-7x place-self-center text-gray-200"></i>
                </div>
                <p class="py-6 px-5">
                    Unfortunately we don't have enough ratings to select an amp model to feature, but you can help!
                    <a href="#" class="inline-link">Join our community</a> and start rating today!
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
