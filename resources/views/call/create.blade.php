@extends('layouts.app')

@section('content')
<!-- component -->


@if ($errors->any())


<div class="flex flex-col items-center px-8 py-6">
    <div class="items-center w-full p-8 my-4 text-red-600 bg-white shadow alert alert-danger lg:w-3/5">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>

@endif
<form action="{{ route('call.store') }}" method="post">
    @csrf
    <div class="md:ml-64">
        <div class="flex flex-col items-center px-8 py-20">
            <div class="mb-4 text-left lg:w-3/5">
                <h2 class="text-xl font-bold ">{{ __('lang.addreminder')}}</h2>
            </div>  

            <div class="items-center w-full p-8 my-4 bg-white shadow lg:w-3/5">
                <div class="flex items-center mb-8">
                    <div
                        class="w-10 h-10 px-3 py-1 mr-2 text-xl font-bold text-blue-500 border-2 border-blue-400 rounded-full">
                        1
                    </div>
                    <h2 class="text-lg">{{ __('lang.reminder_title')}}</h2>
                </div>
                <div class="w-full mb-4">
                    <div class="">
                        <label for="title" class="block mt-3 mb-2 mr-3 text-lg">{{ __('lang.title')}}<span
                                class="text-sm bg-red-400 text-white rounded-sm px-1 py-0.5 ml-3">Required</span></label>
                        <input type="text" id="title" name="title" placeholder="{{ __('lang.title_placeholder')}}"
                            class="text-sm border-gray-300 md:w-3/4 w-full shadow-md rounded bg-gray-200 text-gray-900  p-3 focus:outline-none mb-0.5 @error('title') border-2 border-red-500 @enderror"
                            value="{{ old('title')}}">

                        @error('title')
                        <div class="mt-2 text-sm text-red-500">
                            {{ $message }}
                        </div>
                        @enderror

                        <div class="block mt-3 mb-2 mr-3 text-sm text-gray-400">
                            {{ __("Enter a title that is easy to　remember.")}}</div>
                    </div>
                </div>
            </div>
            <div class="items-center w-full p-8 my-4 bg-white shadow lg:w-3/5">
                <div class="flex items-center mb-8">
                    <div
                        class="w-10 h-10 px-3 py-1 mr-2 text-xl font-bold text-blue-500 border-2 border-blue-400 rounded-full">
                        2
                    </div>
                    <h2 class="text-lg">{{ __('lang.schedule')}}</h2>
                </div>
                <div class="w-full mb-7">
                    <div class="">
                        <label for="time" class="block mt-3 mb-2 mr-3 text-lg">{{ __('lang.time')}}<span
                                class="text-sm bg-red-400 text-white rounded-sm px-1 py-0.5 ml-3">Required</span></label>

                        <input type="text" id="time" name="time" placeholder="{{ __('lang.time_placeholder')}}"
                            class=" bs-timepicker text-sm border-gray-300 md:w-3/4 w-full shadow-md rounded bg-gray-200 text-gray-900  p-3 focus:outline-none mb-0.5 @error('time') border-2 border-red-500 @enderror"
                            value="{{ old('time') }}">

                        @error('time')
                        <div class="mt-2 text-sm text-red-500">
                            {{ $message }}
                        </div>
                        @enderror


                        <div class="block mt-3 mb-2 mr-3 text-sm text-gray-400">
                            {{ __("Enter the time you want to be called.")}}</div>
                    </div>
                </div>
				<div class="w-full mb-7">
                    <div class="">
                        <label for="time" class="block mt-3 mb-2 mr-3 text-lg">{{ __('lang.timezone')}}<span
                                class="text-sm bg-red-400 text-white rounded-sm px-1 py-0.5 ml-3">Required</span></label>

                      <!--  <input type="text" id="timezone" name="timezone" placeholder="{{ __('lang.timezone_placeholder')}}"
                            class=" text-sm border-gray-300 md:w-3/4 w-full shadow-md rounded bg-gray-200 text-gray-900  p-3 focus:outline-none mb-0.5 @error('time') border-2 border-red-500 @enderror"
                            value="{{ old('timezone') }}">-->
							<select id="timezone" name="timezone" class=" text-sm border-gray-300 md:w-3/4 w-full shadow-md rounded bg-gray-200 text-gray-900  p-3 focus:outline-none mb-0.5 @error('time') border-2 border-red-500 @enderror">
							<option value="(UTC-08:00) Pacific Time (US and Canada) America/Los_Angeles">(UTC-08:00) Pacific Time (US and Canada) America/Los_Angeles</option>
							<option value="(UTC-07:00) Mountain Time (US and Canada) America/Denver">(UTC-07:00) Mountain Time (US and Canada) America/Denver</option>
							<option value="(UTC-06:00) Central Time (US and Canada) America/Chicago">(UTC-06:00) Central Time (US and Canada) America/Chicago</option>
							<option value="(UTC-05:00) Eastern Time (US and Canada) America/New_York">(UTC-05:00) Eastern Time (US and Canada) America/New_York</option>
							<option value="(UTC +9) JST Japan Standard Time">(UTC +9) JST Japan Standard Time</option>
							
							</select>

                        @error('timezone')
                        <div class="mt-2 text-sm text-red-500">
                            {{ $message }}
                        </div>
                        @enderror


                        <div class="block mt-3 mb-2 mr-3 text-sm text-gray-400">
                            {{ __("Enter the timeZone.")}}</div>
                    </div>
                </div>


                <div class="w-full mb-4">
                    <div class">
                        <label for="phone_numbers"
                            class="block mt-3 mb-2 mr-3 text-lg">{{ __('lang.phone_number')}}<span
                                class="text-sm bg-red-400 text-white rounded-sm px-1 py-0.5 ml-3">Required</span></label>
                        <input type="text" id="phone_numbers" name="phone_numbers"
                            class="text-sm border-gray-300 md:w-3/4 w-full shadow-md rounded bg-gray-200 text-gray-900  p-3 focus:outline-none mb-0.5 @error('phone_numbers') border-2 border-red-500 @enderror"
                            placeholder="{{ __('lang.phone_number_placeholder')}}" value="{{ old('phone_numbers') }}">

                        @error('phone_numbers')
                        <div class="mt-2 text-sm text-red-500">
                            {{ $message }}
                        </div>
                        @enderror


                        <div class="block mt-3 mb-2 mr-3 text-sm text-gray-400">
                            {{ __("Enter the phone number you would like to be called at.")}}</div>
                    </div>
                </div>
            </div>
            <div class="items-center w-full p-8 my-4 bg-white shadow lg:w-3/5">
                <div class="flex items-center mb-8">
                    <div
                        class="w-10 h-10 px-3 py-1 mr-2 text-xl font-bold text-blue-500 border-2 border-blue-400 rounded-full">
                        3
                    </div>
                    <h2 class="text-lg">{{ __('lang.message')}}</h2>
                </div>
                <div class="w-full mb-7">
                    <div class="">
                        <label for="message_voice"
                            class="block mt-3 mb-2 mr-3 text-lg">{{ __('lang.message_voice')}}<span
                                class="text-sm bg-red-400 text-white rounded-sm px-1 py-0.5 ml-3">Required</span></label>
                        <label class="inline-flex items-center">
                            <input type="radio" id="message_voice" name="message_voice" value="Male" class=""
                                placeholder="Message Voice" {{ (old('message_voice') == "Male") ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('lang.male')}}</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" id="message_voice" name="message_voice" value="Female" class=""
                                placeholder="Message Voice" {{ (old('message_voice') == "Female") ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('lang.female')}}</span>
                        </label>

                        @error('message_voice')
                        <div class="mt-2 text-sm text-red-500">
                            {{ $message }}
                        </div>
                        @enderror
                        <!-- <div class="block mt-3 mb-2 mr-3 text-sm text-gray-400">
                            {{ __("Choose the voice that the message will be played in.")}}</div> -->

                    </div>
                </div>
                <div class="w-full mb-4">
                    <div class="">
                        <label for="message" class="block mt-3 mb-2 mr-3 text-lg">{{ __('lang.message')}}<span
                                class="text-sm bg-red-400 text-white rounded-sm px-1 py-0.5 ml-3">Required</span></label>
                        <textarea type="textarea" id="message" name="message"
                            class="text-sm border-gray-300 w-full  md:w-3/4 shadow-md rounded bg-gray-200 text-gray-900  p-3 focus:outline-none  @error('message') border-2 border-red-500 @enderror"
                            placeholder="{{ __('lang.message_placeholder')}}">{{ old('message') }}</textarea>
                        @error('message')
                        <div class="mt-2 text-sm text-red-500">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="block mt-3 mb-2 mr-3 text-sm text-gray-400">
                            {{ __("Type in a message that will be played when the call is answered.")}}</div>
                    </div>
                </div>
            </div>
            <div class="items-center w-full p-8 my-4 bg-white shadow lg:w-3/5">
                <div class="flex items-center mb-8">
                    <div
                        class="w-10 h-10 px-3 py-1 mr-2 text-xl font-bold text-blue-500 border-2 border-blue-400 rounded-full">
                        4
                    </div>
                    <h2 class="text-lg">{{ __('lang.alert')}}</h2>
                </div>
                <div class="w-full mb-4">
                    <div class="mb-7">
                        <label for="sos" class="block mt-3 mb-2 mr-3 text-lg">{{ __('lang.turn_on_alert_message')}}<span
                                class="text-sm bg-red-400 text-white rounded-sm px-1 py-0.5 ml-3">Required</span></label>
                        <label class="inline-flex items-center">
                            <input type="radio" id="sos" name="sos" value="yes" class="" placeholder="Message Voice"
                                {{ (old('sos') == "yes") ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('lang.yes')}}</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" id="sos" name="sos" value="no" class="" placeholder="Message Voice"
                                {{ (old('sos') == "no") ? 'checked' : '' }}>
                            <span class="ml-2">{{ __('lang.no')}}</span>
                        </label>

                        @error('sos')
                        <div class="mt-2 text-sm text-red-500">
                            {{ $message }}
                        </div>
                        @enderror
                        <div class="block mt-3 mb-2 mr-3 text-sm text-gray-400">
                            </div>

                    </div>


                    <div class="w-full mb-4">
                        <div class="mb-16">
                            <label for="sos_email" class="block mt-3 mb-2 mr-3 text-lg">{{ __('lang.email')}}</label>
                            <input type="text" id="sos_email" name="sos_email" value="{{ old('sos_email') }}"
                                class="text-sm border-gray-300 md:w-3/4 w-full shadow-md rounded bg-gray-200 text-gray-900  p-3 focus:outline-none mb-0.5  @error('sos_email') border-2 border-red-500 @enderror"
                                placeholder="{{ __('lang.email')}}">
                            @error('sos_email')
                            <div class="mt-2 text-sm text-red-500">
                                {{ $message }}
                                @enderror
                                <div class="block mt-3 mb-2 mr-3 text-sm text-gray-400">
                                    {{ __("Enter the email addess where you want the alert sent to.")}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full mb-4">
                        <div class="items-center">
                        <a href="/dashboard"
                            class="px-4 py-3 font-medium text-black bg-white border border-gray-400 rounded place-self-center">{{ __('lang.cancel')}}</a>
                            
                            <button type="submit"
                                class="px-4 py-3 font-medium text-white bg-blue-500 rounded place-self-center ">{{ __('lang.submit')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>




@endsection('content')