@extends('layouts.adminindex')

@section('content')

<div class="px-7 py-5">
    <h6>Create Post</h6>
    <div class="w-full py-4">

        <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('POST')

            <div class="flex justify-center space-x-7">
                <div class="md:w-1/3">

                    <div class="w-full bg-blue-100 text-gray-500 flex justify-center items-center mb-8">
                        <label for="image" class="gallery">
                            <span>Choose Image</span>
                        </label>
                        <input type="file" name="image" id="image" class="hidden" />
                    </div>

                    <div class="w-full mb-5">

                        <label class="text-gray-700">Categories</label>
                        <div class="w-full flex flex-wrap text-gray-600 mt-3">
                            @foreach($tags as $id=>$name)
                                <div class="me-4">
                                    <input type="checkbox" name="tag_id[]" id="tag_id{{$id}}" value="{{$id}}"  class="me-1"/>
                                    <label for="tag_id{{$id}}">{{$name}}</label>
                                </div>
                            @endforeach
                        </div>

                        {{--                    start hidden field --}}
                        <input type="hidden" id="tagable_type" name="tagable_type" value="App\Models\Post" />
                        {{--                    end hidden field --}}


                    </div>

                </div>

                <div class="md:w-2/3">
                    <div class="w-full mb-5">
                        <label for="title" class="text-gray-600 block">Title</label>
                        <input type="text" name="title" id="title" class="w-full border-gray-300" placeholder="Enter Title..." />
                    </div>

                    <div class="w-full">
                        <label for="content" class="text-gray-600 block">Content</label>
                        <textarea name="content" id="content" rows="7" class="w-full border-gray-300 resize-y-none" placeholder="Say Something..."></textarea>
                    </div>

                    <div class="flex justify-end space-x-2.5 mt-5">
                        <a href="{{route('dashboards.index')}}" class="bg-gray-300 text-sm px-4 py-2 hover:bg-white border-2 border-white hover:border-blue-900 rounded-md">Back</a>
                        <button type="submit" class="bg-blue-900 text-sm text-white px-4 py-2 border-2 border-white hover:bg-blue-700  rounded-md">Submit</button>
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>

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
        });
    </script>
@endsection
