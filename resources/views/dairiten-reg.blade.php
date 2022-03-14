@extends('layouts.affiliate')

@section('content')
<!-- component -->


@if ($errors->any())


<!-- <div class="flex flex-col items-center px-8 py-6">
    <div class="items-center w-full p-8 my-4 text-red-600 bg-white shadow alert alert-danger lg:w-2/5">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div> -->


    @endif

    <form action="{{ route('affiliate.store') }}" method="post" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('{{ __('lang.terms-agree')}}'); return false; }">
        @csrf
        <div class="">
            <div class="flex flex-col items-center px-8 py-20">
                <div class="items-center w-full p-8 my-4 bg-white shadow lg:w-2/5">
                    <div class="flex items-center mb-8">
                        <div>
                            @if(session('success'))
                            <p class="mb-10 text-center text-red-700">
                                    {{ session('success') }}</p>
                                
                                @endif
                            <p class="text-center">下記のフォームに必要事項を入力してください。5日ほどでチラシをお送りします。</p>
                        </div>
                    </div>
                    <div class="w-full mb-4">
                        <div class="mb-10">
                            <label for="company_name" class="block mt-3 mb-2 mr-3 text-lg">貴社名<span
                                    class="text-sm bg-red-400 text-white rounded-sm px-1 py-0.5 ml-1">必要</span></label>
                            <input type="text" id="company_name" name="company_name" placeholder=""
                                class="text-sm border-gray-300 w-full shadow-md rounded bg-gray-100 text-gray-900  p-3 focus:outline-none mb-0.5 @error('company_name') border-2 border-red-500 @enderror"
                                value="{{ old('company_name')}}">

                            @error('company_name')
                            <div class="mt-2 text-sm text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-10">
                            <label for="name" class="block mt-3 mb-2 mr-3 text-lg">担当者名前<span
                                    class="text-sm bg-red-400 text-white rounded-sm px-1 py-0.5 ml-1">必要</span></label>
                            <input type="text" id="name" name="name"
                                class="text-sm border-gray-300 w-full shadow-md rounded bg-gray-100 text-gray-900  p-3 focus:outline-none mb-0.5 @error('name') border-2 border-red-500 @enderror"
                                value="{{ old('name')}}">

                            @error('name')
                            <div class="mt-2 text-sm text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mt-10">
                            <label for="email" class="block mt-3 mb-2 mr-3 text-lg">メールアドレス<span
                                    class="text-sm bg-red-400 text-white rounded-sm px-1 py-0.5 ml-1">必要</span></label>
                            <input type="text" id="email" name="email" 　
                                class="text-sm border-gray-300 w-full shadow-md rounded bg-gray-100 text-gray-900  p-3 focus:outline-none mb-0.5 @error('email') border-2 border-red-500 @enderror"
                                value="{{ old('email')}}">

                            @error('email')
                            <div class="mt-2 text-sm text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mt-10">
                            <label for="telephone" class="block mt-3 mb-2 mr-3 text-lg">電話番号<span
                                    class="text-sm bg-red-400 text-white rounded-sm px-1 py-0.5 ml-1">必要</span></label>
                            <input type="text" id="telephone" name="telephone" placeholder="例）03-1234-5678"
                                class="text-sm border-gray-300 w-full shadow-md rounded bg-gray-100 text-gray-900  p-3 focus:outline-none mb-0.5 @error('telephone') border-2 border-red-500 @enderror"
                                value="{{ old('telephone')}}">

                            @error('telephone')
                            <div class="mt-2 text-sm text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="flex justify-center mt-10">
                            <div class="w-1/4">
                                <label for="post_code" class="block mt-3 mb-2 mr-3 text-lg">郵便番号<span
                                        class="text-sm bg-red-400 text-white rounded-sm px-1 py-0.5 ml-1">必要</span></label>
                                <input type="text" id="post_code" name="post_code" placeholder="111-1111"
                                class="text-sm border-gray-300 w-full shadow-md rounded bg-gray-100 text-gray-900  p-3 focus:outline-none mb-0.5 @error('post_code') border-2 border-red-500 @enderror"
                                    value="{{ old('post_code')}}">

                                @error('post_code')
                                <div class="mt-2 text-sm text-red-500">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="w-3/4 pl-5">
                                <label for="address" class="block mt-3 mb-2 mr-3 text-lg">住所<span
                                        class="text-sm bg-red-400 text-white rounded-sm px-1 py-0.5 ml-1">必要</span></label>
                                <input type="text" id="address" name="address" placeholder="東京都新宿区西新宿2-8-1"
                                    class="text-sm border-gray-300 w-full shadow-md rounded bg-gray-100 text-gray-900  p-3 focus:outline-none mb-0.5 @error('address') border-2 border-red-500 @enderror"
                                    value="{{ old('address')}}">

                                @error('address')
                                <div class="mt-2 text-sm text-red-500">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="w-1/2 mt-10">
                            <label for="bank_name" class="block mt-3 mb-2 mr-3 text-lg">金融機関<span
                                    class="text-sm bg-red-400 text-white rounded-sm px-1 py-0.5 ml-1">必要</span></label>
                            <input type="text" id="bank_name" name="bank_name" placeholder=""
                                class="text-sm border-gray-300 w-full shadow-md rounded bg-gray-100 text-gray-900  p-3 focus:outline-none mb-0.5 @error('bank_name') border-2 border-red-500 @enderror"
                                value="{{ old('bank_name')}}">

                            @error('bank_name')
                            <div class="mt-2 text-sm text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="w-1/2 mt-10">
                            <label for="branch_name" class="block mt-3 mb-2 mr-3 text-lg">支店<span
                                    class="text-sm bg-red-400 text-white rounded-sm px-1 py-0.5 ml-1">必要</span></label>
                            <input type="text" id="branch_name" name="branch_name" placeholder=""
                                class="text-sm border-gray-300 w-full shadow-md rounded bg-gray-100 text-gray-900  p-3 focus:outline-none mb-0.5 @error('branch_name') border-2 border-red-500 @enderror"
                                value="{{ old('branch_name')}}">

                            @error('address')
                            <div class="mt-2 text-sm text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="w-1/2 mt-10">
                            <label for="bank_account" class="block mt-3 mb-2 mr-3 text-lg">口座番号<span
                                    class="text-sm bg-red-400 text-white rounded-sm px-1 py-0.5 ml-1">必要</span></label>
                            <input type="text" id="bank_account" name="bank_account" placeholder="例：9678543"
                                class="text-sm border-gray-300 w-full shadow-md rounded bg-gray-100 text-gray-900  p-3 focus:outline-none mb-0.5 @error('bank_account') border-2 border-red-500 @enderror"
                                value="{{ old('bank_account')}}">

                            @error('bank_account')
                            <div class="mt-2 text-sm text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="w-1/2 mt-10">
                            <label for="account_type" class="block mt-3 mb-2 mr-3 text-lg">口座タイプ<span
                                    class="text-sm bg-red-400 text-white rounded-sm px-1 py-0.5 ml-1">必要</span></label>
                            <label class="inline-flex items-center mr-5 ">
                                <input type="radio" id="account_type" name="account_type" value="普通" class="ml-2"
                                    placeholder="Message Voice" @if(old('account_type')=='普通' ) checked @endif<span
                                    class="ml-2" checked>普通</span>
                            </label>
                            <label class="inline-flex items-center mr-5">
                                <input type="radio" id="account_type" name="account_type" value="当座" class=""
                                    placeholder="Message Voice" @if(old('account_type')=='当座' ) checked @endif<span
                                    class="ml-2">当座</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" id="account_type" name="account_type" value="貯蓄" class=""
                                    placeholder="Message Voice" @if(old('account_type')=='貯蓄' ) checked @endif<span
                                    class="ml-2">貯蓄</span>
                            </label>
                            @error('account_type')
                            <div class="mt-2 text-sm text-red-500">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="pt-5"><input class="mr-1" type="checkbox" name="checkbox" value="check" id="agree" /><a href="{{ url('/dairiten-terms') }}" class="ml-2 text-indigo-600">利用規約</a>・<a href="{{ url('/privacy') }}" target="_blank" class="text-indigo-600">プライバシーポリシー</a>に同意の上でお進みください。</div>
                        <div class="w-full mt-10">
                            <div class="items-center">
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