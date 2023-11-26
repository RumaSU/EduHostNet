@extends('layouts.main.main')
@section('stylesheet')
@endsection
@section('content')
    <section class="mt-36">
        <div class="form-login mx-auto w-1/3 px-8 py-4 border border-black rounded-2xl bg-slate-950">
            <h1 class="text-2xl font-bold">Sign Up</h1>
            <form method="POST" action="{{ route('storeUser') }}" class="flex flex-col mt-12">
                @csrf
                <div class="form-username space-y-1 relative">
                    <div class="the-labels flex justify-between items-center " >
                        <label for="username" class="font-bold"> Username </label>
                        <p class="create-account text-[12px]">
                            Mempunyai akun ? <a href="/login" class="text-[#0000FF] font-bold">Log In</a>
                        </p>
                    </div>
                    <input type="text" id="username" name="username" value="{{ old('username') }}"
                        @if (session('errorUsername'))
                            class="w-full py-2 px-1 border-2 border-red-800 bg-red-100 text-black rounded-lg rounded-br-none focus:outline-none pr-9"
                        @else
                            class="w-full py-2 px-1 border border-[#CED4DA] text-black rounded-lg focus:outline-none"
                        @endif
                    required>
                    @if (session('errorUsername'))
                        <div class="errPassword text-sm text-red-600 mt-2 flex items-center gap-2">
                            <i class="bi bi-exclamation-circle-fill text-base"></i>
                            <p>
                                {{ session('errorUsername') }}
                            </p>
                        </div>
                    @endif
                    
                </div>
                <div class="form-password space-y-1 relative mt-8">
                    <div class="the-labels flex items-center justify-between">
                        <label for="password" class="font-bold"> Password </label>
                        <div class="show-password">
                            <button type="button" class="flex items-center gap-1" onclick="showPassword(this)">
                                <i class="bi bi-eye-slash text-xl"></i>
                                <p class="text-xs font-bold">show</p>
                            </button>
                        </div>
                    </div>
                    <input type="password" id="password" name="password"
                        @if (session('errorPassword'))
                            class="w-full py-2 px-1 border-2 border-red-800 bg-red-100 text-black rounded-lg focus:outline-none pr-9"
                        @else
                            class="w-full py-2 px-1 border border-[#CED4DA] text-black rounded-lg focus:outline-none"
                        @endif
                    required>
                    @if (session('errorPassword'))
                        <div class="errPassword text-sm text-red-600 mt-2 flex items-center gap-2">
                            <i class="bi bi-exclamation-circle-fill text-base"></i>
                            <p>
                                {{ session('errorPassword') }}
                            </p>
                        </div>
                    @endif
                </div>
                <div class="form-confPassword space-y-1 relative mt-8">
                    <div class="the-labels flex items-center justify-between">
                        <label for="confPassword" class="font-bold"> Confirmation Password </label>
                        <div class="show-confPassword">
                            <button type="button" class="flex items-center gap-1" onclick="showPassword(this)">
                                <i class="bi bi-eye-slash text-xl"></i>
                                <p class="text-xs font-bold">show</p>
                            </button>
                        </div>
                    </div>
                    <input type="password" id="confPassword" name="confPassword"
                        @if (session('errorPassword'))
                            class="w-full py-2 px-1 border-2 border-red-800 bg-red-100 text-black rounded-lg focus:outline-none pr-9"
                        @else
                            class="w-full py-2 px-1 border border-[#CED4DA] text-black rounded-lg focus:outline-none"
                        @endif
                    required>
                    @if (session('errorPassword'))
                        <div class="errPassword text-sm text-red-600 mt-2 flex items-center gap-2">
                            <i class="bi bi-exclamation-circle-fill text-base"></i>
                            <p>
                                {{ session('errorPassword') }}
                            </p>
                        </div>
                    @endif
                </div>
                <button type="submit" class="mt-12 bg-[#0096FF] text-sm text-white font-bold py-2 rounded-lg " > Register </button>
            </form>
            <div class="divide-or flex justify-center items-center p-3 gap-3 mt-3">
                <hr class="border border-white w-1/2  ">
                <p class="text-center text-xs ">
                    OR
                </p>
                <hr class="border border-white w-1/2 ">
            </div>
            <p class="text-center my-3 text-xs">
                <a href="/login">
                    Sign In ?
                </a>
            </p>
        </div>    
    </section>
@endsection
@section('script')
    <script src="assets/js/login/password.js"></script>
@endsection