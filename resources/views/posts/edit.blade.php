@extends('layouts.adminindex')

@section('content')

{{--    <!--            Start Back Section-->--}}
{{--    <div class="w-full bg-white shadow-md sticky top-0 px-12 py-4">--}}

{{--        <a href="javascript:void(0);" class="btn-back bg-gray-400 text-sm text-white rounded-sm px-5 py-2.5 me-2">Back</a>--}}
{{--        <a href="{{route('posts.create')}}" class="bg-sky-600 text-sm text-white rounded-sm px-5 py-2.5">Create</a>--}}

{{--    </div>--}}
{{--    <!--            End Back Section-->--}}

    <!--            Start Post Show Section-->

    <div class="w-full flex px-6 my-4 mb-24">

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
                    @foreach($tags as $id=>$name)
                        <div class="py-1.5 me-4 inline-flex">
                            <input type="checkbox" name="tag_id[]" id="tag_id{{$id}}" value="{{$id}}" class="me-1"
                                @foreach($taggables as $taggable)
                                    @if($taggable['id'] == $id)
                                        checked
                                   @endif
                                @endforeach
                            />
                            <label for="tag_id{{$id}}">{{$name}}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="w-3/4 bg-gray-100 ms-3 py-7">
            <div class="text-center px-4">
                <input type="text" value="{{$post->title}}" class="w-full font-bold text-xl text-gray-700 text-center" style="background-color: transparent !important;" title="click to edit" >
                <img src="{{asset('assets/img/posts/165b5ea1ed830dphoto_2024-01-09_17-01-26.jpg')}}" width="400" class="mx-auto py-8" alt="">
                <div>
                    <textarea class="w-full min-h-44 px-18 text-sm leading-relaxed text-justify text-gray-700 bg-transparent border-1 resize-none" rows="10" style="background-color: transparent !important;">{{$post->content}}</textarea>
                </div>
            </div>

            <div class="flex justify-end space-x-2.5 mt-5">
                <a href="{{route('posts.index')}}" class="bg-gray-300 text-sm px-4 py-2 hover:bg-white border-2 border-white hover:border-blue-900 rounded-md">Back</a>
                <button type="submit" class="bg-blue-900 text-sm text-white px-4 py-2 border-2 border-white hover:bg-blue-700  rounded-md">Update</button>
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
