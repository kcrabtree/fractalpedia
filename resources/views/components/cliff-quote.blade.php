<div class="relative text-base w-full">
    <blockquote class="relative bg-white rounded-lg shadow-lg">
        <div class="rounded-t-lg px-6 py-8 sm:px-10 sm:pt-10 sm:pb-8">
            <img src="/img/fas-logo.png" class="h-8 filter invert">
            <div class="relative text-md text-gray-700 font-medium mt-8">
                <svg class="absolute top-0 left-0 transform -translate-x-3 -translate-y-2 h-8 w-8 text-gray-200" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                    <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                </svg>
                <p class="relative mt-6">
                    {{ $slot }}
                </p>
            </div>
        </div>
        <cite class="relative flex items-center sm:items-start bg-indigo-600 rounded-b-lg py-5 px-6 sm:py-5 sm:pl-12 sm:pr-10 sm:mt-10">
            <div class="rounded-full  sm:absolute sm:top-0 sm:transform sm:-translate-y-1/2">
                <span class="inline-block h-14 w-14 rounded-full overflow-hidden bg-gray-100">
                  <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                  </svg>
                </span>
            </div>
            <span class="relative ml-4 text-indigo-300 font-semibold leading-6 sm:ml-24 sm:pl-1">
              <p class="text-white font-semibold sm:inline">Cliff Chase</p>
              <p class="sm:inline">CEO Fractal Audio Systems</p>
            </span>
        </cite>
    </blockquote>
</div>
