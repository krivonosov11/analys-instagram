@extends('layouts.fullLayoutMaster')
{{-- title --}}
@section('title','Login Page')
{{-- page scripts --}}
@section('page-styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/authentication.css')}}">
@endsection

@section('content')
    <!-- login page start -->
    <section id="auth-login" class="row flexbox-container">
        <div class="col-xl-8 col-11">
            <div class="card bg-authentication mb-0">
                <div class="row m-0">
                    <!-- left section-login -->
                    <div class="col-md-6 col-12 px-0">
                        <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                            <div class="card-header pb-1">
                                <div class="card-title">
                                    <h4 class="text-center mb-2">Check your profile</h4>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    {{-- form  --}}
                                    <form method="POST" action="{{route('start')}}">
                                        @csrf
                                        <div class="form-group mb-50">
                                            <label class="text-bold-600" for="email">Instagram link</label>
                                            <input id="link" required type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link') }}"  autocomplete="link" autofocus placeholder="Link">
                                            @error('link')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary glow w-100 position-relative">
                                            Start
                                            <i id="icon-arrow" class="bx bx-right-arrow-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- right section image -->
                    <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                        <div class="card-content">
                            <img class="img-fluid" src="{{asset('images/pages/login.png')}}" alt="branding logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login page ends -->
@endsection
