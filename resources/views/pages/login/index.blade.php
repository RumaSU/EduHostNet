@extends('layouts.main.main')
@section('stylesheet')
@endsection
@section('content')
    <section class="mt-36">
        <div class="form-login mx-auto w-1/3 px-8 py-4 border border-black rounded-2xl bg-slate-950" >
            <h1 class="text-2xl font-bold">Log In</h1>
            <form method="POST" action="/login" class="flex flex-col mt-12">
                @csrf
                <div class="form-username space-y-2">
                    <div class="the-labels flex justify-between items-center " >
                        <label for="username" class="font-bold"> Username </label>
                        <p class="create-account text-[12px]">
                            Akun baru ? <a href="/register" class="text-[#0000FF] font-bold">Daftar disini</a>
                        </p>
                    </div>
                    <input type="text" id="username" name="username"
                    @if (session('message'))
                        class="w-full py-2 px-1 border border-red-800 bg-red-200 text-black rounded-lg focus:outline-none"                         
                    @else
                        class="w-full py-2 px-1 border border-[#CED4DA] text-black rounded-lg focus:outline-none" 
                    @endif
                    required>
                </div>
                <div class="form-password space-y-2 mt-8">
                    <div class="the-labels flex items-center justify-between">
                        <label for="password" class="font-bold"> Password </label>
                        <div class="show-password">
                            <button type="button" class="flex items-center gap-1 " onclick="showPassword(this)">
                                <i class="bi bi-eye-slash text-xl"></i>
                                <p class="text-xs font-bold">show</p>
                            </button>
                        </div>
                    </div>
                    <input type="password" id="password" name="password"
                    @if (session('message'))
                        class="w-full py-2 px-1 border border-red-800 bg-red-200 text-black rounded-lg focus:outline-none"                         
                    @else
                        class="w-full py-2 px-1 border border-[#CED4DA] text-black rounded-lg focus:outline-none" 
                    @endif
                    required>
                </div>
                @if (session('message'))
                    <div class="msgError mt-2 flex items-center gap-3 text-red-600">
                        <i class="bi bi-exclamation-circle text-xl"></i>
                        <p class="text-sm"> {{ session('message') }} </p>
                    </div>
                @endif
                <div class="form-remember flex items-center gap-4 mt-8">
                    <input type="checkbox" id="remember" name="remember" class="w-5 h-5 cursor-pointer">
                    <label for="remember" class="text-sm font-bold "  >Remember me</label>
                </div>
                <button type="submit" class="mt-12 bg-[#0096FF] text-sm text-white font-bold py-2 rounded-lg " > Login </button>
            </form>
            <div class="divide-or flex justify-center items-center p-3 gap-3 mt-3">
                <hr class="border border-black w-1/2  ">
                <p class="text-center text-xs ">
                    OR
                </p>
                <hr class="border border-black w-1/2 ">
            </div>
            <p class="text-center my-3 text-xs">
                <a href="">
                    Forgot Password ?
                </a>
            </p>
        </div>        
    </section>
@endsection
@section('script')
    <script src="{{ asset('assets/js/login/password.js') }}"></script>
@endsection
