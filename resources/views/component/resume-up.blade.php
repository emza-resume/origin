<body style="background:url({{ $getbases->Background }})">

@include('component.resumex-up.name')

@include('component.resumex-up.gender')

@include('component.resumex-up.birthdate')

@include('component.resumex-up.call')

<div class="d-flex m-5" style="position: relative;top: -54px;">
    <div class="p-2 flex-fill">
        @include('component.resumex-up.academic')
        <div class="p-2 flex-fill">
            @include('component.resumex-up.cources')
            <div class="p-2 flex-fill">
                @include('component.resumex-up.work')
            </div>
        </div>
        <div class="d-flex m-5" style="position: relative;top: -90px;">
            <div class="p-2 flex-fill">
                @include('component.resumex-up.lang')

                @include('component.resumex-up.thesis')

            </div>
            <div class="p-2 flex-fill">

                @include('component.resumex-up.project')

            </div>

        </div>
        
        @include('component.resumex-up.skill')
        
    </div>


</div>

    
</body>