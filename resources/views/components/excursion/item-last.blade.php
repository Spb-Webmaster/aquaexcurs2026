<div class="w-[100%] max-md:w-full basis-auto rounded-lg h-full">

    <div class=" p-0! h-full w-full flex justify-between custom-card  max-md:flex-col-reverse ">

        <div class="w-[50%]  flex flex-col  justify-between max-md:w-full">
            <div
                class="min-h-[50px] bg-gradient-to-r from-[#1B5CB4] via-[#1B5CB4] to-[#03a9f4] text-white p-2 text-sm flex flex-wrap items-center rounded-tl-lg max-md:hidden">
                @if($item->route)
                    @foreach($item->route as $route)
                        {{ trim($route['json_route_text']) }}
                        @if(!$loop->last)
                            {{ __(' - ') }}
                        @endif
                    @endforeach
                @endif
            </div>
            <div class="h-full flex flex-col w-full justify-between pt-6 pr-6 pb-8 pl-6">
                <div class="relative">

                    <h2 class="">
                        <a class="text-lg font-bold uppercase text-[#02356A] hover:text-[#1B5CB4]"
                           href="{{ route('site_excursion', ['slug' => $item->slug ]) }}">{{ $item->title }}</a>
                    </h2>

                    <div class="text-sm">
                        <p class="pt-3">{!! $item->short_desc !!} </p>
                    </div>
                </div>
                <div class="relative">
                    <div class="flex justify-start items-center">
                        <div class="w-1/2 xl:w-1/3 pt-5 pb-5">
                            <div
                                class="text-[#1B5CB4] text-3xl font-bold">{{ price(1000) }} {{ config('currency.currency.RUB') }}</div>
                            <div class="custom-grey text-[13px] font-thin">На
                                причале {{ price(1500) }} {{ config('currency.currency.RUB') }}</div>
                        </div>

                        <div class="w-1/2 pt-5 pb-5">
                            <div class="text-green-600 text-3xl font-bold">100</div>
                            <div class="custom-grey text-[13px] font-thin">Осталось мест</div>
                        </div>
                    </div>

                    <div class="flex justify-start items-center relative">

                        <a href="{{ route('site_excursion', ['slug' => $item->slug ]) }}" class="w-1/2 xl:w-1/3 h-auto block"><span
                                class="inline-block text-white bg-[#1B5CB4] transition-all ease-in-out duration-200 hover:bg-[#03a9f4]   font-light rounded-lg text-sm px-7 py-2.5 text-center max-sm:px-4 ">Купить билет</span></a>

                        <a href="{{ route('site_excursion', ['slug' => $item->slug ]) }}" class="w-1/2 h-auto block"><span
                                class="inline-block  bg-[#88d220] transition-all ease-in-out duration-200 hover:bg-green-600  hover:text-white   font-light rounded-lg text-sm px-7 py-2.5 text-center max-sm:px-4">Узнать больше</span></a>

                    </div>
                </div>
            </div>
        </div>
        <a class="block w-[50%]  max-md:w-full" href="{{ route('site_excursion', ['slug' => $item->slug ]) }}">
            <div
                @if($item->img) style="background-image: url({{ Storage::url($item->img) }}) @endif"
                class="bg-no-repeat bg-cover bg-center  min-h-[364px] max-sm:min-h-[264px] h-full rounded-r-lg max-md:rounded-t-lg"></div>
            <div
                class="min-h-[50px] bg-gradient-to-r from-[#1B5CB4] via-[#1B5CB4] to-[#03a9f4] text-white p-2 text-sm flex flex-wrap items-center md:hidden">
                @if($item->route)
                    @foreach($item->route as $route)
                        {{ trim($route['json_route_text']) }}
                        @if(!$loop->last)
                            {{ __(' - ') }}
                        @endif
                    @endforeach
                @endif
            </div>

        </a>
    </div>
</div>
