<nav>
    <div
        class="lg:mt-2 px-12 mx-auto w-full lg:w-1/2 flex justify-between items-center lg:rounded-3xl fixed left-1/2 top-0 -translate-x-1/2 -translate-y-0 after:absolute after:w-full after:h-full after:left-0 after:bg-black/80 after:lg:blur-sm after:-z-10 after:lg:rounded-2xl z-50">
        <div class="logo w-16 relative">
            <a href="/" class="block rounded-lg p-2">
                <img src="{{asset('assets/img/page/iconAdJaKo.png')}}" alt="EduHostNet" title="Homepage">
            </a>
        </div>
        <div class="menu hidden lg:block text-white">
            <div class="colMenu">
                <ul class="flex items-center gap-2 text-sm">
                    <!-- <li>
                        <a href="" class="block py-5 px-4 rounded-lg cursor-default">Homepage</a>
                    </li> -->
                    <li>
                        <a href="/status" class="py-5 px-4 rounded-lg hover:text-orange-700 cursor-default">Status</a>
                    </li>
                    @guest
                        <li>
                            <a href="/login" class="py-5 px-4 rounded-lg hover:text-orange-700 cursor-default flex items-center gap-2">
                                <i class="bi bi-person-circle"></i>
                                <p>Login</p>
                            </a>
                        </li>
                    @endguest
                    @auth
                        <li>
                            <a href="/profil/{{auth()->user()->username}}" class="py-5 px-4 rounded-lg hover:text-orange-700 cursor-default flex items-center gap-2" title="{{auth()->user()->username}}">
                                <i class="bi bi-person-circle"></i>
                                <p>Profil</p>
                            </a>
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="py-5 px-4 rounded-lg hover:text-orange-700 cursor-default flex items-center gap-2">
                                    <i class="bi bi-box-arrow-left"></i>
                                    <p>Logout</p>
                                </button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
        <div class="mobilemenu lg:hidden text-white relative">
            <div class="icToOpenNav">
                <div class="icDots text-2xl group">
                    <i class="bi bi-three-dots-vertical px-2 py-1 cursor-pointer hover:opacity-50" onclick="openNavWrapperMobile()" onmouseover="openNavWrapperMobile()" onmouseleave="closeNavWrapperMobile()" id="icThreeDotsNav"></i>
                    <div class="colOpenNavMenu pt-8 absolute -right-full top-full -translate-x-0 group-hover:block opacity-0 invisible" style="transition: all .1s ease-in-out;" id="navMobsWrapper" onmouseover="openNavWrapperMobile()" onmouseleave="closeNavWrapperMobile()" >
                        <ul class="space-y-2">
                            <li class="flex min-w-[11rem] h-12 relative">
                                <a href="/profil" class="flex w-full h-full items-center justify-center rounded-lg hover:text-orange-700 cursor-default bg-slate-950/100 text-base px-4 transition-all absolute duration-100 ease-linear" style="left: 200%;" id="itmNavWrapMobile-1">Status</a>
                            </li>
                            @auth
                                <li class="flex min-w-[11rem] h-12 relative">
                                    <a href="/profil/{{auth()->user()->username}}" class="flex w-full h-full items-center gap-2 justify-center rounded-lg hover:text-orange-700 cursor-default bg-slate-950/100 text-base px-4 transition-all absolute duration-200 ease-linear" style="left: 200%;" id="itmNavWrapMobile-2">
                                        <i class="bi bi-person-circle"></i>
                                        <p>Profil</p>
                                    </a>
                                </li>
                                <li class="flex min-w-[11rem] h-12 relative">
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="flex w-full h-full items-center gap-2 justify-center rounded-lg hover:text-orange-700 cursor-default bg-slate-950/100 text-base px-4 transition-all absolute duration-300 ease-linear" style="left: 200%;" id="itmNavWrapMobile-3">
                                            <i class="bi bi-box-arrow-left"></i>
                                            <p>Logout</p>
                                        </button>
                                    </form>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>