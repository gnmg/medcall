@extends('layouts.web')

@section('content')
<section id="saas_two_banner" class="saas_two_banner_section relative-position">

    <div class="container">
        <!-- Success message -->
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
    </div>
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-6">Right to us and we will get back to you in one day.</div></div>
    </div>
    <div class="container mt-5 p-lg-5 bg-light justify-content-center">

    <div class="row"></div>
        <form method="post" action="{{ route('contact.store') }}">
            <!-- CROSS Site Request Forgery Protection -->
            @csrf
            <!--Name-->
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">名前</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name" placeholder="名前">
                    @error('name')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <!--/Name-->
            <!--Eメール-->
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Eメール</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Eメール">
                    @error('email')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <!--/Eメール-->
            <!--Phone-->
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">電話番号</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="電話番号">
                    @error('phone')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <!--/Phone-->
            <!--Subject-->
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">ご用件</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="ご用件">
                    @error('subject')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <!--/Subject-->
            <!--Message-->
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Message</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" name="message" id="message" placeholder="ご用件"></textarea>
                    @error('message')
                    <div class="mt-2 text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <!--/Message-->
            <!--ボタンブロック-->
            <div class="form-group row">
                <div class="col-sm-12 col-lg-6">
                    <button type="submit" class="btn btn-primary ">登録</button>
                </div>
            </div>
            <!--/ボタンブロック-->

        </form>

    </div>


</section>
@endsection