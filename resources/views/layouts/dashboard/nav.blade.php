<div class="d-big fixed hidden xl:block">
    <div class="topTitle" id="topTitle">
        <h1 class="text-2xl font-bold">
            <a href="/" class="w-full flex p-4">
                Dashboard Eduhostnet
            </a>
        </h1>
    </div>
    <hr class="border border-slate-800">
    <div class="sideBar">
        <div class="user-panel border-border-white">
            <a href="/profil/{{optional(auth()->user())->username}}" class="flex items-center space-x-2 p-4 transition-all hover:bg-slate-900">
                <div class="imgUser relative overflow-hidden w-16 h-16 rounded-[100%] border-2 flex-shrink-0">
                    <img src="{{asset('storage/images/users/'.$userImage->nameFile)}}" alt="" class="w-full h-full object-cover object-center aspect-square">
                </div>
                <div class="nmeUser relative">
                    <p class="username line-clamp-1 text-lg" id="username-user">
                        {{optional(auth()->user())->username}}
                    </p>
                </div>
            </a>
        </div>
        <hr class="border border-slate-800">
        <div>
            <div class="nav-sidebar font-bold mt-4">
                <div class="nav-list">
                    <div class="nav-item">
                        <div class="contnNav px-4 py-1">
                            <a href="/dashboard" class="text-lg p-4 flex items-center gap-2 transition-all hover:bg-blue-600 rounded-lg">
                                <div class="icNav-item">
                                    <i class="text-2xl bi bi-speedometer2"></i>
                                </div>
                                <div class="">
                                    <p>
                                        Dashboard
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="nav-item">
                        <div class="contnNav px-4 py-1">
                            <a href="/dashboard/konten" class="text-lg p-4 flex items-center gap-2 transition-all hover:bg-blue-600 rounded-lg">
                                <div class="icNav-item">
                                    <i class="text-2xl bi bi-pencil"></i>
                                </div>
                                <div class="">
                                    <p>
                                        Konten
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="nav-item">
                        <div class="contnNav px-4 py-1">
                            <form action="/logout" method="POST" class="">
                                @csrf
                                <button type="submit" class="text-lg p-4 flex items-center gap-2 transition-all hover:bg-blue-600 rounded-lg w-full">
                                    <div class="icNav-item">
                                        <i class="text-2xl bi bi-box-arrow-left"></i>
                                    </div>
                                    <p>
                                        Logout
                                    </p>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div class="mobileMenu fixed xl:hidden mt-8 left-1/2 top-0 -translate-x-1/2 -translate-y-0 z-50">
    <div class="mobileNav flex items-center gap-6 bg-slate-950 h-16 rounded-full overflow-hidden px-6">
        <div class="userProfil bg-slate-950 flex-shrink-0">
            <a href="/profil" class="flex items-center justify-center space-x-2 h-full">
                <div class="imgUser relative overflow-hidden w-12 h-12 rounded-[100%] border-2 flex-shrink-0">
                    <img src="{{asset('storage/images/users/'.$userImage->nameFile)}}" alt="" class="w-full h-full object-cover object-center aspect-square">
                </div>
            </a>
        </div>
        <div class="nav-list flex items-center gap-2">
            <div class="nav-item">
                <div class="contMobNav">
                    <a href="/dashboard" class="text-lg p-2 flex items-center gap-2 transition-all hover:bg-blue-600 rounded-lg">
                        <div class="icNav-item">
                            <i class="text-2xl bi bi-speedometer2"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="nav-item">
                <div class="contMobNav">
                    <a href="/dashboard/konten" class="text-lg p-2 flex items-center gap-2 transition-all hover:bg-blue-600 rounded-lg">
                        <div class="icNav-item">
                            <i class="text-2xl bi bi-pencil"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="nav-item">
                <div class="contMobNav">
                    <a href="/dashboard/logout" class="text-lg p-2 flex items-center gap-2 transition-all hover:bg-blue-600 rounded-lg">
                        <div class="icNav-item">
                            <i class="text-2xl bi bi-box-arrow-left"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        {{-- <div class="icDots text-2xl group">
            <i class="bi bi-three-dots-vertical px-2 py-1 cursor-pointer hover:opacity-50" onclick="openNavWrapperMobile()" onmouseover="openNavWrapperMobile()" onmouseleave="closeNavWrapperMobile()" id="icThreeDotsNav"></i>
            <div class="colOpenNavMenu pt-8 absolute -right-full top-full -translate-x-0 group-hover:block opacity-0 invisible" style="transition: all .1s ease-in-out;" id="navMobsWrapper" onmouseover="openNavWrapperMobile()" onmouseleave="closeNavWrapperMobile()" >
                <ul class="space-y-2">
                    <li class="flex min-w-[11rem] h-12 relative">
                        <a href="" class="flex w-full h-full items-center justify-center rounded-lg hover:text-orange-700 cursor-default bg-slate-950/100 text-base px-4 transition-all absolute duration-150 ease-linear" style="left: 200%;" id="itmNavWrapMobile-1">Profil</a>
                    </li>
                    <li class="flex min-w-[11rem] h-12 relative">
                        <a href="" class="flex w-full h-full items-center justify-center rounded-lg hover:text-orange-700 cursor-default bg-slate-950/100 text-base px-4 transition-all absolute duration-300 ease-linear" style="left: 200%;" id="itmNavWrapMobile-2">About</a>
                    </li>
                </ul>
            </div>
        </div> --}}
    </div>
</div>