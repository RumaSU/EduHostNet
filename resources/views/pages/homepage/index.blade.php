@extends('layouts.main.main')
@section('stylesheet')
@endsection
@section('content')
    <section class="relative">
        <div class="cntnHeadPage mt-24 mx-auto p-4 md:p-12 w-full md:w-3/4 ">
            <h1 class="text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl leading-snug line-clamp-3">
                Kelompok 1.
            </h1>
            <div class="description mt-12 opacity-70">
                <p>Selamat datang di website hosting pertama kami dari kelompok 1, kelas D3TI-2B Jurusan Teknik Informatika
                    Politeknik Negeri Indramayu.</p>
                <p>Kelompok kami berjumlah 7 Orang yang terdiri dari:</p>
                <table class="mt-12 mx-auto w-3/4 space-y-4 px-12">
                    <tr class="mt-2 flex gap-4">
                        <td class="py-4 px-4 w-full md:w-1/2 xl:w-3/4 bg-slate-950 rounded-xl line-clamp-1">
                            <p class="line-clamp-1 relative">Ryannanda Maulana Habibi
                                <i
                                    class="bi bi-person absolute top-1/2 -translate-y-1/2 right-0 -translate-x-0 md:hidden"></i>
                            </p>
                        </td>
                        <td class="py-4 px-12 bg-slate-950 rounded-xl font-bold hidden md:block">Ketua</td>
                    </tr>
                    <tr class="mt-2 flex gap-4 md:justify-end">
                        <td class="py-4 px-12 bg-slate-950 rounded-xl font-bold hidden md:block">Anggota</td>
                        <td class="py-4 px-4 w-full md:w-1/2 xl:w-3/4 bg-slate-950 rounded-xl md:text-end line-clamp-1">
                            <p class="line-clamp-1 relative">
                                Mardhiyatus Sholihah
                                <i
                                    class="bi bi-people absolute top-1/2 -translate-y-1/2 right-0 -translate-x-0 md:hidden"></i>
                            </p>
                        </td>
                    </tr>
                    <tr class="mt-2 flex gap-4">
                        <td class="py-4 px-4 w-full md:w-1/2 xl:w-3/4 bg-slate-950 rounded-xl line-clamp-1">
                            <p class="line-clamp-1 relative">
                                Akmal Azhari
                                <i
                                    class="bi bi-people absolute top-1/2 -translate-y-1/2 right-0 -translate-x-0 md:hidden"></i>
                            </p>
                        </td>
                        <td class="py-4 px-12 bg-slate-950 rounded-xl font-bold hidden md:block">Anggota</td>
                    </tr>
                    <tr class="mt-2 flex gap-4 md:justify-end">
                        <td class="py-4 px-12 bg-slate-950 rounded-xl font-bold hidden md:block">Anggota</td>
                        <td class="py-4 px-4 w-full md:w-1/2 xl:w-3/4 bg-slate-950 rounded-xl md:text-end line-clamp-1">
                            <p class="line-clamp-1 relative">
                                Casyana
                                <i
                                    class="bi bi-people absolute top-1/2 -translate-y-1/2 right-0 -translate-x-0 md:hidden"></i>
                            </p>
                        </td>
                    </tr>
                    <tr class="mt-2 flex gap-4">
                        <td class="py-4 px-4 w-full md:w-1/2 xl:w-3/4 bg-slate-950 rounded-xl line-clamp-1">
                            <p class="line-clamp-1 relative">
                                Fauziah Azzahra
                                <i
                                    class="bi bi-people absolute top-1/2 -translate-y-1/2 right-0 -translate-x-0 md:hidden"></i>
                            </p>
                        </td>
                        <td class="py-4 px-12 bg-slate-950 rounded-xl font-bold hidden md:block">Anggota</td>
                    </tr>
                    <tr class="mt-2 flex gap-4 md:justify-end">
                        <td class="py-4 px-12 bg-slate-950 rounded-xl font-bold hidden md:block">Anggota</td>
                        <td class="py-4 px-4 w-full md:w-1/2 xl:w-3/4 bg-slate-950 rounded-xl md:text-end">
                            <p class="line-clamp-1 relative">
                                Hery Phaesaoran S. S.
                                <i
                                    class="bi bi-people absolute top-1/2 -translate-y-1/2 right-0 -translate-x-0 md:hidden"></i>
                            </p>
                        </td>
                    </tr>
                    <tr class="mt-2 flex gap-4">
                        <td class="py-4 px-4 w-full md:w-1/2 xl:w-3/4 bg-slate-950 rounded-xl">
                            <p class="line-clamp-1 relative">
                                Muhammad Revan Hakim
                                <i
                                    class="bi bi-people absolute top-1/2 -translate-y-1/2 right-0 -translate-x-0 md:hidden"></i>
                            </p>
                        </td>
                        <td class="py-4 px-12 bg-slate-950 rounded-xl font-bold hidden md:block">Anggota</td>
                    </tr>
                </table>
                <p class="mt-6">Website ini kami membeli domain dan hostingnya di <a href="https://anymhost.id"
                        class="inline-block font-bold hover:opacity-100">anymhost.id</a>. Kalian bisa melakukan hosting
                    dengan harga terjangkau mulai dari Rp. 5000. Respon adminnya juga cepat dalam membantu yang baru belajar
                    tentang hosting.</p>
            </div>
            <div class="socmed mt-12 px-6 flex justify-end">
                <div class="liSocmed flex items-center gap-4 md:text-xl lg:text-2xl xl:text-3xl opacity-80">
                    <div class="igSocmed">
                        <a href="" class="hover:opacity-50 transition-all ease-in-out"><i
                                class="bi bi-instagram"></i></a>
                    </div>
                    <div class="fbSocmed">
                        <a href="" class="hover:opacity-50 transition-all ease-in-out"><i
                                class="bi bi-facebook"></i></a>
                    </div>
                    <div class="twtSocmed">
                        <a href="" class="hover:opacity-50 transition-all ease-in-out"><i
                                class="bi bi-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <img src="assets/img/page/pngegg (9).png" alt=""
                class="hidden lg:block absolute w-1/2 right-0 top-1/2 -translate-y-1/2 -z-10 opacity-10">
        </div>
    </section>
    <section class="mt-12 lg:mt-36 flex justify-center 2xl:justify-end">
        <div
            class="w-full 2xl:w-3/4 flex items-center flex-col 2xl:gap-8 2xl:flex-row rounded-xl 2xl:rounded-r-none 2xl:rounded-l-3xl bg-slate-950/30 overflow-hidden">
            <div class="thLiImgSC-1 relative w-full 2xl:w-1/2 group overflow-hidden">
                <div class="liImg xl:h-96 w-full relative aspect-video overflow-hidden bg-slate-950/70">
                    <div class="images-container flex opacity-80">
                        <img src="assets/img/page/iconfinder-connectedglobe-4417105_116615.png" alt=""
                            class="w-auto h-full p-4 object-cover object-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transition-all duration-300 visible opacity-100">
                        <img src="assets/img/page/pngegg.png" alt=""
                            class="w-auto h-full p-4 object-cover object-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transition-all duration-300 invisible opacity-0">
                        <img src="assets/img/page/pngegg (11).png" alt=""
                            class="w-auto h-full p-4 object-cover object-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transition-all duration-300 invisible opacity-0">
                        <img src="assets/img/page/iconfinder-email-4417125_116640.png" alt=""
                            class="w-auto h-full p-4 object-cover object-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transition-all duration-300 invisible opacity-0">
                    </div>
                </div>
                <div class="bLeRiLImg text-3xl">
                    <div class="icLeChv py-16 px-2 absolute left-[2%] 2xl:-left-[100%] top-1/2 -translate-x-[2%] -translate-y-1/2 rounded-xl cursor-pointer transition-all group-hover:left-[2%] after:absolute after:w-full after:h-full after:left-0 after:top-0 after:rounded-xl after:hover:bg-black after:blur-md after:-z-10"
                        id="icLeChvSC-1">
                        <i class="bi bi-chevron-left text-white"></i>
                    </div>
                    <div class="icRiChv py-16 px-2 absolute right-[2%] 2xl:-right-[100%] top-1/2 -translate-x-[2%] -translate-y-1/2 rounded-xl cursor-pointer transition-all group-hover:right-[2%] after:absolute after:w-full after:h-full after:left-0 after:top-0 after:rounded-xl after:hover:bg-black after:blur-md after:-z-10"
                        id="icRiChvSC-1">
                        <i class="bi bi-chevron-right text-white"></i>
                    </div>
                </div>
            </div>
            <div class="descLiImgSC-1 block 2xl:w-1/2 p-6">
                <div class="liContentFromImage">
                    <div class="contFI1 space-y-5 block">
                        <h2 class="text-2xl line-clamp-2">What is Lorem Ipsum?</h2>
                        <p class="opacity-60 line-clamp-6 text-xs md:text-base">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of
                            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                            publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                    <div class="contFI2  space-y-5 hidden">
                        <h2 class="text-2xl line-clamp-2">Why do we use it?</h2>
                        <p class="opacity-60 line-clamp-6 text-xs md:text-base">
                            It is a long established fact that a reader will be distracted by the readable content
                            of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English. Many desktop publishing packages and web
                            page editors now use Lorem Ipsum as their default model text, and a search for 'lorem
                            ipsum' will uncover many web sites still in their infancy. Various versions have evolved
                            over the years, sometimes by accident, sometimes on purpose (injected humour and the
                            like).
                        </p>
                    </div>
                    <div class="contFI3  space-y-5 hidden">
                        <h2 class="text-2xl line-clamp-2">Where does it come from?</h2>
                        <p class="opacity-60 line-clamp-6 text-xs md:text-base">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                            piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard
                            McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of
                            the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through
                            the cites of the word in classical literature, discovered the undoubtable source. Lorem
                            Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The
                            Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the
                            theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum,
                            "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                            <br> <br>
                            The standard chunk
                            of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections
                            1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced
                            in their exact original form, accompanied by English versions from the 1914 translation
                            by H. Rackham.
                        </p>
                    </div>
                    <div class="contFI4  space-y-5 hidden">
                        <h2 class="text-2xl line-clamp-2">Where can I get some?</h2>
                        <p class="opacity-60 line-clamp-6 text-xs md:text-base">
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't
                            look even slightly believable. If you are going to use a passage of Lorem Ipsum, you
                            need to be sure there isn't anything embarrassing hidden in the middle of text. All the
                            Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                            making this the first true generator on the Internet. It uses a dictionary of over 200
                            Latin words, combined with a handful of model sentence structures, to generate Lorem
                            Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from
                            repetition, injected humour, or non-characteristic words etc.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-12 lg:mt-36">
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
            <div class="tiSecStatusUser">
                <h2 class="text-2xl">
                    Status
                </h2>
            </div>
            <div class="cntnProfil-list mt-12 text-base md:text-xl lg:text-2xl space-y-6">
                @if (!$listContents->isEmpty())
                    @foreach ($listContents as $content)
                        <div class="cntn-item shadow-slate-950 shadow-lg p-4 rounded-md max-h-[20rem] overflow-auto">
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
                @if (count($listContents) > 2)
                    <div class="cntn-item transition-all bg-slate-800 hover:bg-slate-950 shadow-slate-950 shadow-lg rounded-md text-center">
                        <a href="/status" class="block p-4">
                            <div class="titlContent space-y-2 opacity-50">
                                <h2> Lihat lebih banyak konten lainnya di sini </h2>
                            </div>
                            <div class="contnUser text-base mt-6 opacity-50">
                                <p>
                                    Temui lebih banyak konten lainnya
                                </p>
                            </div>
                        </a>
                    </div>
                @endif
                
            </div>
        </div>
    </section>
    <section class="mt-12 lg:mt-36 flex justify-center 2xl:justify-start">
        <div
            class="w-full 2xl:w-3/4 flex items-center flex-col 2xl:gap-8 2xl:flex-row rounded-xl 2xl:rounded-r-3xl 2xl:rounded-l-none bg-slate-950/30 overflow-hidden">
            <div class="thLiImgSC-2 w-full relative group">
                <div class="liImg 2xl:h-[32rem] w-full relative aspect-video overflow-hidden bg-slate-950/70">
                    <div class="images-container flex opacity-80">
                        <img src="assets/img/page/iconfinder-connectedglobe-4417105_116615.png" alt=""
                            class="w-auto h-full object-cover object-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transition-all duration-300 visible opacity-100">
                        <img src="assets/img/page/pngegg.png" alt=""
                            class="w-auto h-full object-cover object-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transition-all duration-300 invisible opacity-0">
                        <img src="assets/img/page/pngegg (11).png" alt=""
                            class="w-auto h-full object-cover object-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transition-all duration-300 invisible opacity-0">
                        <img src="assets/img/page/iconfinder-email-4417125_116640.png" alt=""
                            class="w-auto h-full object-cover object-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transition-all duration-300 invisible opacity-0">
                    </div>
                </div>
                <div class="bLeRiLImg text-3xl">
                    <div class="icLeChvSC-2 py-16 px-2 absolute left-[2%] 2xl:-left-[100%] top-1/2 -translate-x-[2%] -translate-y-1/2 rounded-xl cursor-pointer transition-all group-hover:left-[2%] after:absolute after:w-full after:h-full after:left-0 after:top-0 after:rounded-xl after:hover:bg-black after:blur-md after:-z-10"
                        id="icLeChvSC-2">
                        <i class="bi bi-chevron-left text-white"></i>
                    </div>
                    <div class="icRiChv py-16 px-2 absolute right-[2%] 2xl:-right-[100%] top-1/2 -translate-x-[2%] -translate-y-1/2 rounded-xl cursor-pointer transition-all group-hover:right-[2%] after:absolute after:w-full after:h-full after:left-0 after:top-0 after:rounded-xl after:hover:bg-black after:blur-md after:-z-10"
                        id="icRiChvSC-2">
                        <i class="bi bi-chevron-right text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div>
        <img src="assets/img/page/iconfinder-connectedglobe-4417105_116615.png" alt=""
            class="absolute -left-[15%] -top-1/4 translate-x-[15%] translate-y-1/4 -z-10 opacity-10">
    </div>
@endsection
@section('script')
    <script src="assets/js/slidePhoto.js"></script>
@endsection
