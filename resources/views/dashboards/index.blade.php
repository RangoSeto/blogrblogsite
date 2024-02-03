@extends('layouts.adminindex')
@section('content')


        <!--            Start Search Section-->
        <div class="w-full bg-white flex justify-between shadow-xl sticky top-0 px-12 py-4">
            <form action="">
                <select name="filter" id="filter" class="px-12 bg-white focus:border-none focus:outline-none hover:bg-gray-200 px-8 py-2">
                    <option value="1">All</option>
                </select>
            </form>

            <div class="flex justify-center items-center bg-gray-200 rounded-xl px-5 py-1">
                <span class=""><i class="fas fa-search text-md text-gray-500"></i></span>
                <input type="text" id="search" class="bg-gray-200 border-none outline-none px-3 btn-searchs focus:border-0 focus:outline-none" placeholder="Search posts..." />
            </div>
        </div>
        <!--            End Search Section-->

        <!--            Start Post Show Section-->
        <div class="px-12 my-8 mb-24">

{{--            @foreach($posts as $post)--}}
                <div class="flex justify-between items-center border border-blue-200 p-5 hover:bg-blue-50 group mb-3">
                    <div class="flex items-center">
                        <img src="https://source.unsplash.com/100x70/?1" alt="post1" />
                        <div class="ps-5">
                            <p class="group-hover:underline pb-3">Is Social Media a Reliable Source of News?</p>
                            <p class="text-sm text-gray-500">Publish : Jan 13</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="text-sm text-gray-500 me-5">Admin</span>
                        <img src="./assets/img/users/user3.jpg" alt="user" class="w-10 h-10 rounded-full hover:cursor-pointer me-5" />
                    </div>
                </div>
{{--            @endforeach--}}



{{--            <div class="flex justify-between items-center border border-blue-200 p-5 hover:bg-blue-50 group mb-3">--}}
{{--                <div class="flex items-center">--}}
{{--                    <img src="https://source.unsplash.com/100x70/?1" alt="post1" />--}}
{{--                    <div class="ps-5">--}}
{{--                        <p class="group-hover:underline pb-3">Is Social Media a Reliable Source of News?</p>--}}
{{--                        <p class="text-sm text-gray-500">Publish : Jan 13</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="flex items-center">--}}
{{--                    <span class="text-sm text-gray-500 me-5">Admin</span>--}}
{{--                    <img src="./assets/img/users/user3.jpg" alt="user" class="w-10 h-10 rounded-full hover:cursor-pointer me-5" />--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="flex justify-between items-center border border-blue-200 p-5 hover:bg-blue-50 group mb-3">--}}
{{--                <div class="flex items-center">--}}
{{--                    <img src="https://source.unsplash.com/100x70/?1" alt="post1" />--}}
{{--                    <div class="ps-5">--}}
{{--                        <p class="group-hover:underline pb-3">Is Social Media a Reliable Source of News?</p>--}}
{{--                        <p class="text-sm text-gray-500">Publish : Jan 13</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="flex items-center">--}}
{{--                    <span class="text-sm text-gray-500 me-5">Admin</span>--}}
{{--                    <img src="./assets/img/users/user3.jpg" alt="user" class="w-10 h-10 rounded-full hover:cursor-pointer me-5" />--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="flex justify-between items-center border border-blue-200 p-5 hover:bg-blue-50 group mb-3">--}}
{{--                <div class="flex items-center">--}}
{{--                    <img src="https://source.unsplash.com/100x70/?1" alt="post1" />--}}
{{--                    <div class="ps-5">--}}
{{--                        <p class="group-hover:underline pb-3">Is Social Media a Reliable Source of News?</p>--}}
{{--                        <p class="text-sm text-gray-500">Publish : Jan 13</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="flex items-center">--}}
{{--                    <span class="text-sm text-gray-500 me-5">Admin</span>--}}
{{--                    <img src="./assets/img/users/user3.jpg" alt="user" class="w-10 h-10 rounded-full hover:cursor-pointer me-5" />--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="flex justify-between items-center border border-blue-200 p-5 hover:bg-blue-50 group mb-3">--}}
{{--                <div class="flex items-center">--}}
{{--                    <img src="https://source.unsplash.com/100x70/?1" alt="post1" />--}}
{{--                    <div class="ps-5">--}}
{{--                        <p class="group-hover:underline pb-3">Is Social Media a Reliable Source of News?</p>--}}
{{--                        <p class="text-sm text-gray-500">Publish : Jan 13</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="flex items-center">--}}
{{--                    <span class="text-sm text-gray-500 me-5">Admin</span>--}}
{{--                    <img src="./assets/img/users/user3.jpg" alt="user" class="w-10 h-10 rounded-full hover:cursor-pointer me-5" />--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
        <!--            End Post Show Section    -->


@endsection
