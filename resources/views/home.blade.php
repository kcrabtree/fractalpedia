<x-app-layout>
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Home') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 space-y-3 bg-white border-b border-gray-200">
                    <p>
                        Welcome to FractalPedia, an online supplement for modeling products created by
                        <a href="https://fractalaudio.com" target="_blank">Fractal Audio Systems</a>.
                    </p>
                    <p>
                        The inspiration for this project came from
                        <a href="https://wiki.fractalaudio.com/wiki/index.php?title=Yeks_Guide_to_the_Fractal_Audio_Amp_Models" target="_blank">
                        Yek's Guide to the Fractal Audio Amplifier Models</a>, with the goal of transforming a PDF
                        that is occasionally updated into a fully-interactive trove of knowledge driven and powered by
                        Fractal users.
                    </p>
                    <p>
                        While nearly all of the initial content on FractalPedia was repurposed from Yek's guide, I hope
                        this resource becomes a valuable part of the community and continues to evolve and expand over
                        time. If you're part of the Fractal family, please consider registering for a free account and
                        helping us grow!
                    </p>
                </div>
            </div>
        </div>

        <div class="max-w-7xl flex mx-auto mb-8 mt-12 sm:px-6 lg:px-8">
            <div class="w-1/2 bg-white shadow-md sm:rounded-lg mr-12">
                <p class="py-5 px-5 text-1xl font-audiowide">Model of the Day</p>
                <div class="flex justify-center mt-3">
                    <img src="https://wiki.fractalaudio.com/wiki/images/thumb/5/58/AFD.jpg/600px-AFD.jpg" width="50%" height="50%">
                </div>
                <p class="py-6 px-5">
                    The BRIT AFS100 1 is today's model of the day! Seeking to recreate the tone of a Marshall AFD100
                    head in #34 mode, this is a must try for all Slash fans or anyone wanting to plug in a Les Paul and
                    peel the paint off the walls.
                </p>
            </div>

            <div class="w-1/2 bg-white shadow-md sm:rounded-lg">
                <p class="py-5 px-5 text-1xl font-audiowide">Players Choice</p>
                <div class="flex justify-center">
                    <i class="far fa-sad-tear fa-10x place-self-center text-gray-200"></i>
                </div>
                <p class="py-6 px-5">
                    Unfortunately we don't have enough ratings to select an amp model to feature, but you can help!
                    <a href="#">Join our community</a> and start rating today!
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
