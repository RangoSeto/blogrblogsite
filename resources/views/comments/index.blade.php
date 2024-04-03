@extends('layouts.adminindex')
@section('content')


    <!--            Start Post Show Section-->
    <div class="px-12 my-8 mb-24">

        @foreach($comments as $comment)
            <a href="{{route('posts.show',$comment->commentable_id)}}">
                <div class=" border border-blue-200 p-5 hover:bg-blue-50 group mb-3">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <img src="{{empty($comment->userdata()->image) ? asset('assets/img/illu/defaultimage.jpg') : asset($comment->userdata()->image)}}" alt="" class="w-12 h-12 rounded-full me-3" />
                            <span><span class="font-semibold">{{$comment->user->name}} </span>Commented on <span class="italic">{{Str::limit($comment->commentable->title,40)}}</span></span>
                        </div>
                        <div>
                            <span>{{$comment->created_at->format('d M Y')}}</span>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach

    </div>
    <!--            End Post Show Section    -->

@endsection

@section('css')

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

        // Start Delete Btn
        const getdeltebtns = document.querySelectorAll('.delete-btn');
        getdeltebtns.forEach(function(getdeltebtn){
            getdeltebtn.addEventListener('click',function(){
                var getidx = this.getAttribute('data-idx');

                if(window.confirm(`Are you sure !! You want to delete ${getidx} ?`)){
                    document.getElementById('formdelete'+getidx).submit();
                    return true;
                }else{
                    return false;
                }
            });
        });
        // End Delete Btn
    </script>
@endsection
