
<body class="flex flex-col h-screen overflow-hidden">

<!--    Start Nav bar-->
<nav class="w-full py-4 bg-[#f4f4f4] shadow">
    <div class="container flex justify-between items-center mx-auto">

        <div>
            <a href="{{route('dashboards.index')}}" class="text-3xl font-bold uppercase text-blue-950">Blogr</a>
        </div>

        <!--            <div class="flex bg-gray-200 rounded-xl px-8 py-2">-->
        <!--                <span class=""><i class="fas fa-search text-lg text-gray-500"></i></span>-->
        <!--                <input type="text" id="search" class="bg-gray-200 px-4 focus:outline-none btn-searchs" placeholder="Search posts..." />-->
        <!--            </div>-->

        <div class="flex justify-center items-center">
            <!--                <span class="w-6 h-6 border-2 border-cyan-900 rounded-full flex justify-center items-center hover:cursor-pointer me-8"><i class="fas fa-question text-sm"></i></span>-->
            <span class="text-gray-600 me-3">{{$alluser->name}}</span>
            <img src="{{empty($alluser->userinfo()->image) ? asset('assets/img/illu/defaultimage.jpg') : asset($alluser->userinfo()->image)}}" alt="user" class="w-10 h-10 rounded-full hover:cursor-pointer me-5" />
            <a href="javascript:void(0);" class="bg-blue-900 text-sm text-center text-white rounded-md transition-all duration-100 hover:bg-blue-700 px-4 py-2" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">Logout</a>
            <form action="{{route('logout')}}" id="logoutform" method="POST">@csrf</form>
        </div>

    </div>


</nav>
<!--    End Nav bar-->
