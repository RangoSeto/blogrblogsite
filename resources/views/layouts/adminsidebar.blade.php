
    <div class="w-1/4 min-h-screen relative px-3 bg-[#f4f4f4] shadow">

        <div class="pt-5">
            <div class="flex justify-center items-center bg-white text-blue-900 border-2 border-blue-900 py-2 transition-all duration-100 hover:bg-blue-200 hover:text-black hover:border-white">
                <a href="{{route('posts.create')}}" class="w-full block text-center hover:cursor-pointer"><i class="fas fa-plus me-3"></i>New Post</a>
            </div>
        </div>

        <div class="w-full text-blue-900 py-8 border-b-2 border-b-gray-300">
            <div class="w-full text-md leading-3 transition-all duration-100 hover:bg-white hover:cursor-pointer py-4">
                <a href="{{route('dashboards.index')}}" class="w-full block px-8 py-1"><i class="fas fa-tachometer-alt text-md me-3"></i> Dashboards</a>
            </div>

            <div class="w-full text-md leading-3 transition-all duration-100 hover:bg-white hover:cursor-pointer py-4">
                <a href="{{route('posts.index')}}" class="w-full block px-8 py-1"><i class="fas fa-file-alt text-md me-3"></i> Posts</a>
            </div>

            <div class="w-full text-blue-900 text-md leading-3 transition-all duration-100 hover:bg-white hover:cursor-pointer py-4">
                <a href="{{route('tags.index')}}" class="w-full block px-8 py-1"><i class="fas fa-tags text-md me-3"></i> Categories</a>
            </div>

            <div class="w-full text-blue-900 text-md leading-3 transition-all duration-100 hover:bg-white hover:cursor-pointer py-4">
                <a href="{{route('dashboards.index')}}" class="w-full block px-8 py-1"><i class="far fa-comments text-md me-3"></i> Comments</a>
            </div>

            <div class="w-full text-blue-900 text-md leading-3 transition-all duration-100 hover:bg-white hover:cursor-pointer py-4">
                <a href="{{route('userdatas.index')}}" class="w-full block px-8 py-1"><i class="fas fa-cogs text-md me-3"></i> Settings</a>
            </div>
        </div>

        <div class="w-full text-md text-blue-900 leading-3 mt-4 transition-all duration-100 hover:bg-stone-50 hover:cursor-pointer">
            <a href="{{route('mainpages.index')}}" class="px-8 py-4 text-blue-500 hover:underline hover:underline-offset-4"><i class="fas fa-external-link-alt me-3"></i> View Blogs</a>
        </div>

{{--        <div class="w-full flex justify-center items-center absolute left-0 bottom-28 ">--}}
{{--            <img src="{{asset('assets/img/illu/userillu1.png')}}" alt="illustsration1" width="170px" />--}}
{{--        </div>--}}

    </div>
