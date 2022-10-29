<style>
    .main-color {
        background: #0a53be;
        border-radius: 10px;
        transition-property: opacity;
        transition-duration: 0.3s;
        border-color: rgba(256, 256, 256, 0.3);
    }
    .main-color:hover {
        opacity: 0.7;
    }
    .block-header {
        box-shadow: 0px 4px 2px rgba(0, 0, 0, 0.5);
        border-color: rgba(0, 0, 0, 0.5);
    }
</style>
<header class="p-2 d-flex justify-content-around block-header flex-wrap" style="background: rgba(256, 256, 256, 0.7);">
    <a href="{{url('/')}}" class="col-12 pb-4 text-center">
        <img src="{{asset('assets/img/Logo.png')}}" alt="Lingualline" width="100">
    </a>
    <a href="{{url('/about')}}" class="btn main-color text-white" style="width: 200px;">{{__("base.about")}}</a>
    <a href="{{url('/services')}}" class="btn main-color text-white" style="width: 200px;">{{__("base.services")}}</a>
    <a href="{{url('/contact')}}" class="btn main-color text-white" style="width: 200px;">{{__("base.contact")}}</a>
    <a href="{{url('/')}}" class="btn main-color text-white" style="width: 200px;">{{__("base.order")}}</a>
    <a href="{{url('/')}}" class="btn main-color text-white" style="width: 200px;">{{__("base.check")}}</a>
    <select id="global_language" class="form-control" style="width: 150px; background-color: rgba(256, 256, 256, 0.6); text-transform: uppercase;">
        <option value="en" selected>🇬🇧 ENGLISH</option>
        <option value="tk">🇹🇷 Türkçe</option>
        <option value="ru">🇷🇺 РУССКИЙ</option>
    </select>
</header>

<script>
    $('#global_language').on('change', async (e) => {
        await fetch(`/set_locale/${e.currentTarget.value}`);
        document.location.reload();
    });
</script>
