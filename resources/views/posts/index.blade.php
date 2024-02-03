@extends('layouts.adminindex')
@section('content')


    <!--            Start Search Section-->
    <div class="w-full bg-white shadow-xl sticky top-0 px-12 py-4">
        <form action="" class="flex justify-between ">

            <div>
                <select name="filter" id="filter" class="block w-full p-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 ">
                    <option value="" selected>All</option>
                    @foreach($tags as $id=>$name)
                        <option class="text-gray-600 border-b-2 border-b-blue-900" value="{{$id}}" {{$id == request('filter') ? 'selected' : ''}}>{{$name}}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <input type="search" name="search" id="search" class="block w-full p-2 ps-5 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 " placeholder="Search" required value="{{request('search')}}">
                    <button type="button" id="btn-clear" class="text-white text-center absolute right-8 bottom-[1px] bg-gray-400 hover:bg-sky-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-4 py-2"><i class="fas fa-sync pe-2"></i></button>
                    <button type="submit" class="text-white absolute end-0 bottom-[1px] bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-e-lg text-sm px-4 py-2"><i class="fas fa-search"></i></button>
                </div>
            </div>

        </form>


    </div>
    <!--            End Search Section-->

    <!--            Start Post Show Section-->
    <div class="px-12 my-8 mb-24">

        @foreach($posts as $post)
            <a href="{{route('posts.show',$post->id)}}">
                <div class="flex justify-between items-center border border-blue-200 p-5 hover:bg-blue-50 group mb-3">
                    <div class="flex items-center">
                        <img src="{{asset($post->image)}}" width="100" height="50" alt="post1" />
                        <div class="ps-5">
                            <p class="group-hover:underline pb-2">{{ Str::limit($post->title,60)  }}</p>
                            <p class="text-sm text-gray-500">{!! Str::limit($post->content,50) !!}</p>

                            <div class="mt-3">
                                @foreach($post->tag as $tag)
                                    <span class="bg-sky-400 text-white text-sm px-2 py-1 rounded-md">{{$tag->name}}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-end me-5">
                        <div class="flex items-center mb-2">
                            <span class="text-sm text-gray-500 me-3">Admin</span>
                            <img src="{{asset('assets/img/users/user3.jpg')}}" alt="user" class="w-10 h-10 rounded-full hover:cursor-pointer" />
                        </div>
                        <p class="text-sm text-gray-500">Publish : {{$post->created_at->format('d M Y')}}</p>
                    </div>
                </div>
            </a>
        @endforeach


    </div>
    <!--            End Post Show Section    -->

@endsection

@section('js')
    <script type="text/javascript">

        // Start Filter Section
        document.getElementById('filter').addEventListener('click',function(){
           let getfilterid = this.options[this.selectedIndex].value;
           window.location.href = window.location.href.split("?")[0]+'?filter='+getfilterid;
        });
        // End Filter Section

        // Start Btn Clear
        document.getElementById('btn-clear').addEventListener('click',function(){
            const getfilter = document.getElementById('filter');
            const getsearch = document.getElementById('search');

            getfilter.selectedIndex = 0;
            getsearch.value = '';
            window.location.href = window.location.href.split("?")[0];
        });
        // End Btn Clear

        // Start Auto Btn Clear
        const autoshowbtn = function (){
            let getbtnclear = document.getElementById('btn-clear');
            let geturlquery = window.location.search;
            let pattern = /[?&]search=/;
            if(pattern.test(geturlquery)){
                getbtnclear.style.display = "block";
            }else{
                getbtnclear.style.display = "none";
            }
        }
        autoshowbtn();
        // End Auto Btn Clear

    </script>
@endsection
