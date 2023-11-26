@extends('layouts.dashboard.main')
@section('content')
    <div class="dashboard">
        <div class="tiContDashboard text-4xl text-white font-bold bg-blue-600 w-fit px-6 py-3 rounded-2xl">
            <i class="bi bi-speedometer2"></i>
            <h1 class="inline-block">Dashboard</h1>
        </div>
        <div class="userRegist-dashboard mt-24">
            <div class="w-full p-4 mx-auto relative">
                <div class="ctrContent text-base">
                    <div class="tiExmpleCRUD flex flex-col md:flex-row md:justify-between space-y-3">
                        <h2 class="opacity-70 md:text-xl lg:text-2xl">Daftar User yang terdaftar</h2>
                    </div>
                    <div class="tableCRUD">
                        <div class="overflow-x-scroll w-full">
                            <table class="mt-8 table-fixed border-collapse border-none border-spacing-2 space-y-4 w-full rounded-lg">
                                <colgroup>
                                    <col class="w-12">
                                    <col class="w-full">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th class="py-2 border rounded-lg">No</th>
                                        <th class="py-2 border rounded-lg">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($allUser->isEmpty())
                                        <tr>
                                            <td colspan="2" class="border text-center py-3 bg-slate-100">No data available</td>
                                        </tr>
                                    @else
                                        @foreach ($allUser as $index => $user)
                                            <tr class="rounded-lg">
                                                <td class="px-2 py-1 border rounded-lg text-center">{{ $index+1 }}</td>
                                                <td class="px-2 py-1 border rounded-lg">
                                                    <a href="/profil/{{ $user->username }}" class="flex items-center space-x-2 w-fit p-2 transition-all group">
                                                        <div class="imgUser relative overflow-hidden w-8 h-8 rounded-[100%] border-2 flex-shrink-0 transition-all group-hover:scale-150">
                                                            <img src="{{ asset('storage/images/users/'.$user->nameFile) }}" alt="" class="w-full h-full object-cover object-center aspect-square">
                                                        </div>
                                                        <div class="nmeUser relative">
                                                            <p class="username line-clamp-1 transition-all text-sm group-hover:ml-3 group-hover:text-base" id="username-user">
                                                                {{ $user->username }}
                                                            </p>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cntnDashboard mt-12">
            <div class="w-full p-4 mx-auto relative">
                <div class="ctrContent text-base">
                    <div class="tiExmpleCRUD flex flex-col md:flex-row md:justify-between space-y-3">
                        <h2 class="opacity-70 md:text-xl lg:text-2xl">Data CRUD dari semua user</h2>
                        <div class="btn-addCRUD">
                            <a href="/dashboard/konten" rel="noopener noreferrer" class="flex items-center w-fit gap-2 border-2 border-green-800 py-2 px-6 rounded-lg bg-green-500 text-white" title="Coba">
                                <i class="bi bi-plus-circle text-2xl"></i>
                                <p>Tambah</p>
                            </a> 
                        </div>
                    </div>
                    <div class="tableCRUD">
                        <p class="mt-8 text-sm text-center caption-top">
                            Table Konten Yang Ada
                        </p>
                        <div class="overflow-x-scroll w-full">
                            <table class="mt-8 table-fixed border-collapse border-none border-spacing-2 space-y-4 w-full rounded-lg">
                                <colgroup>
                                    <col class="w-12">
                                    <col class="w-96">
                                    <col class="w-52">
                                    <col class="w-32">
                                    <col class="w-32">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th class="py-2 rounded-l-lg bg-slate-100">No</th>
                                        <th class="py-2 bg-slate-100">Konten</th>
                                        <th class="py-2 bg-slate-100">Add by</th>
                                        <th class="py-2 bg-slate-100">Create Date</th>
                                        <th class="py-2 rounded-r-lg bg-slate-100">Edit Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!$listContents->isEmpty())
                                        @foreach ($listContents as $row => $content)
                                            <tr class="rounded-lg">
                                                <td class="px-2 py-1 rounded-l-lg text-center @if($row % 2 === 0) bg-slate-100 @else border-l @endif">{{$row}}</td>
                                                <td class="px-2 py-1 @if($row % 2 === 0) bg-slate-100 @endif flex-shrink-0">
                                                    <a href="">
                                                        <p class="line-clamp-1 font-bold">{{$content->titleKonten}}</p>
                                                        <p class="line-clamp-6 md:line-clamp-4">
                                                            {!! nl2br(htmlspecialchars($content->konten, ENT_QUOTES, 'UTF-8')) !!}
                                                        </p>
                                                    </a>
                                                </td>
                                                <td class="px-2 py-1 @if($row % 2 === 0) bg-slate-100 @endif">
                                                    <a href="/profil/{{$content->username}}" class="flex items-center space-x-2 w-fit p-2 transition-all group">
                                                        <div class="imgUser relative overflow-hidden w-8 h-8 rounded-[100%] border-2 flex-shrink-0 transition-all group-hover:scale-150">
                                                            <img src="{{asset('storage/images/users/'.$content->nameFile)}}" alt="" class="w-full h-full object-cover object-center aspect-square">
                                                        </div>
                                                        <div class="nmeUser relative">
                                                            <p class="username line-clamp-1 transition-all text-sm group-hover:ml-3 group-hover:text-base" id="username-user">
                                                                {{$content->username}}
                                                            </p>
                                                        </div>
                                                    </a>
                                                </td><td class="px-2 py-1 @if($row % 2 === 0) bg-slate-100 @endif">
                                                    <p class="line-clamp-1">
                                                        {{$content->created_at}}
                                                    </p>
                                                </td><td class="px-2 py-1 rounded-r-lg @if($row % 2 === 0) bg-slate-100 @else border-r @endif">
                                                    <p class="line-clamp-1">
                                                        {{$content->updated_at}}
                                                    </p>
                                                </td>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="border text-center py-3 bg-slate-100">No data available</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection