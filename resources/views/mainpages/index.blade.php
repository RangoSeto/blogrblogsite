@extends('layouts.mainindex')
@section('content')

{{--    Start Start to Top Section--}}
    <div class="fixed right-5 bottom-3">
        <a href="#" class="btn-backtotops opacity-100"><i class="fas fa-arrow-up bg-blue-900 text-white py-4 px-4 rounded hover:bg-blue-600 transition-all duration-100"></i></a>
    </div>
{{--    Start Start to Top Section--}}

    <nav class=" w-full bg-white shadow md:flex md:justify-between md:items-center fixed top-0 z-10 px-24 py-5 transition-all duration-1000 navbars">
        <div class="flex justify-between items-center">
            <span class="text-2xl cursor-pointer">
                <a href="{{route('dashboards.index')}}" class="text-4xl font-bold uppercase text-blue-950">Blogr</a>
            </span>

            <span class="md:hidden text-2xl cursor-pointer block mx-4">
                <i class="fas fa-bars togglemenu" onclick="togglemenu(this)"></i>
            </span>

        </div>

        <ul id="toggleuls" class="md:w-auto md:flex md:items-center md:static md:pl-0 md:py-0 md:opacity-100 w-full bg-white absolute left-0 pl-5 py-5 opacity-0 transition-all duration-500">
            <li class="md:my-0 mx-5 my-6"><a href="javascript:void(0);" class="text-lg hover:text-violet-700 transition-all duration-500">HOME</a></li>
            <li class="md:my-0 mx-5 my-6"><a href="javascript:void(0);" class="text-lg hover:text-violet-700 transition-all duration-500">POSTS</a></li>
            <li class="md:my-0 mx-5 my-6"><a href="javascript:void(0);" class="text-lg hover:text-violet-700 transition-all duration-500">AUTHORS</a></li>
            <li class="md:my-0 mx-5 my-6"><a href="javascript:void(0);" class="text-lg hover:text-violet-700 transition-all duration-500">SUPPORT</a></li>
            <li class="md:my-0 mx-5 my-6"><a href="javascript:void(0);" class="bg-blue-900 text-md text-center text-white rounded-md hover:bg-blue-700 px-6 py-3 transition-all duration-500">Register</a></li>
        </ul>
    </nav>

{{--    Start Header Section--}}
    <section class="container mt-28 mx-auto">
        <div class="max-w-6xl mx-auto">

            <div class="w-full bg-white flex rounded-xl">

                <div class="w-1/2 cursor-pointer">
                    <div class="p-10 overflow-hidden">
                        <img src="{{asset('assets/img/illu/noimage.jpg')}}" alt="" class="w-full h-[290px] bg-center object-cover object-center" />
                    </div>
                </div>
                <div class="w-1/2 cursor-pointer">
                    <div class="w-full h-full flex justify-center items-center">
                        <div>
                            <span class="bg-sky-400 text-white text-sm px-2 py-1 rounded-md inline-flex">Lifestyle</span>
                            <h1 class="text-3xl leading-snug font-bold mt-5">Begin here to obtain a brief summary encompassing all the essential</h1>
                            <p class="text-gray-600 mt-4 mb-3">This comprehensive post serves as your cheat-sheet to swiftly familiarize yourself with Ghost. Packed with crucial...</p>
                            <div class="flex items-center text-gray-500 text-sm"><img src="{{asset('assets/img/illu/defaultimage.jpg')}}" alt="" class="w-10 h-10 rounded-full me-2"> <span class="me-2">Adrio Devid - </span> <span>Sep 10, 2025</span></div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="w-full mt-8">
                <div class="grid md:grid-cols-2 gap-7 grid-cols-1">

                    <div class="w-full flex bg-white cursor-pointer">
                        <div class="w-1/2 ">
                            <div class="p-5 overflow-hidden">
                                <img src="{{asset('assets/img/illu/noimage.jpg')}}" alt="" class="w-full h-[180px] bg-center object-cover object-center" />
                            </div>
                        </div>
                        <div class="w-1/2">
                            <div class="w-full h-full flex justify-center items-center">
                                <div>
                                    <span class="bg-sky-400 text-white text-sm px-2 py-1 rounded-md inline-flex">Lifestyle</span>
                                    <h1 class="font-semibold text-gray-700 mt-5 mb-3">14 Innovative Architectural Designs to Create a Vast Interior Space</h1>
                                    <div class="flex items-center text-gray-500 text-sm"><span class="me-2"> By Adrio Devid - </span> <span>Sep 10, 2025</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full flex bg-white cursor-pointer">
                        <div class="w-1/2 ">
                            <div class="p-5 overflow-hidden">
                                <img src="{{asset('assets/img/illu/noimage.jpg')}}" alt="" class="w-full h-[180px] bg-center object-cover object-center" />
                            </div>
                        </div>
                        <div class="w-1/2">
                            <div class="w-full h-full flex justify-center items-center">
                                <div>
                                    <span class="bg-sky-400 text-white text-sm px-2 py-1 rounded-md inline-flex">Lifestyle</span>
                                    <h1 class="font-semibold text-gray-700 mt-5 mb-3">14 Innovative Architectural Designs to Create a Vast Interior Space</h1>
                                    <div class="flex items-center text-gray-500 text-sm"><span class="me-2"> By Adrio Devid - </span> <span>Sep 10, 2025</span></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
{{--    End Header Section--}}


{{--    Start Latest posts Section--}}
    <section class="container my-9 mx-auto">
        <div class="max-w-6xl mx-auto">

            <div class="w-full flex justify-between border-b border-b-gray-300 pb-4">
                <h3 class="text-3xl font-semibold text-blue-950">Latest Posts</h3>
                <div class="text-gray-600">
                    <p><span>View All Posts</span><i class="fas fa-external-link-alt me-3 ms-3"></i></p>
                </div>
            </div>

            <div class="flex mx-auto">
                <div class="w-2/3 mt-8">

                    <div class="grid md:grid-cols-2 gap-4">

                        <div class="bg-white shadow rounded p-4 hover:bg-sky-100 group">
                            <div class="relative">
                                <img src="{{asset('assets/img/illu/noimage.jpg')}}" alt="" class="w-full h-[190px] bg-center object-cover object-center group-hover:scale-95" />
                                <span class="absolute top-0 left-0 bg-sky-400 text-white text-sm px-2 py-1 rounded-md inline-flex">Technology</span>
                            </div>

                            <div class="mt-3">
                                <h3 class="text-gray-800 font-semibold hover:underline group-hover:underline-offset-4">Virtual Reality or Artificial Intelligence Technology</h3>
                            </div>
                        </div>

                        <div class="bg-white shadow rounded p-4 hover:bg-sky-100 group">
                            <div class="relative">
                                <img src="{{asset('assets/img/illu/noimage.jpg')}}" alt="" class="w-full h-[190px] bg-center object-cover object-center group-hover:scale-95" />
                                <span class="absolute top-0 left-0 bg-sky-400 text-white text-sm px-2 py-1 rounded-md inline-flex">Technology</span>
                            </div>

                            <div class="mt-3">
                                <h3 class="text-gray-800 font-semibold hover:underline group-hover:underline-offset-4">Virtual Reality or Artificial Intelligence Technology</h3>
                            </div>
                        </div>

                        <div class="bg-white shadow rounded p-4 hover:bg-sky-100 group">
                            <div class="relative">
                                <img src="{{asset('assets/img/illu/noimage.jpg')}}" alt="" class="w-full h-[190px] bg-center object-cover object-center group-hover:scale-95" />
                                <span class="absolute top-0 left-0 bg-sky-400 text-white text-sm px-2 py-1 rounded-md inline-flex">Technology</span>
                            </div>

                            <div class="mt-3">
                                <h3 class="text-gray-800 font-semibold hover:underline group-hover:underline-offset-4">Virtual Reality or Artificial Intelligence Technology</h3>
                            </div>
                        </div>

                        <div class="bg-white shadow rounded p-4 hover:bg-sky-100 group">
                            <div class="relative">
                                <img src="{{asset('assets/img/illu/noimage.jpg')}}" alt="" class="w-full h-[190px] bg-center object-cover object-center group-hover:scale-95" />
                                <span class="absolute top-0 left-0 bg-sky-400 text-white text-sm px-2 py-1 rounded-md inline-flex">Technology</span>
                            </div>

                            <div class="mt-3">
                                <h3 class="text-gray-800 font-semibold hover:underline group-hover:underline-offset-4">Virtual Reality or Artificial Intelligence Technology</h3>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="w-1/3 mx-auto mt-8 ms-5">
                    <div>
                        <div class="bg-white shadow rounded p-4 hover:bg-sky-100 group">
                            <div>
                                <img src="{{asset('assets/img/illu/noimage.jpg')}}" alt="" class="w-full h-[250px] bg-center object-cover object-center group-hover:scale-95" />
                            </div>

                            <div class="px-6 pt-5 py-2">
                                <h3 class="text-xl text-gray-800 font-bold hover:underline group-hover:underline-offset-4">Virtual Reality or Artificial Intelligence Technology</h3>
                                <p class="text-md text-light mt-3">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur debitis, dignissimos dolore est et eveniet, expedita illo inventore ipsa ipsam labore laudantium magni necessitatibus nulla provident quo sit voluptate!
                                </p>
                                <div class="flex items-center text-gray-500 text-sm mt-4"><span class="me-2"> By Adrio Devid - </span> <span>Sep 10, 2025</span></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
{{--    End Latest Posts Section--}}

{{--    Start Browse Category Section--}}
    <section class="container my-16 mx-auto">
        <div class="max-w-6xl mx-auto">

            <div class="w-full text-center">
                <h3 class="text-4xl font-bold tracking-wide">Browse by Category</h3>
                <p class="text-gray-500 small mt-3">Select a category to see more related content</p>
                <div class="w-full pt-10">
                    <a href="#" class="bg-gray-700 text-white rounded-2xl border border-gray-300 px-7 py-2 me-4">All</a>
                    <a href="#" class="bg-gray-200 rounded-2xl border border-gray-300 px-7 py-2 me-4 hover:bg-gray-700 hover:text-white transition-all duration-200">Technology</a>
                    <a href="#" class="bg-gray-200 rounded-2xl border border-gray-300 px-7 py-2 me-4 hover:bg-gray-700 hover:text-white transition-all duration-200">Lifestyle</a>
                    <a href="#" class="bg-gray-200 rounded-2xl border border-gray-300 px-7 py-2 me-4 hover:bg-gray-700 hover:text-white transition-all duration-200">Travel</a>
                    <a href="#" class="bg-gray-200 rounded-2xl border border-gray-300 px-7 py-2 hover:bg-gray-700 hover:text-white transition-all duration-200">Health</a>
                </div>
            </div>

            <div class="w-full mt-10">
                <div class="grid grid-cols-3 gap-4 mx-auto">

                    <div class="bg-white shadow rounded p-4 hover:bg-sky-100 group">
                        <div>
                            <img src="{{asset('assets/img/illu/noimage.jpg')}}" alt="" class="w-full h-[250px] bg-center object-cover object-center group-hover:scale-95" />
                        </div>

                        <div class="px-3 pt-5 py-2">
                            <h3 class="text-xl text-gray-800 font-bold hover:underline group-hover:underline-offset-4">Virtual Reality or Artificial Intelligence Technology</h3>
                            <p class="text-md text-gray-700 mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur
                            </p>
                            <div class="w-full flex justify-between items-center text-gray-500 text-sm pt-3 ">
                                <div class="flex items-center">
                                    <img src="{{asset('assets/img/illu/defaultimage.jpg')}}" alt="" class="w-8 h-8 rounded-full me-2"><span class="me-2">Adrio Devid - </span> <span>Sep 10, 2025</span>
                                </div>
                                <span class="bg-sky-400 text-white text-sm px-2 py-1 rounded-md ">Technology</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white shadow rounded p-4 hover:bg-sky-100 group">
                        <div>
                            <img src="{{asset('assets/img/illu/noimage.jpg')}}" alt="" class="w-full h-[250px] bg-center object-cover object-center group-hover:scale-95" />
                        </div>

                        <div class="px-3 pt-5 py-2">
                            <h3 class="text-xl text-gray-800 font-bold hover:underline group-hover:underline-offset-4">Virtual Reality or Artificial Intelligence Technology</h3>
                            <p class="text-md text-gray-700 mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur
                            </p>
                            <div class="w-full flex justify-between items-center text-gray-500 text-sm pt-3 ">
                                <div class="flex items-center">
                                    <img src="{{asset('assets/img/illu/defaultimage.jpg')}}" alt="" class="w-8 h-8 rounded-full me-2"><span class="me-2">Adrio Devid - </span> <span>Sep 10, 2025</span>
                                </div>
                                <span class="bg-sky-400 text-white text-sm px-2 py-1 rounded-md ">Technology</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white shadow rounded p-4 hover:bg-sky-100 group">
                        <div>
                            <img src="{{asset('assets/img/illu/noimage.jpg')}}" alt="" class="w-full h-[250px] bg-center object-cover object-center group-hover:scale-95" />
                        </div>

                        <div class="px-3 pt-5 py-2">
                            <h3 class="text-xl text-gray-800 font-bold hover:underline group-hover:underline-offset-4">Virtual Reality or Artificial Intelligence Technology</h3>
                            <p class="text-md text-gray-700 mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur
                            </p>
                            <div class="w-full flex justify-between items-center text-gray-500 text-sm pt-3 ">
                                <div class="flex items-center">
                                    <img src="{{asset('assets/img/illu/defaultimage.jpg')}}" alt="" class="w-8 h-8 rounded-full me-2"><span class="me-2">Adrio Devid - </span> <span>Sep 10, 2025</span>
                                </div>
                                <span class="bg-sky-400 text-white text-sm px-2 py-1 rounded-md ">Technology</span>
                            </div>
                        </div>
                    </div>


                    <div class="bg-white shadow rounded p-4 hover:bg-sky-100 group">
                        <div>
                            <img src="{{asset('assets/img/illu/noimage.jpg')}}" alt="" class="w-full h-[250px] bg-center object-cover object-center group-hover:scale-95" />
                        </div>

                        <div class="px-3 pt-5 py-2">
                            <h3 class="text-xl text-gray-800 font-bold hover:underline group-hover:underline-offset-4">Virtual Reality or Artificial Intelligence Technology</h3>
                            <p class="text-md text-gray-700 mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur
                            </p>
                            <div class="w-full flex justify-between items-center text-gray-500 text-sm pt-3 ">
                                <div class="flex items-center">
                                    <img src="{{asset('assets/img/illu/defaultimage.jpg')}}" alt="" class="w-8 h-8 rounded-full me-2"><span class="me-2">Adrio Devid - </span> <span>Sep 10, 2025</span>
                                </div>
                                <span class="bg-sky-400 text-white text-sm px-2 py-1 rounded-md ">Technology</span>
                            </div>
                        </div>
                    </div>


                    <div class="bg-white shadow rounded p-4 hover:bg-sky-100 group">
                        <div>
                            <img src="{{asset('assets/img/illu/noimage.jpg')}}" alt="" class="w-full h-[250px] bg-center object-cover object-center group-hover:scale-95" />
                        </div>

                        <div class="px-3 pt-5 py-2">
                            <h3 class="text-xl text-gray-800 font-bold hover:underline group-hover:underline-offset-4">Virtual Reality or Artificial Intelligence Technology</h3>
                            <p class="text-md text-gray-700 mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur
                            </p>
                            <div class="w-full flex justify-between items-center text-gray-500 text-sm pt-3 ">
                                <div class="flex items-center">
                                    <img src="{{asset('assets/img/illu/defaultimage.jpg')}}" alt="" class="w-8 h-8 rounded-full me-2"><span class="me-2">Adrio Devid - </span> <span>Sep 10, 2025</span>
                                </div>
                                <span class="bg-sky-400 text-white text-sm px-2 py-1 rounded-md ">Technology</span>
                            </div>
                        </div>
                    </div>


                    <div class="bg-white shadow rounded p-4 hover:bg-sky-100 group">
                        <div>
                            <img src="{{asset('assets/img/illu/noimage.jpg')}}" alt="" class="w-full h-[250px] bg-center object-cover object-center group-hover:scale-95" />
                        </div>

                        <div class="px-3 pt-5 py-2">
                            <h3 class="text-xl text-gray-800 font-bold hover:underline group-hover:underline-offset-4">Virtual Reality or Artificial Intelligence Technology</h3>
                            <p class="text-md text-gray-700 mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur
                            </p>
                            <div class="w-full flex justify-between items-center text-gray-500 text-sm pt-3 ">
                                <div class="flex items-center">
                                    <img src="{{asset('assets/img/illu/defaultimage.jpg')}}" alt="" class="w-8 h-8 rounded-full me-2"><span class="me-2">Adrio Devid - </span> <span>Sep 10, 2025</span>
                                </div>
                                <span class="bg-sky-400 text-white text-sm px-2 py-1 rounded-md ">Technology</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="w-full text-center mt-10">
                    <a href="javascript:void(0);" class="bg-blue-900 text-md text-center text-white rounded-md hover:bg-blue-700 px-6 py-3 transition-all duration-500">Browse all Post</a>
                </div>

            </div>

        </div>
    </section>
{{--    End Browse Category Section--}}


    {{--    Start Authors Section--}}
    <section class="container my-9 mx-auto">
        <div class="max-w-6xl mx-auto">

            <div class="w-full flex justify-between border-b border-b-gray-300 pb-4">
                <h3 class="text-3xl font-semibold text-blue-950">Top Authors</h3>
                <div class="text-gray-600">
                    <p><span>View Authors</span><i class="fas fa-external-link-alt me-3 ms-3"></i></p>
                </div>
            </div>

            <div class="flex mx-auto mt-10">
                <div class="w-full grid grid-cols-3 gap-7">

                    <div class="w-full flex justify-center items-center py-5 bg-white rounded-xl border border-gray-300">
                        <img src="{{asset('assets/img/illu/defaultimage.jpg')}}" alt="" class="w-28 h-28 rounded-full me-2">
                        <div class="ps-3">
                            <h3 class="font-semibold text-lg">Adrio Devid</h3>
                            <p class="text-gray-600 my-1 mb-2">Director of Operations</p>
                            <span class="text-gray-600"><i class="fas fa-file-signature me-1"></i> 03 Published Posts</span>
                        </div>
                    </div>

                    <div class="w-full flex justify-center items-center py-5 bg-white rounded-xl border border-gray-300">
                        <img src="{{asset('assets/img/illu/defaultimage.jpg')}}" alt="" class="w-28 h-28 rounded-full me-2">
                        <div class="ps-3">
                            <h3 class="font-semibold text-lg">Adrio Devid</h3>
                            <p class="text-gray-600 my-1 mb-2">Director of Operations</p>
                            <span class="text-gray-600"><i class="fas fa-file-signature me-1"></i> 03 Published Posts</span>
                        </div>
                    </div>

                    <div class="w-full flex justify-center items-center py-5 bg-white rounded-xl border border-gray-300">
                        <img src="{{asset('assets/img/illu/defaultimage.jpg')}}" alt="" class="w-28 h-28 rounded-full me-2">
                        <div class="ps-3">
                            <h3 class="font-semibold text-lg">Adrio Devid</h3>
                            <p class="text-gray-600 my-1 mb-2">Director of Operations</p>
                            <span class="text-gray-600"><i class="fas fa-file-signature me-1"></i> 03 Published Posts</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    {{--    End Authors Section--}}


    {{--    Start Subscribe Section--}}
    <section class="container my-12 mx-auto">
        <div class="max-w-6xl mx-auto">

            <div class="w-full bg-white flex justify-center items-center py-8 px-10 mx-auto">
                <div class="w-1/2 pe-12">
                    <div class="flex flex-col justify-center">
                        <h3 class="text-2xl font-semibold">Subscribe to Newsletter</h3>
                        <p class="text-gray-600 mt-4">Provide your email to get email notification when we launch new products or publish new articles</p>
                    </div>
                </div>

                <div class="w-1/2">
                    <div class="float-end">
                        <input type="text" class="border border-gray-300 rounded-md p-3 ps-4 me-5" placeholder="Enter your email" />
                        <a href="javascript:void(0);" class="bg-blue-900 text-md font-bold text-center text-white rounded-md hover:bg-blue-700 px-8 py-4 transition-all duration-500">Subscribe</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{--    End Subscribe Section--}}

@endsection

@section('js')

    <script type="text/javascript">
        {{--    Start navbar toggle menu --}}
        function togglemenu(ele){
            const gettoogleul = document.getElementById('toggleuls');

            ele.classList.contains('togglemenu') ? (ele.classList.remove('togglemenu'),gettoogleul.classList.add('opacity-100')) : (ele.classList.add('togglemenu'),gettoogleul.classList.remove('opacity-100'));
        }
        {{--    End navbar toggle menu --}}

        $(document).ready(function(){

            // Start Back to Top
            $('.btn-backtotops').hide();
            $(window).scroll(function(){
                let getscrolltop = $(this).scrollTop();
                // console.log(getscrolltop);

                if(getscrolltop >= 370){
                    $('.btn-backtotops').fadeIn(500);
                }else{
                    $('.btn-backtotops').fadeOut(500);
                }

                if(getscrolltop >= 200){
                    $('.navbars').removeClass("py-5");
                    $('.navbars').addClass("py-4");
                }else{
                    $('.navbars').removeClass("py-4");
                    $('.navbars').addClass("py-5");
                }
            });
            // End Back to Top


        });
    </script>

@endsection
