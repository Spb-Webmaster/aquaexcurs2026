@extends('layouts.layout')
<x-seo.meta
    title=""
    description=""
    keywords=""
/>
@section('content')

    {{--{{ Breadcrumbs::render('site_excursion', $item) }}--}}

    <section class="relative pt-6">
{{--
        <x-layout.current-information/>
--}}
    </section>


    <section class="relative py-18 max-sm:pt-22 max-sm:pb-6 ">
        <div class="custom-block">
            <h1 class="text-center h1-rubik pb-6  text-3xl/12 text-[#02356A] max-lg:text-2xl">
                Заказ
            </h1>
            <div class="relative flex  justify-between">
                <div class="w-1/2">


                    <div class="w-[97%] min-h-[150px] custom-card  p-0! mb-10">
                        <div class="p-6">

                    <div class="cart_items py-2">

                        <div class="cart_cart-result-sum hidden app_cart_cart-result active">

                            <div class="new-block-result-cart" data-key="1">
                                <div class="cart_item">
                                    <div class="flex">
                                        <div class="cart_item__left">
                                            <div class="cart_item__human app_set_human">Взрослый</div>
                                        </div>

                                        <div class="cart_item__right flex justify-between w-full">
                                            <div class="">
                                                <div class="cart_item__title font-bold text-[#02356A]">Золотое кольцо Санкт-Петербурга</div>
                                                <div class="py-1"></div>
                                                <div class=""><span class="app_set_price">1100</span> ₽ x <span class="app_set_count">1</span> чел.
                                                </div>
                                                <div class=""><span class="app_set_sum">1100</span> ₽</div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div><div class="new-block-result-cart" data-key="2">
                                <div class="cart_item">
                                    <div class="flex">
                                        <div class="cart_item__left">
                                            <div class="cart_item__human app_set_human">Детский</div>
                                        </div>

                                        <div class="cart_item__right flex justify-between w-full">
                                            <div class="">
                                                <div class="cart_item__title font-bold text-[#02356A]">Золотое кольцо Санкт-Петербурга</div>
                                                <div class="py-1"></div>
                                                <div class=""><span class="app_set_price">700</span> ₽ x <span class="app_set_count">1</span> чел.
                                                </div>
                                                <div class=""><span class="app_set_sum">700</span> ₽</div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div><div class="new-block-result-cart" data-key="3">
                                <div class="cart_item">
                                    <div class="flex">
                                        <div class="cart_item__left">
                                            <div class="cart_item__human app_set_human">Льготный</div>
                                        </div>

                                        <div class="cart_item__right flex justify-between w-full">
                                            <div class="">
                                                <div class="cart_item__title font-bold text-[#02356A]">Золотое кольцо Санкт-Петербурга</div>
                                                <div class="py-1"></div>
                                                <div class=""><span class="app_set_price">600</span> ₽ x <span class="app_set_count">1</span> чел.
                                                </div>
                                                <div class=""><span class="app_set_sum">600</span> ₽</div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div></div>


                        <div class="app-cart-total cart-total hidden py-4 active">

                            <div class="flex">
                                <div class="cart-total__left w-[150px] min-w-[150px]"></div>
                                <div class="cart-total__right cart-t w-full">
                                    <hr class=" my-[.5em]">
                                    <div class="flex text-3xl font-[600] pt-2 w-full">
                                        <div class="app-cart-t mr-5">
                                            <span class="app-cart-sum">2&nbsp;400</span>
                                            <i class="not-italic">₽</i>
                                        </div>

                                    </div>
                                    <div class="text-sm font-[100] text-[#EF533F] py-2 app-type_ticket type_ticket">Детский билет продается только со взрослым</div>

                                </div>
                            </div>
                        </div>

                        <div class="app_temp_cart hidden">
                            <div class="cart_item">
                                <div class="flex">
                                    <div class="cart_item__left">
                                        <div class="cart_item__human app_set_human">Льготный</div>
                                    </div>

                                    <div class="cart_item__right flex justify-between w-full">
                                        <div class="">
                                            <div class="cart_item__title font-bold text-[#02356A]">Золотое кольцо Санкт-Петербурга</div>
                                            <div class="py-1"></div>
                                            <div class=""><span class="app_set_price">600</span> ₽ x <span class="app_set_count">1</span> чел.
                                            </div>
                                            <div class=""><span class="app_set_sum">600</span> ₽</div>

                                        </div>
                                        <div class="">
                <span class="app_cart_item_del cart_item_del block w-[37px] h-[50px] text-[#282828] cursor-pointer pt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"></path>
                          </svg>
                </span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                        </div>
                    </div>


                </div>

                   <div class="w-1/2">
                    <div class="w-[97%] min-h-[150px] custom-card  p-0! mb-10">

                        <div class="rounded-t-lg min-h-[50px] bg-gradient-to-r from-[#1B5CB4] via-[#1B5CB4] to-[#03a9f4] text-white p-2 text-sm flex flex-wrap items-center">
                            <span class="pr-2">Экскурсия: </span> <span>Золотое кольцо Санкт-Петербурга</span>

                        </div>

                        <div class="p-6">

                            <h3 class="h3-rubik">Заполните форму:</h3>

                            <div class="relative mb-5 pt-3">
                                <input type="text" id="input-name"
                                       class="custom-input peer"
                                       name="name"
                                       placeholder="">

                                <label for="input-name" class="custom-label">Имя <span
                                        class="text-red-700">*</span></label>
                            </div>

                            <div class="relative mb-5">
                                <input type="email" id="input-email"
                                       class="custom-input peer"
                                       name="email"
                                       placeholder="">

                                <label for="input-email" class="custom-label">Email <span
                                        class="text-red-700">*</span></label>
                            </div>
                            <div class="relative mb-5">
                                <input type="text" id="input-phone"
                                       class="custom-input peer imask"
                                       name="phone"
                                       placeholder="">

                                <label for="input-email" class="custom-label">Телефон <span
                                        class="text-red-700">*</span></label>
                            </div>

                            <div class="relative mb-5">
                                <input type="text"
                                       id="order-flatpickr-date"
                                       class="custom-input peer"
                                       placeholder="">

                                <label for="order-flatpickr-date" class="custom-label">Выбрать дату</label>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>

@endsection

