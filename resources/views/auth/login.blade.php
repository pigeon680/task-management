@extends('system.app')
@section('content')

<div class="d-flex justify-content-center align-items-center">

    <div class="col-lg-2">
        <h1 style="text-align: center; font-size: x-large; padding-bottom: 3rem; padding-top: 6rem;">
            Task Management System
        </h1>
        <div class="card p-4">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="form-check">
                            <a class="btn-link" style="padding-left: 10rem;" href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
