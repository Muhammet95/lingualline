<style>
    .block-footer {
        box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5);
        border-color: rgba(0, 0, 0, 0.5);
    }
</style>
<footer class="d-flex flex-wrap text-center pt-2 pb-2 text-black block-footer" style="background: rgba(256, 256, 256, 0.5)">
    <div class="col-12 col-sm-6 col-md-3">
        <span>WhatsApp:</span><br>
        <span>+905050181191</span><br>
        <span>e-mail:</span><br>
        <span>lingualline1@gmail.com</span><br>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <a href="{{url('/policy')}}" style="color: black;">{{__("base.policy")}}</a><br>
        <span>{{__("base.build_year")}}</span><br><br>
        <span>
{{--            <img src="{{asset('assets/img/Logo.png')}}" alt="Lingualline" width="100">--}}
            <a href="/" style="text-decoration: none;color: black; font-style: italic; font-size: 20px;">
                lingualline &#169;
            </a>
        </span><br>
    </div>
    <div class="col-6 d-flex flex-column justify-content-center text-center">
        <img src="{{asset('/assets/img/pay-logo.png')}}" alt="pay-logo" height="30">
    </div>
</footer>
