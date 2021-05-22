<x-app-layout>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-8">
            <div class="filters flex flex-wrap space-y-4 md:space-y-0 border-b-2 border-gray-500 pb-8 md:pb-4 lg:pb-8">
                <h1 class="text-2xl px-4 w-full text-center">{{ $model->name }}</h1>
                <h2 class="text-1xl w-full text-center">({{ $model->amplifier->manufacturer->name }} {{ $model->amplifier->name }})</h2>
                <div class="px-4 w-full py-2">
                    <img src="/img/1959slp/thumb.png" class="object-contain rounded-md shadow-xl">
                </div>
            </div>
            <ul class="px-4 mt-8 space-y-4">
                <li>
                    <b>Description:</b> <span>{{$model->description}}</span>
                </li>
                <li>
                    <b>Tips:</b> <span>{{$model->tips}}</span>
                </li>
                <li>
                    <b>Clips:</b>
                        <ul class="space-y-2">
                            @foreach($model->amplifier->clips as $clip)
                                <li>
                                    <a href="{{$clip->href}}" target="_blank" class="inline-link">{{$clip->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                </li>
                <li>
                    <b>Speaker Cab:</b> <span>{{$model->speaker_cab}}</span>
                </li>
                <li>
                    <b>Stock Cabs:</b> <span>{{$model->stock_cabs}}</span>
                </li>
                <li>
                    <b>Manual:</b>
                    <span>
                        <a href="{{$model->amplifier->manual->href}}" target="_blank" class="inline-link">{{$model->amplifier->manual->title}}</a>
                    </span>
                </li>
                <li>
                    <b>Amp Controls:</b> <span>{{$model->amp_controls}}</span>
                </li>
            </ul>

            <h1 class="text-2xl px-4 py-8 w-full text-center">Amp Specs</h1>
            <ul class="px-4 space-y-4">
                @if($amp->manufacture_start && $amp->manufacture_end)
                    <li>
                        <b>Years of Manufacture:</b>
                        <span>
                            {{$amp->manufacture_start}} to {{$amp->manufacture_end }}
                        </span>
                    </li>
                @endif
                @if($amp->circuit)
                    <li>
                        <b>Circuit:</b> <span>{{$amp->circuit}}</span>
                    </li>
                @endif
                <li>
                    <b>Power:</b> <span>{{$amp->wattage}} watts</span>
                </li>
                <li>
                    <b>Master Volume:</b> <span>{{$amp->master_volume ? __('Yes') : __('No')}}</span>
                </li>
                <li>
                    <b>Negative Feedback:</b> <span>{{$amp->negative_feedback ? __('Yes') : __('No')}}</span>
                </li>
                <li>
                    <b>Preamp Tubes:</b> <span>{{$amp->preamp_tubes}}</span>
                </li>
                <li>
                    <b>Power Amp Tubes:</b> <span>{{$amp->power_amp_tubes}}</span>
                </li>
                <li>
                    <b>Tonestack Location:</b> <span>{{$amp->tone_stack_location}}</span>
                </li>
            </ul>
        </div>
        <div class="max-w-7xl mx-auto sm:px-2 lg:px-8">
            <p class="py-8">
                The world’s greatest rock amp is a Marshall “Plexi”. These came to the market in the mid ‘60s, when
                Marshall and Fender started to make loud amps. These amps are referred to as “Plexi” because of
                the gold Plexiglass front panel, later replaced with gold aluminum. Plexis with 4x12 cabinets gave
                rise to the “Marshall stack”. The Plexi was built for almost 20 years and was then replaced by the
                JCM 800. Even today’s amp builders still design amps based around the Plexi, such as the Bogner
                Helios. And its looks are being copied for all kinds of guitar amps.
            </p>
            <p class="py-2">So why has the Plexi become such a popular amp?</p>
            <blockquote class="relative p-4 text-lg italic border-l-4 bg-neutral-100 text-neutral-600 border-neutral-500 quote">
                <p class="mb-4">
                "Many things. First and most important perhaps is the sense of dynamics and rich harmonics.
                No large-production amp created before or since the early Marshall plexi series has been
                able to capture the feel of the player through varying degrees of dynamics and coloration
                from the (mostly) EL34-based tube circuits of these Marshalls. Call it a lucky accident with the
                folks at Marshall, but they were able to create amplifiers that really responded well to the
                guitars that played through them. A wide palette of distortion color that is rich and full and
                just powerful and timeless in tone is what these amps deliver. It takes some time to really get
                used to playing a basic amp such as a Marshall plexi. No multi channels or reverb or effects
                and no master volume controls. Turn up the amp and play – play hard and the amp rewards
                you with fullness of tone and smooth distortion. Back off your playing and the amp will
                respond, and move into lighter shades of overdrive. Roll down your guitar volume a touch
                and you’ve got a warmed up clean sound. There just isn’t anything like the ability to feel a set
                of power and preamp tubes overdriving together musically.”
                </p>
                <cite>
                    <a class="text-sm" href="https://legendarytones.com/marshall-shoppers-guide-1/" target="_blank">Legendary Tones</a>
                </cite>
            </blockquote>
            <p class="py-8">
                A Plexi is raw, unrefined, honest and touch sensitive. Hit a power chord through a Plexi and feel the
                explosion of sound in your face and body. Numerous guitar heroes played some kind of Plexi: Pete
                Townsend, Jimi Hendrix, Jimmy Page, Angus Young, Yngwie Malmsteen, Jeff Beck and of course Eddie Van
                Halen. The Plexi came in various incarnations. Many (but not all) Plexis have a JMP logo (“Jim Marshall”).
                Note that the number “1959” does not refer to the build year, it’s Marshall’s model number.
            </p>

            <p class="py-2">
                The ‘60s Marshall Superlead was one of the original 100 watt Plexi amps, a very desirable amp,
                number 9 on <a href="https://www.vintageguitar.com/24450/25-most-valuable-amplifiers/" class="inline-link">Vintage Guitar's list of the 25 most valuable guitar amps.</a>
                The 1959SLP is a re-issue, made in the ‘90s as part of the Vintage Re-issue Series.
            </p>
            <blockquote class="relative p-4 text-lg italic border-l-4 bg-neutral-100 text-neutral-600 border-neutral-500 quote">
                <p class="mb-4">
                    "The 100 Watt Super Lead head of the late ’60s (’68 – ’69) with the famed Plexiglass front
                    panel, is re-issued here in all its glory. The 1959SLP ‘Plexi’ head is the amp that defines classic
                    rock tone. To ensure absolute tonal authenticity, we took a ‘Plexi’ head from said era, and
                    using it as a template, our R&D experts developed a replica so exact, that sonically we
                    couldn’t tell them apart. The 1959SLP truly is the sound of rock.”
                </p>
                <cite>
                    <p class="text-sm">Marshall</p>
                </cite>
            </blockquote>

            <p class="pt-8">
                Like the original Plexi, the 1959SLP has four EL34 tubes and blasts 100 watt through (preferably) a 4x12
                cabinet. It provides two channels: Normal and Treble, and two inputs per channel. Both channels have been
                modeled by Fractal Audio.
            </p>
            <p class="pt-4">
                The Normal channel is much less bright than the Treble channel, and has loads of bass. It lends itself
                for use with a treble booster.
            </p>
            <p class="pt-4">
                The Treble channel can be painfully bright. A popular “mod” of the real Plexi is clipping the bright
                cap. In the virtual amp model that’s easy to do: turn off Bright. Or adjust the Bright Cap value.
                Note: turning off Bright will result in noticeable loss of amp gain.
            </p>

            <p class="pt-8">
                Apart from Volume controls, the amp has Bass, Middle, Treble and Presence controls. Eddie Van Halen
                cranked all volume and tone controls on his Plexi. To emulate his Variac: set the parameter “AC Voltage
                (Variac)” at 75 or so in the amp model.
            </p>
            <p class="pt-4">
                Some players of a real Plexi use patch cables to “jumper” the inputs: 2nd input of channel 1 goes into
                1st input of channel 2. This enables them to have the benefits of both channels at once. This is modeled
                in the “Jumpered” model of the 1959SLP. This particular amp model has two Drive controls. Set them at
                the same position, or keep Normal Drive lower than Treble Drive.
            </p>
            <p class="pt-4">
                The Treble channel can be painfully bright. A popular “mod” of the real Plexi is clipping the bright
                cap. In the virtual amp model that’s easy to do: turn off Bright. Or adjust the Bright Cap value.
                Note: turning off Bright will result in noticeable loss of amp gain.
            </p>

            <p class="pt-4">
                Like an original Plexi, the 1959SLP doesn’t have a Master Volume, so keep the Master control in the amp
                model cranked. Without a Master Volume control, Plexi amps rely on power amp distortion. To achieve a
                nice overdriven rock tone, you need to turn up a Plexi a lot. This makes it a very loud amp in real life.
            </p>

            <p class="pt-4">
                If you like to experiment, turn up Supply Sag in the amp model for more compression. Note that high sag
                settings may cause “ghosts notes”, similar to the real amp at high volume levels (watch the
                <a href="https://www.youtube.com/watch?v=c5Zo_iOXaRg&ab_channel=PremierGuitar" class="inline-link" target="_blank">
                    interview with J.D. Simo</a>). If you don't want ghosts notes, set Supply Type to DC.
            </p>

            <h2 class="text-lg pt-8"><b>JD Simo's Settings:</b></h2>
            <ul class="pt-2 pl-10 list-disc">
                <li>Bright Channel</li>
                <li>Bass: 0, Mid: 10, Treble: 10, Volume: 10</li>
                <li>Presence: to taste (around 5 or 6)</li>
                <li>Cabs: '69 4x12 basketweave with 2x 25w greenbacks and 2x Weber Cerwin Vega copies (try OH Marshall 1966B IR),
                    mic'd with Cascade Fat Head</li>
            </ul>

            <p class="pt-4">
                Another tweak is to switch on Boost in the amp model to slam the amp model's input stage for more gain.
            </p>
        </div>
    </div>
</x-app-layout>
