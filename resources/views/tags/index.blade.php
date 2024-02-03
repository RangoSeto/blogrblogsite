@extends('layouts.adminindex')

@section('content')
    <div class="px-7 py-5">
        <h6>Tag Lists</h6>

        <div class="w-full py-5">

            <a href="javascript:void(0);" id="create-btn" class="bg-blue-900 text-sm text-white px-4 py-2 border-2 border-white hover:bg-blue-700 rounded-md">Create</a>

            <hr class="my-4">

            <div class="w-full">
                <div class="pb-12">
                    <table class="w-full table-auto border text-stone-700 text-sm">
                        <thead>
                        <tr class="font-semibold">
                            <td class="border-b border-gray-500 px-2 py-4">No</td>
                            <td class="border-b border-gray-500">Name</td>
                            <td class="border-b border-gray-500">By</td>
                            <td class="border-b border-gray-500">Created at</td>
                            <td class="border-b border-gray-500">Updated at</td>
                            <td class="border-b border-gray-500">Action</td>
                        </tr>
                        </thead>
                        <tbody
                        @foreach($tags as $idx=>$tag)
                            <tr>
                                <td class="border-b border-gray-200 px-2 py-4">{{++$idx}}</td>
                                <td class="border-b border-gray-200">{{$tag->name}}</td>
                                <td class="border-b border-gray-200">{{$tag->user->name}}</td>
                                <td class="border-b border-gray-200">{{$tag->created_at->format('d M Y')}}</td>
                                <td class="border-b border-gray-200">{{$tag->updated_at->format('d M Y')}}</td>
                                <td class="border-b border-gray-200">
                                    <a href="#" class="pe-4 edit-btn" data-id="{{$tag->id}}" data-name="{{$tag->name}}"><i class="fas fa-edit fa-sm text-blue-900"></i></a>
                                    <a href="#" class="delete-btn" data-id="{{$tag->id}}"><i class="fas fa-trash-alt fa-sm text-red-600"></i></a>
                                </td>
                                <form id="formdelete{{$tag->id}}" action="{{route('tags.destroy',$tag->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    {{--    Start Modal box area --}}
        {{--        start create modal ara--}}
        <div id="createmodal" class="modal">

            <div class="model-dialog relative">
                <span id="close-btn" class="text-3xl text-gray-600 absolute right-10 top-3 cursor-pointer hover:text-gray-800">&times;</span>
                <h6 class="text-gray-500 pb-2 border-b border-b-blue-300">Category Create</h6>
                <form action="{{route('tags.store')}}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="py-3">
                        <label for="name" class="pb-1 text-sm text-gray-600 block">Name</label>
                        <input type="text" name="name" id="name" class="text-base text-gray-700 px-2 py-1 border-gray-300" placeholder="Enter Title..."/>
                    </div>

                    <div class="text-end pt-2">
                        <button type="submit" class="bg-blue-900 text-sm text-white px-3 py-1.5 border-2 border-white hover:bg-blue-700  rounded-md">Sumbit</button>
                    </div>
                </form>
            </div>

        </div>
        {{--        start create modal ara--}}

        {{--        start edit modal ara--}}
        <div id="editmodal" class="modal">

            <div class="model-dialog relative">
                <span id="ed-close-btn" class="text-3xl text-gray-600 absolute right-10 top-3 cursor-pointer hover:text-gray-800">&times;</span>
                <h6 class="text-gray-500 pb-2 border-b border-b-blue-300">Category Edit</h6>
                <form action="#" method="POST" id="formaction">
                    @csrf
                    @method('PUT')
                    <div class="py-3">
                        <label for="name" class="pb-1 text-sm text-gray-600 block">Name</label>
                        <input type="text" name="name" id="editname" class="text-base text-gray-700 px-2 py-1 border-gray-300" placeholder="Enter Title..."/>
                    </div>

                    <div class="text-end pt-2">
                        <button type="submit" class="bg-blue-900 text-sm text-white px-3 py-1.5 border-2 border-white hover:bg-blue-700  rounded-md">Sumbit</button>
                    </div>
                </form>
            </div>

        </div>
        {{--        start create modal ara--}}
    {{--    Start Modal box area --}}
@endsection

@section('css')

    <style type="text/css">
        #createmodal,#editmodal{
            width: 100%;
            height: 100%;
            background: rgba(112, 112, 112,0.8);

            position: absolute;
            left: 0;
            top: 0;

            /*display: flex;*/
            display: none;
            justify-content: center;
            align-items: center;
        }

        .model-dialog {
            background: white;
            padding: 30px 40px;
        }
    </style>

@endsection

@section('js')
    <script type="text/javascript">

        // Start Modal Area
        // start create modal area
        let getcreatebtn = document.getElementById('create-btn');
        let getcreatemodal = document.getElementById('createmodal');
        let getclosebtn = document.getElementById('close-btn');
        getcreatebtn.addEventListener('click',function(){
            getcreatemodal.style.display = "flex";
        });

        window.onclick = function(e){
            if(e.target === getcreatemodal){
                getcreatemodal.style.display = "none";
            }
        }

        getclosebtn.addEventListener('click',function(){
            getcreatemodal.style.display = "none";
        });
        // end create modal area

        // start edit modal area
        let geteditbtns = document.querySelectorAll('.edit-btn');
        let geteditmodal = document.getElementById('editmodal');
        let getedclosebtn = document.getElementById('ed-close-btn');
        let geteditname = document.getElementById('editname');
        let getformaction = document.getElementById('formaction');

        geteditbtns.forEach(function(geteditbtn){
            geteditbtn.addEventListener('click',function(){
                geteditmodal.style.display = "flex";

                getid = this.getAttribute('data-id');
                getname = this.getAttribute('data-name');
                geteditname.setAttribute('value',getname);

                getformaction.setAttribute('action',`tags/${getid}`);
            });
        });

        window.onclick = function(e){
            if(e.target === geteditmodal){
                geteditmodal.style.display = "none";
            }
        }

        getedclosebtn.addEventListener('click',function(){
            geteditmodal.style.display = "none";
        });


        // end edit modal area

        // End Modal Area


        // Start delete btn
        let getdeletebtns = document.querySelectorAll('.delete-btn');
        getdeletebtns.forEach(function(getdeletebtn){
            getdeletebtn.addEventListener('click',function(){
                let getid = this.getAttribute('data-id');
                let getform = document.getElementById(`formdelete${getid}`);
                getform.submit();
            });
        });
        // End delete btn

    </script>
@endsection
