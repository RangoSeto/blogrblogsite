@extends('layouts.adminindex')

@section('content')

    <div class="px-7 py-5">
        <h6 class="text-gray-700">Account Details</h6>
        <div class="w-full py-4">

            <form action="{{route('userdatas.store')}}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('POST')

                <div class="flex justify-center space-x-7">
                    <div class="md:w-1/3">

                        <div class="w-full text-gray-500 flex justify-center items-center">
{{--                            <img src="{{ @if($userdatas->checkuserdata()) asset($userdatas->image) @else asset('assets/img/illu/defaultimage.jpg') @endif}} " alt="" width="180" height="230" />--}}
                            @if(!is_null($userdatas))
                                <img src="{{asset($userdatas->image)}}" alt="" width="180" height="230" />
                            @else
                                <img src="{{asset('assets/img/illu/defaultimage.jpg')}}" alt="" width="180" height="230" />
                            @endif

                        </div>

                        <div class="w-full mb-2">
                            <label for="bio" class="text-gray-600 block">Bio</label>
                            <textarea name="bio" id="bio" rows="3" class="w-full text-gray-700 border-gray-300 resize-y-none " readonly placeholder="Write Bio...">{{is_null($userdatas)? '' : $userdatas->bio}}</textarea>
                        </div>

                        <div class="w-full text-center">
                            <a href="{{is_null($userdatas) ? route('userdatas.create') : route('userdatas.edit',$userdatas->id)}}" class="bg-sky-200 py-2 px-5 rounded-full text-gray-700 text-sm "><i class="fas fa-pen fa-xs me-2"></i>Edit</a>
                        </div>

                    </div>

                    <div class="md:w-2/3">
                        <div class="w-full mb-5">
                            <label for="name" class="text-gray-600 block">Name</label>
                            <input type="text" name="name" id="title" class="w-full text-gray-600 border-gray-300" value="{{$alluser->name}}" readonly />
                        </div>

                        <div class="w-full">
                            <label for="email" class="text-gray-600 block">Email</label>
                            <input type="email" name="email" id="title" class="w-full text-gray-600 border-gray-300" value="{{$alluser->email}}" readonly />
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
