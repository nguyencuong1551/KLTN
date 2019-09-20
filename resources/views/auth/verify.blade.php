@extends('layouts.app')

@section('content')
    <body background="https://img.heypik.com/background-image/20190122/psd-fantasy-blue-purple-watercolor-beautiful-background-heypik-7TU4487.jpg?x-oss-process=image/quality,q_70/watermark,image_c2h1aXlpbl9uZXcucG5n,g_center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Quên Mật Khẩu</div>
                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }}, <a
                                href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
