@include('layouts.adminheader')

@include('layouts.adminnavbar')


<!--    Start body section-->
<section class="w-full flex ">

    @include('layouts.adminsidebar')

    <div class="w-3/4 h-screen overflow-y-scroll overflow-x-hidden pb-4 mx-auto">
        @yield('content')
    </div>

</section>
<!--    End body section-->

@include('layouts.adminfooter')
