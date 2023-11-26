@extends('layouts.main.main')
@section('stylesheet')
    <link rel="stylesheet" href="{{asset('assets/css/profil/hideDelForm.css')}}">
@endsection
@section('content')
    <section>
        <div class="contProfilUser mt-24 mx-auto w-full md:w-3/4 rounded-lg relative">
            <div class="profilUser flex items-center gap-3 p-4 md:p-12">
                <div class="phtProfilUser w-24 h-24 md:w-36 md:h-36 xl:w-48 xl:h-48 relative group flex-shrink-0">
                    <img id="userImage" src="{{asset('storage/images/users/'.$userImage->nameFile)}}" alt="{{ $userData->username }} Photo Images" class="w-full h-full object-cover object-center rounded-[100%] border-[3px]" >
                    @if (optional(auth()->user())->username === $userData->username )
                        <div class="edtImgProfil hidden md:block">
                            <button type="button" id="icEditImageUser" class="text-black border bg-white rounded-lg p-2 scale-50 lg:scale-100 absolute right-0 top-0 -translate-x-0 -translate-y-0 invisible opacity-0 transition-all group-hover:visible group-hover:opacity-100 hover:invert">
                                <i class="bi bi-pencil text-2xl"></i>
                            </button>
                        </div>
                        <form action="/update-image" method="POST" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="imageUser" id="imageUser" accept="image/*" class="hidden" required>
                            <button type="submit" id="submitImageUser" class=""></button>
                        </form>
                        @if (session('error'))
                            <p>
                                {{ session('error') }}
                            </p>
                        @endif
                    @endif
                </div>
                <div class="rghtProfilEdit flex justify-between items-center w-full">
                    <div class="profil-editName space-y-2">
                        <div class="profilName">
                            <div class="usernameUser text-base md:text-lg 2xl:text-2xl">
                                <p>
                                    {{ $userData->username }}
                                </p>
                            </div>
                            <div class="joinWhen text-sm flex items-center gap-3 select-none">
                                <i class="bi bi-calendar3 text-base"></i>
                                <p class="text-xs">
                                    Joined {{ $userData->created_at}}
                                </p>
                            </div>
                        </div>
                        @if (optional(auth()->user())->username === $userData->username )
                            <div class="edtProfil flex flex-wrap gap-3 lg:hidden space-y-2">
                                <button type="button" id="saveEditImageMobile" class="edt border border-blue-800 bg-blue-600 text-xs text-white px-4 py-2 rounded-md hidden">
                                    <div class="ic flex items-center gap-3">
                                        <i class="bi bi-save"></i>
                                        <p>Simpan Foto</p>
                                    </div>
                                </button>
                                <button type="button" class="edt border border-white bg-white text-xs text-black px-4 py-2 rounded-md">
                                    <p>Edit Akun</p>
                                </button>
                                <button type="button" class="edt border border-red-800 bg-red-600 text-xs text-white px-4 py-2 rounded-md" id="btnShdelAcc-mobile">
                                    <p>Hapus Akun</p>
                                </button>
                            </div>
                        @endif
                    </div>
                    @if (optional(auth()->user())->username === $userData->username )
                        <div class="edtProfil hidden lg:flex flex-wrap gap-2">
                            <button type="button" id="saveEditImage" class="edt border border-blue-800 bg-blue-600 text-base text-white px-6 py-2 rounded-md hidden">
                                <div class="ic flex items-center gap-3">
                                    <i class="bi bi-save"></i>
                                    <p>Simpan Foto</p>
                                </div>
                            </button>
                            <button type="button" class="edt border border-white bg-white text-base text-black px-6 py-2 rounded-md">
                                <p>Edit Akun</p>
                            </button>
                            <button type="button" class="edt border border-red-800 bg-red-600 text-base text-white px-6 py-2 rounded-md" id="btnShdelAcc">
                                <p>Hapus Akun</p>
                            </button>
                        </div>
                    @endif
                </div>
            </div>
            <div class="imgBg -z-10 absolute  left-0 top-1/2 -translate-x-0 -translate-y-1/2 w-full h-[105%] opacity-20 blur-lg shadow-white shadow-xl">
                <img src="{{asset('storage/images/users/'.$userImage->nameFile)}}" alt="" class="w-full h-[105%] object-cover object-center">
            </div>
        </div>
    </section>
    <section>
        <div class="cntnPost mx-auto w-full md:w-3/4 p-4 md:p-12 rounded-lg relative flex items-center gap-3">
            <div class="totalPost bg-slate-800 w-fit px-8 py-3 rounded-md flex items-center gap-3 shadow-slate-950 shadow-md">
                <i class="bi bi-upload"></i>
                <p>
                    {{ $totalPost }}
                </p>
            </div>
            @if (optional(auth()->user())->username === $userData->username)
                <div class="addCntn bg-slate-800 w-fit rounded-md flex items-center gap-3 shadow-slate-950 shadow-md">
                    <button type="button" class="flex items-center gap-3 px-8 py-3" id="frm-adCn">
                        <i class="bi bi-plus-circle"></i>
                        <p>Tambah</p>
                    </button>
                </div>
            @endif
        </div>
    </section>
    @if (optional(auth()->user())->username === $userData->username)
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
    @endif
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
                                            <img src="{{asset('storage/images/users/'.$userImage->nameFile)}}" alt="" class="w-full h-full object-cover object-center aspect-square">
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
    @auth    
        <div class="alertDelAccount w-3/4 xl:w-1/3 transition-all duration-300 fixed z-[99] top-1/2 -translate-x-1/2 -translate-y-1/2 rounded-lg overflow-hidden @if(session('error')) shFormDel @else hideFormDel @endif "id="popFormDelAcc">
            <div class="acc bg-slate-700 p-12">
                <div class="icCanle absolute right-[5%] top-[10%] -translate-x-[5%] -translate-y-[10%]">
                    <button class="cancelDelete bg-slate-600 p-2 rounded-lg" id="clsPopFormDel">
                        <i class="bi bi-x-circle text-3xl"></i>
                    </button>
                </div>
                <div class="tiDelAc text-3xl">
                    <strong>
                        Hapus Akun?
                    </strong>
                </div>
                <div class="sntcDelAc mt-4">
                    <div class="pDel">
                        <p>
                            Penghapusan akunmu akan menghilangkan semua informasi yang ada dari database kami dan tidak dapat dikembalikan.
                        </p>
                    </div>
                    <form action="/delete" method="POST" class=" mt-6">
                        @csrf
                        <div class="chckInpUsername w-full">
                            <div class="labels text-xs text-gray-400 select-none">
                                <label for="username">
                                    <p class="line-clamp-1">
                                        Ketik "{{auth()->user()->username}}" untuk melanjutkan
                                    </p>
                                </label>
                            </div>
                            <div class="inp-buConfDel flex flex-col md:flex-row items-center gap-6">
                                <div class="inp w-full relative">
                                    <input type="text" name="username" id="username" class="w-full p-2 focus:outline-none rounded-lg text-black border @if(session('error')) bg-red-200 border-red-600 @else bg-white border-none @endif" maxlength="100" required>
                                    @if (session('error'))
                                        <div class="err text-xs text-red-400 absolute left-0 top-[200%] -translate-x-0 -translate-y-[200%] flex items-center gap-2">
                                            <i class="bi bi-exclamation-circle-fill"></i>
                                            <p class="">{{session('error')}}</p>
                                        </div>
                                    @endif
                                </div>
                                <div class="buConfDelAc flex-shrink-0">
                                    <button type="submit" class="edt border border-red-800 bg-red-600 text-base text-white px-6 py-2 rounded-md">
                                        <p>Hapus Akun</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endauth
    <div class="ovSHFrm z-50 fixed h-full w-full left-0 top-0 bg-black/40 @if(session('error')) block @else hidden @endif" id="ovSHFrm"></div>
@endsection
@section('script')
    <script src="{{ asset('assets/js/status/shFrm.js') }}"></script>
    <script src="{{ asset('assets/js/profil/edImage.js') }}"></script>
    <script src="{{asset('assets/js/profil/shDelAcc.js')}}"></script>
@endsection