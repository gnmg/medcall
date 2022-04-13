@extends('layouts.app')

@section('content')
<div class="md:ml-64">
    <div class="flex flex-col items-center px-8 py-6">
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
        @endif

        @if(is_countable($calls) && count($calls) > 0)
        <!-- Start Call Table-->
        <div class=" sm:mt-24 md:mt-12">
            <div class="flex justify-between vis">
                <h2 class="text-xl font-bold vis">{{ __('lang.myreminders')}}</h2>
                @if(is_countable($calls) && count($calls) < 3) <a href="{{route('call.create')}}"
                    class="flex px-4 py-2 font-bold text-white bg-green-400 rounded hover:bg-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" stroke-width="20" fill="white" />
                    </svg>{{ __('lang.addreminder')}}</a>
                    @else
                    <div>{{ __('lang.can_not_add_anymore_reminders')}}</div>
                    @endif
            </div>

            <div class="mt-4">
                <div class="flex flex-col">
                    <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6">
                        <div
                            class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg hide">
                            <table class="min-w-full">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="px-6 py-3 text-sm font-semibold leading-4 tracking-wider text-right text-gray-700 uppercase border-b border-gray-200 bg-gray-50"
                                            style="text-align: start">
                                            {{ __('lang.reminder_title')}}
                                        </th>
                                        <th class="px-6 py-3 text-sm font-semibold leading-4 tracking-wider text-gray-700 uppercase border-b border-gray-200 bg-gray-50"
                                            style="text-align: start">
                                            {{ __('lang.time')}}
                                        </th>
										 <th class="px-6 py-3 text-sm font-semibold leading-4 tracking-wider text-gray-700 uppercase border-b border-gray-200 bg-gray-50"
                                            style="text-align: start">
                                            {{ __('lang.timezone')}}
                                        </th>
                                        <th class="px-6 py-3 text-sm font-semibold leading-4 tracking-wider text-gray-700 uppercase border-b border-gray-200 bg-gray-50"
                                            style="text-align: start">
                                            {{ __('lang.phone_number')}}
                                        </th>

                                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @foreach($calls as $call)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            {{ $call -> title }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <!-- {{str_replace(':00', '', $call -> time)}} -->
                                            {{$call -> time}}
                                        </td>
										<td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <!-- {{str_replace(':00', '', $call -> time)}} -->
                                            {{$call -> timezone}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            0{{ $call -> phone_numbers }}
                                        </td>
                                        <td
                                            class="px-6 py-4 text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200">
                                            <a href="{{ route('call.edit', $call->id)}}"
                                                class="text-indigo-600 hover:text-indigo-900"><span
                                                    class="inline-flex px-4 py-2 text-base font-semibold leading-5 bg-blue-200 rounded text-black-800">
                                                    {{ __('lang.edit')}}
                                                </span></a>
                                        </td>
                                        <td
                                            class="px-6 py-4 text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200">
                                            <button
                                                onclick="document.getElementById('id03{{$call->id}}').style.display='block'"
                                                class="inline-flex px-4 py-2 text-base font-semibold leading-5 bg-red-200 rounded text-black-800">{{ __('lang.delete')}}
                                            </button>
                                            <div id="id03{{$call->id}}" class='hidden'>
                                                <!-- This example requires Tailwind CSS v2.0+ -->
                                                <div class="fixed inset-0 z-10 overflow-y-auto">
                                                    <div
                                                        class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">

                                                        <div class="fixed inset-0 transition-opacity"
                                                            aria-hidden="true">
                                                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                                        </div>

                                                        <!-- This element is to trick the browser into centering the modal contents. -->
                                                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                                            aria-hidden="true">&#8203;</span>

                                                        <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                                                            role="dialog" aria-modal="true" x-show="on"
                                                            aria-labelledby="modal-headline">
                                                            <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                                                                <div class="sm:flex sm:items-start">
                                                                    <div
                                                                        class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto bg-red-100 rounded-full sm:mx-0 sm:h-10 sm:w-10">
                                                                        <!-- Heroicon name: exclamation -->
                                                                        <svg class="w-6 h-6 text-red-600"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" viewBox="0 0 24 24"
                                                                            stroke="currentColor" aria-hidden="true">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                                                        </svg>
                                                                    </div>
                                                                    <div
                                                                        class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                                        <h3 class="text-lg font-medium leading-6 text-gray-900"
                                                                            id="modal-headline">
                                                                            {{ __('lang.delete_reminder')}}
                                                                        </h3>
                                                                        <div class="mt-2">
                                                                            <p class="text-sm text-gray-500">
                                                                                {{ __("Are you sure you want to delete this reminder?")}}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                                                                <form action="{{ route('call.destroy', $call->id)}}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('DELETE')

                                                                    <button type="submit"
                                                                        class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                                        {{ __('lang.delete')}}
                                                                    </button>

                                                                    <button type="button"
                                                                        class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                                                        <span
                                                                            onclick="document.getElementById('id03{{$call->id}}').style.display='none'">{{ __('lang.cancel')}}</span>
                                                                    </button>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>


                            @else

                            <div class="container max-w-lg px-4 mx-auto sm:px-8">

                                <!-- card wrapper -->
                                <div class="mt-20 bg-white rounded-sm shadow-lg wrapper">

                                    <div class="px-8 py-8 card">


                                        <div class="text-center card-text">
                                            <h1 class="text-xl font-bold leading-tight text-gray-900 md:text-2xl">{{ __('lang.no_reminder')}}
                                                </h1>
                                        </div>

                                        <div class="flex justify-center mt-10">
                                            <div class=""><a href="{{ URL::route('call.create') }}"
                                                    class="flex px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-green-700">
                                                    {{ __('lang.addreminder-green')}}</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>

                        <div class="table hide-table" id="results">
                            <div class="lg:w-full">
                                <div class="justify-between mb-10">
                                    <h1 class="mb-10 text-xl font-bold">{{ __('lang.myreminders')}}</h1>
                                    @if(is_countable($calls) && count($calls) < 3) <a href="{{route('call.create')}}"
                                        class="flex px-4 py-2 font-bold text-white bg-green-400 rounded hover:bg-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24"
                                            width="24">
                                            <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" stroke-width="20"
                                                fill="white" />
                                        </svg>{{ __('lang.addreminder')}}</a>
                                        @else
                                        <div>{{ __('lang.can_not_add_anymore_reminders')}}</div>
                                        @endif
                                </div>
                                <div class='theader'>
                                    <div class='table_header'>{{ __('lang.reminder_title')}}</div>
                                    <div class='table_header'>{{ __('lang.time')}}</div>
                                    <div class='table_header'>{{ __('lang.phone_number')}}</div>

                                </div>
                                @foreach($calls as $call)
                                <div class='table_row'>
                                    <div class='table_small'>
                                        <div class='table_cell'>{{ __('lang.reminder_title')}}</div>
                                        <div class='table_cell'>{{ $call -> title }}</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>{{ __('lang.time')}}</div>
                                        <div class='table_cell'>{{$call -> time}}</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'>{{ __('lang.phone_number')}}</div>
                                        <div class='table_cell'>0{{ $call -> phone_numbers }}</div>
                                    </div>
                                    <div class='table_small'>
                                        <div class='table_cell'><a href="{{ route('call.edit', $call->id)}}"
                                                class="text-indigo-600 hover:text-indigo-900"><span
                                                    class="inline-flex px-4 py-2 text-base font-semibold leading-5 bg-blue-200 rounded text-black-800">
                                                    {{ __('lang.edit')}}
                                                </span></a></div>
                                        <div class='table_cell'><button
                                                onclick="document.getElementById('id04{{$call->id}}').style.display='block'"
                                                class="inline-flex px-4 py-2 text-base font-semibold leading-5 bg-red-200 rounded text-black-800">{{ __('lang.delete')}}
                                            </button>
                                            <div id="id04{{$call->id}}" class='hidden'>
                                                <!-- This example requires Tailwind CSS v2.0+ -->
                                                <div class="fixed inset-0 z-10 overflow-y-auto">
                                                    <div
                                                        class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">

                                                        <div class="fixed inset-0 transition-opacity"
                                                            aria-hidden="true">
                                                            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                                        </div>

                                                        <!-- This element is to trick the browser into centering the modal contents. -->
                                                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                                            aria-hidden="true">&#8203;</span>

                                                        <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                                                            role="dialog" aria-modal="true" x-show="on"
                                                            aria-labelledby="modal-headline">
                                                            <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                                                                <div class="sm:flex sm:items-start">
                                                                    <div
                                                                        class="flex items-center justify-center flex-shrink-0 w-12 h-12 mx-auto bg-red-100 rounded-full sm:mx-0 sm:h-10 sm:w-10">
                                                                        <!-- Heroicon name: exclamation -->
                                                                        <svg class="w-6 h-6 text-red-600"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" viewBox="0 0 24 24"
                                                                            stroke="currentColor" aria-hidden="true">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                                                        </svg>
                                                                    </div>
                                                                    <div
                                                                        class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                                        <h3 class="text-lg font-medium leading-6 text-gray-900"
                                                                            id="modal-headline">
                                                                            {{ __('lang.delete_reminder')}}
                                                                        </h3>
                                                                        <div class="mt-2">
                                                                            <p class="text-sm text-gray-500">
                                                                                {{ __("Are you sure you want to delete this reminder?")}}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                                                                <form action="{{ route('call.destroy', $call->id)}}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('DELETE')

                                                                    <button type="submit"
                                                                        class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                                        {{ __('lang.delete')}}
                                                                    </button>

                                                                    <button type="button"
                                                                        class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                                                        <span
                                                                            onclick="document.getElementById('id04{{$call->id}}').style.display='none'">{{ __('lang.cancel')}}</span>
                                                                    </button>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    @endsection