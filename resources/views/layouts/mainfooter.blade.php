{{--Start Footer Section--}}
<footer class="bg-white border-t border-t-gray-300">
    <div class="max-w-6xl mx-auto">
        <div class="container mx-auto py-7">

            <div class="flex justify-between items-center text-gray-600 text-[15px]">
{{--                <div class="w-1/3">--}}
                    <p>&copy; <span id="getyear"></span> Blogr. All right reserved</p>
{{--                </div>--}}

{{--                <div class="w-1/3 flex justify-center items-center">--}}
                    <ul class="flex list-disc">
                        <li class="me-8 list-none">Privacy</li>
                        <li class="me-8">Terms</li>
                        <li class="me-8">Contacts</li>
                    </ul>
{{--                </div>--}}

                <div>
                        <span class="text-black me-4">Follow Us : </span>
                        <i class="fab fa-facebook-f text-[18px] me-3"></i>
                        <i class="fab fa-twitter text-[18px] me-3"></i>
                        <i class="fab fa-linkedin-in text-[18px] me-3"></i>
                        <i class="fab fa-pinterest text-[18px]"></i>

                </div>
            </div>
        </div>
    </div>
</footer>
{{--End Footer Section--}}

</body>

{{--jquery js1--}}
<script src="https://code.jquery.com/jquery-3.7.1.min.js" type="text/javascript"></script>

{{--extra js --}}
@yield('js')

{{--   Start Footer js section--}}
<script !src="">
    let getyear = document.getElementById('getyear');
    const getfullyear = new Date().getFullYear();
    getyear.textContent = getfullyear;
</script>
{{--   End Footer js section--}}

</html>
