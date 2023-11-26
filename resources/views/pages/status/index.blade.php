@extends('layouts.main.main')
@section('stylesheet')

@endsection
@section('content')
    <section>
        <div class="cntn-andProfile mt-24 mx-auto w-full md:w-3/4 p-4 md:p-12 rounded-lg relative flex justify-between items-center">
            <div class="cntnPost flex items-center gap-3 ">
                @guest
                    <div class="addCntn bg-slate-800 w-fit rounded-md flex items-center gap-3 shadow-slate-950 shadow-md hover:bg-slate-600">
                        <a href="/login" type="button" class="flex items-center gap-3 px-8 py-3">
                            <i class="bi bi-box-arrow-in-right"></i>
                            <p>Login</p>
                        </a>
                    </div>
                @else
                    <div class="totalPost bg-slate-800 w-fit px-8 py-3 rounded-md flex items-center gap-3 shadow-slate-950 shadow-md">
                        <i class="bi bi-upload"></i>
                        <p>
                            {{ $totalPost }} Post
                        </p>
                    </div>
                    <div class="addCntn bg-slate-800 w-fit rounded-md flex items-center gap-3 shadow-slate-950 shadow-md">
                        <button type="button" class="flex items-center gap-3 px-8 py-3" id="frm-adCn">
                            <i class="bi bi-plus-circle"></i>
                            <p>Tambah</p>
                        </button>
                    </div>
                @endguest
            </div>
            @auth
                <div class="profilUser">
                    <a href="/profil/{{ auth()->user()->username }}" class="flex items-center space-x-2 w-fit p-2 transition-all rounded-xl group hover:bg-slate-800">
                        <div class="nmeUser relative">
                            <p class="username line-clamp-1 transition-all text-sm" id="username-user">
                                {{ auth()->user()->username }}
                            </p>
                        </div>
                        <div class="imgUser relative overflow-hidden w-16 h-16 rounded-[100%] border-2 flex-shrink-0 transition-all">
                            <img src="{{asset('storage/images/users/'.$userImage->nameFile)}}" alt="" class="w-full h-full object-cover object-center aspect-square">
                        </div>
                    </a>
                </div>
            @endauth
        </div>
    </section>
    @auth
        <section class="relative">
            <div class="w-full p-4 lg:w-3/4 mx-auto overflow-hidden hidden" id="frm-shCn">
                <div class="cntnProfil-addItem text-base md:text-xl lg:text-2xl space-y-6">
                    <form method="POST" action="/upstatus" class="form-item shadow-slate-950 shadow-lg p-4 rounded-md">
                        @csrf
                        <div class="titlContent space-y-2">
                            <div class="userUpload-item flex items-center gap-1">
                                <input type="text" name="titleContn" id="titleContn" placeholder="Judul konten" maxlength="255" value="{{ old('titleContn') }}" class="text-black w-full p-2 focus:outline-none rounded-lg" required>
                            </div>
                        </div>
                        <textarea name="userContent" id="userContent" placeholder="Apa yang ingin kamu tulis ?" value="{{ old('userContent') }}" class="contnItem text-black text-base mt-6 w-full min-h-[12rem] max-h-[24rem] p-2 focus:outline-none rounded-lg resize-none overflow-hidden" oninput="autoSize(this)"></textarea>
                        <div class="btnSub-cancel flex justify-end items-end gap-3">
                            <div class="btnCancel">
                                <button type="button" class="mt-4 border border-red-500 text-base px-8 py-2 rounded-lg hover:bg-red-800" id="frm-clsCn">Cancel</button>
                            </div>
                            <div class="btnSubmit">
                                <button type="submit" class="mt-4 border border-slate-500 text-base px-8 py-2 rounded-lg hover:bg-slate-800">Post</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    @endauth
    <section class="relative">
        <div class="w-full p-4 lg:w-3/4 mx-auto overflow-hidden">
            <div class="cntnProfil-list text-base md:text-xl lg:text-2xl space-y-6">
                @if (!$listContents->isEmpty())
                    @foreach ($listContents as $content)
                        <div class="cntn-item shadow-slate-950 shadow-lg p-4 rounded-md max-h-[25rem] overflow-auto">
                            <div class="titlContent space-y-2">
                                <h2> {{ $content->titleKonten }} </h2>
                                <div class="userUpload-date flex items-center gap-1">
                                    <a href="/profil/{{ $content->username }}" class="flex items-center space-x-2 w-fit p-2 transition-all rounded-xl group hover:bg-slate-800">
                                        <div class="imgUser relative overflow-hidden w-8 h-8 rounded-[100%] border-2 flex-shrink-0 transition-all">
                                            <img src="{{asset('storage/images/users/'.$content->nameFile)}}" alt="" class="w-full h-full object-cover object-center aspect-square">
                                        </div>
                                        <div class="nmeUser relative">
                                            <p class="username line-clamp-1 transition-all text-sm" id="username-user">
                                                {{ $content->username }}
                                            </p>
                                        </div>
                                    </a>
                                    <i class="bi bi-dot"></i>
                                    <div class="dateUpload">
                                        <p class="text-xs">
                                            {{ $content->created_at }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="contnUser text-base mt-6">
                                {!! nl2br(htmlspecialchars($content->konten, ENT_QUOTES, 'UTF-8')) !!}
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="cntn-item shadow-slate-950 shadow-lg p-4 rounded-md text-center">
                        <div class="titlContent space-y-2 opacity-50">
                            <h2> Tidak ada konten yang tersedia </h2>
                        </div>
                        <div class="contnUser text-base mt-6 opacity-50">
                            <p>
                                Saat ini masih belum ada konten yang tersedia
                            </p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script src=" {{ asset('assets/js/status/shFrm.js') }} "></script>
@endsection