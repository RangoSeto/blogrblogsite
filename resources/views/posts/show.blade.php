@extends('layouts.adminindex')

@section('content')

    <!--            Start Back Section-->
    <div class="w-full bg-white shadow-md sticky top-0 px-12 py-4">

        <a href="javascript:void(0);" class="btn-back bg-gray-400 text-sm text-white rounded-sm px-5 py-2.5 me-2">Back</a>
        <a href="{{route('posts.create')}}" class="bg-sky-600 text-sm text-white rounded-sm px-5 py-2.5">Create</a>

    </div>
    <!--            End Back Section-->

    <!--            Start Post Show Section-->

    <div class="w-full px-12 my-8 mb-24">

        <div class="w-full flex ">
            <div class="w-1/4 bg-gray-100 text-gray-600 text-sm font-light">

                <div class="w-full p-5">

                    <div class="flex justify-between mb-5">
                        <span><i class="fas fa-user fa-sm me-3"></i>User</span>
                        <span>{{$post->user['name']}}</span>
                    </div>

                    <div class="flex justify-between mb-5">
                        <span><i class="fas fa-calendar-alt fa-sm me-3"></i>Created</span>
                        <span>{{$post->created_at->format('d M Y | h:i:s A')}}</span>
                    </div>

                    <div class="flex justify-between mb-5">
                        <span><i class="fas fa-calendar-alt fa-sm me-3"></i>Updated</span>
                        <span>{{$post->updated_at->format('d M Y | h:i:s A')}}</span>
                    </div>

                </div>

                <div class="w-full p-5">
                    <h3>Categories</h3>
                    <div class="mt-3">
                        @foreach($post->tag as $tag)
                            <span class="bg-sky-400 text-white text-sm px-2 py-1 rounded-md">{{$tag->name}}</span>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="w-3/4 bg-gray-100 ms-3 py-7">
                <div class=" text-center ">
                    <h3 class="font-bold text-xl text-gray-700">{{$post->title}}</h3>
                    <img src="{{empty($post->image) ? asset('assets/img/illu/noimage.jpg') : asset($post->image)}}" width="350"  class="max-h-88 mx-auto py-8" alt="">
                    <div>
                        <p class="px-14 text-justify text-gray-700 whitespace-pre-wrap">{{$post->content}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full mt-8">
            <div class="w-full">
                <form action="{{route('comments.store')}}" method="POST" class="mb-6">
                    @csrf
                    <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-300">
                        <label for="description" class="sr-only">Your comment</label>
                        <textarea id="description" name="description" rows="3"
                                  class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none"
                                  placeholder="Write a comment..." required></textarea>
                    </div>
                    <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center bg-blue-500 text-white rounded-lg focus:ring-4 focus:ring-primary-200 hover:bg-blue-400">
                        Post comment
                    </button>

{{--                    Start Hidden Fields--}}
                    <input type="hidden" name="commentable_id" id="commentable_id" value="{{$post->id}}" />
                    <input type="hidden" name="owner_id" id="owner_id" value="{{$post->user_id}}" />
                    <input type="hidden" name="commentable_type" id="commentable_type" value="App\Models\Post" />
{{--                    End Hidden Fields--}}

                </form>

                @foreach($comments as $comment)
                <article class="p-6 text-base bg-gray-200 rounded-lg hover:bg-gray-300 transition transition-all mt-4">

                    <footer class="flex justify-between items-center mb-2">
                        <div class="flex items-center">
                            <p class="inline-flex items-center mr-3 text-sm text-gray-900 font-semibold">
                                <img src="{{ empty($post->userdata()->image) ? asset('assets/img/illu/defaultimage.jpg') : asset($post->userdata()->image)}}" class="mr-2 w-6 h-6 rounded-full" alt="Michael Gough" />{{$comment->user->name}}
                            </p>

                            <p class="text-sm text-gray-600 dark:text-gray-400">{{$comment->created_at->format('M d Y : h:i:s')}}</p>
                        </div>
{{--                        <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"--}}
{{--                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-800 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50"--}}
{{--                                type="button">--}}
{{--                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">--}}
{{--                                <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>--}}
{{--                            </svg>--}}
{{--                            <span class="sr-only">Comment settings</span>--}}
{{--                        </button>--}}
{{--                        <!-- Dropdown menu -->--}}
{{--                        <div id="dropdownComment1"--}}
{{--                             class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">--}}
{{--                            <ul class="py-1 text-sm text-gray-700"--}}
{{--                                aria-labelledby="dropdownMenuIconHorizontalButton">--}}
{{--                                <li>--}}
{{--                                    <a href="#"--}}
{{--                                       class="block py-2 px-4 hover:bg-gray-100">Edit</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#"--}}
{{--                                       class="block py-2 px-4 hover:bg-gray-100">Remove</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#"--}}
{{--                                       class="block py-2 px-4 hover:bg-gray-100">Report</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                    </footer>
                    <p class="text-gray-600">{{$comment->description}}</p>
                    <div class="flex items-center mt-4 space-x-4">
{{--                        <button type="button"--}}
{{--                                class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">--}}
{{--                            <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">--}}
{{--                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>--}}
{{--                            </svg>--}}
{{--                            Reply--}}
{{--                        </button>--}}
                    </div>
                </article>
                @endforeach
            </div>
            <div>

            </div>
        </div>

    </div>
    <!--            End Post Show Section    -->

@endsection

@section('css')
    <style type="text/css">

        .gallery{
            width: 100%;
            background-color: #eee;
            color: #aaa;

            display: flex;
            justify-content: center;
            align-items: center;

            text-align: center;
            padding: 10px;
        }

        .gallery.removetxt span{
            display: none;
        }

        .gallery img{
            width: 100px;
            height: 100px;
            border: 2px dashed #aaa;
            border-radius: 10px;
            object-fit: cover;

            padding: 5px;
            margin: 0 5px;
        }
    </style>
@endsection


@section('js')
    <script type="text/javascript">
        $(document).ready(function(){

            // Start Image Preview
            var previewimages = function(input,output){

                console.log(input.files);


                if(input.files){
                    var totalfiles = input.files.length;
                    // console.log(totalfiles); img နဲ့ပက်သက်တဲ့ info တွေသိချင်ရင်

                    if(totalfiles > 0){
                        $(".gallery").addClass("removetxt");
                    }else{
                        $(".gallery").removeClass("removetxt");
                    }

                    for(var i=0; i < totalfiles ; i++){
                        var filereader = new FileReader();
                        filereader.readAsDataURL(input.files[i]);

                        filereader.onload = function(e){
                            $(output).html('');
                            $($.parseHTML("<img>")).attr("src",e.target.result).appendTo(output);
                        }

                    }
                }

            };

            $("#image").change(function(){
                previewimages(this,'.gallery');
            });

            // End Image Preview

            // Start Back Btn
            $('.btn-back').click(function(){
                window.history.back();
            });
            // End Back Btn


        });
    </script>
@endsection
