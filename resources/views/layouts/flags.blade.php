<style>
    .flags {

    }
    .english {
        background: url("{{asset('assets/img/english.jpeg')}}") no-repeat;
        background-size: cover;
        transform: translateX(-10px) skewX(5deg);
    }
    .turkey {
        background: url("{{asset('assets/img/turkey.jpeg')}}") no-repeat;
        background-size: cover;
        transform: skewX(5deg);
    }
    .russian {
        background: url("{{asset('assets/img/russia.jpeg')}}") no-repeat;
        background-size: cover;
        transform: translateX(10px) skewX(5deg);
    }
</style>

<div class="col-4 p-0 d-flex">
    <div class="english flags col-10 w-100 h-100"></div>
</div>

<div class="col-4 p-0 d-flex">
    <div class="col-1"></div>
    <div class="turkey  flags col-10 w-100 h-100"></div>
    <div class="col-1"></div>
</div>

<div class="col-4 p-0 d-flex">
    <div class="col-2 h-100 "></div>
    <div class="russian flags col-10 w-100 h-100"></div>
</div>

<script>
    document.onload = function () {
        
    }
</script>
