<script>
    $(document).ready(function(){
        var fws = $("#formwrittingskill").val();
        if(fws == 0)
        {
            $("#sw-1").attr("src","{{ asset('img/star-null.png') }}");
            $("#sw-2").attr("src","{{ asset('img/star-null.png') }}");
            $("#sw-3").attr("src","{{ asset('img/star-null.png') }}");
            $("#sw-4").attr("src","{{ asset('img/star-null.png') }}");
            $("#sw-5").attr("src","{{ asset('img/star-null.png') }}");
            var nfw = 0;

        }
        for(var i=1;i<6;i++)
        {
            if(nfw != 0)
            {
                $("#sw-"+i).attr("src","{{ asset('img/star.png') }}");

            }

            if(fws == i)
            {
                break;
            }

        }

    });
    $(document).ready(function(){
        var fws = $("#formreadingskill").val();
        if(fws == 0)
        {
            $("#sr-1").attr("src","{{ asset('img/star-null.png') }}");
            $("#sr-2").attr("src","{{ asset('img/star-null.png') }}");
            $("#sr-3").attr("src","{{ asset('img/star-null.png') }}");
            $("#sr-4").attr("src","{{ asset('img/star-null.png') }}");
            $("#sr-5").attr("src","{{ asset('img/star-null.png') }}");
            var nfw = 0;

        }
        for(var i=1;i<6;i++)
        {
            if(nfw != 0)
            {
                $("#sr-"+i).attr("src","{{ asset('img/star.png') }}");

            }

            if(fws == i)
            {
                break;
            }

        }

    });
    var statusOverSW = 0;
    $('#sw-1').click(function(){
        $("#formwrittingskill").val('1');
        statusOverSW = 1;
        $("#sw-1").attr("src","{{ asset('img/star.png') }}");
        $("#sw-2").attr("src","{{ asset('img/star-null.png') }}");
        $("#sw-3").attr("src","{{ asset('img/star-null.png') }}");
        $("#sw-4").attr("src","{{ asset('img/star-null.png') }}");
        $("#sw-5").attr("src","{{ asset('img/star-null.png') }}");
    });
    $('#sw-2').click(function(){
        $("#formwrittingskill").val('2');
        statusOverSW = 1;
        $("#sw-1").attr("src","{{ asset('img/star.png') }}");
        $("#sw-2").attr("src","{{ asset('img/star.png') }}");
        $("#sw-3").attr("src","{{ asset('img/star-null.png') }}");
        $("#sw-4").attr("src","{{ asset('img/star-null.png') }}");
        $("#sw-5").attr("src","{{ asset('img/star-null.png') }}");
    });
    $('#sw-3').click(function(){
        $("#formwrittingskill").val('3');
        statusOverSW = 1;
        $("#sw-1").attr("src","{{ asset('img/star.png') }}");
        $("#sw-2").attr("src","{{ asset('img/star.png') }}");
        $("#sw-3").attr("src","{{ asset('img/star.png') }}");
        $("#sw-4").attr("src","{{ asset('img/star-null.png') }}");
        $("#sw-5").attr("src","{{ asset('img/star-null.png') }}");
    });
    $('#sw-4').click(function(){
        $("#formwrittingskill").val('4');
        statusOverSW = 1;
        $("#sw-1").attr("src","{{ asset('img/star.png') }}");
        $("#sw-2").attr("src","{{ asset('img/star.png') }}");
        $("#sw-3").attr("src","{{ asset('img/star.png') }}");
        $("#sw-4").attr("src","{{ asset('img/star.png') }}");
        $("#sw-5").attr("src","{{ asset('img/star-null.png') }}");
    });
    $('#sw-5').click(function(){
        $("#formwrittingskill").val('5');
        statusOverSW = 1;
        $("#sw-1").attr("src","{{ asset('img/star.png') }}");
        $("#sw-2").attr("src","{{ asset('img/star.png') }}");
        $("#sw-3").attr("src","{{ asset('img/star.png') }}");
        $("#sw-4").attr("src","{{ asset('img/star.png') }}");
        $("#sw-5").attr("src","{{ asset('img/star.png') }}");
    });
    $('#sw-1').hover(function(){
        $("#sw-1").attr("src","{{ asset('img/star.png') }}");
        $("#sw-2").attr("src","{{ asset('img/star-null.png') }}");
        $("#sw-3").attr("src","{{ asset('img/star-null.png') }}");
        $("#sw-4").attr("src","{{ asset('img/star-null.png') }}");
        $("#sw-5").attr("src","{{ asset('img/star-null.png') }}");
    });

    $('#sw-2').hover(function(){

        $("#sw-1").attr("src","{{ asset('img/star.png') }}");
        $("#sw-2").attr("src","{{ asset('img/star.png') }}");
        $("#sw-3").attr("src","{{ asset('img/star-null.png') }}");
        $("#sw-4").attr("src","{{ asset('img/star-null.png') }}");
        $("#sw-5").attr("src","{{ asset('img/star-null.png') }}");
    });
    $('#sw-3').hover(function(){
        $("#sw-1").attr("src","{{ asset('img/star.png') }}");
        $("#sw-2").attr("src","{{ asset('img/star.png') }}");
        $("#sw-3").attr("src","{{ asset('img/star.png') }}");
        $("#sw-4").attr("src","{{ asset('img/star-null.png') }}");
        $("#sw-5").attr("src","{{ asset('img/star-null.png') }}");
    });
    $('#sw-4').hover(function(){
        $("#sw-1").attr("src","{{ asset('img/star.png') }}");
        $("#sw-2").attr("src","{{ asset('img/star.png') }}");
        $("#sw-3").attr("src","{{ asset('img/star.png') }}");
        $("#sw-4").attr("src","{{ asset('img/star.png') }}");
        $("#sw-5").attr("src","{{ asset('img/star-null.png') }}");
    });
    $('#sw-5').hover(function(){
        $("#sw-1").attr("src","{{ asset('img/star.png') }}");
        $("#sw-2").attr("src","{{ asset('img/star.png') }}");
        $("#sw-3").attr("src","{{ asset('img/star.png') }}");
        $("#sw-4").attr("src","{{ asset('img/star.png') }}");
        $("#sw-5").attr("src","{{ asset('img/star.png') }}");
    });
    $('#m-leave').mouseleave(function(){
        $("#sw-1").attr("src","{{ asset('img/star-null.png') }}");
        $("#sw-2").attr("src","{{ asset('img/star-null.png') }}");
        $("#sw-3").attr("src","{{ asset('img/star-null.png') }}");
        $("#sw-4").attr("src","{{ asset('img/star-null.png') }}");
        $("#sw-5").attr("src","{{ asset('img/star-null.png') }}");
    });
    $('#m-leave').mouseleave(function(){
        var indexw = $("#formwrittingskill").val();
        var g = 5;
        for(var i=0;i<indexw;i++)
        {
        }
        g = g - i;
        if(g == 0)
        {
            $("#sw-1").attr("src","{{ asset('img/star.png') }}");
            $("#sw-2").attr("src","{{ asset('img/star.png') }}");
            $("#sw-3").attr("src","{{ asset('img/star.png') }}");
            $("#sw-4").attr("src","{{ asset('img/star.png') }}");
            $("#sw-5").attr("src","{{ asset('img/star.png') }}");
        }
        if(g == 1)
        {
            $("#sw-1").attr("src","{{ asset('img/star.png') }}");
            $("#sw-2").attr("src","{{ asset('img/star.png') }}");
            $("#sw-3").attr("src","{{ asset('img/star.png') }}");
            $("#sw-4").attr("src","{{ asset('img/star.png') }}");
            $("#sw-5").attr("src","{{ asset('img/star-null.png') }}");
        }
        if(g == 2)
        {
            $("#sw-1").attr("src","{{ asset('img/star.png') }}");
            $("#sw-2").attr("src","{{ asset('img/star.png') }}");
            $("#sw-3").attr("src","{{ asset('img/star.png') }}");
            $("#sw-4").attr("src","{{ asset('img/star-null.png') }}");
            $("#sw-5").attr("src","{{ asset('img/star-null.png') }}");
        }
        if(g == 3)
        {
            $("#sw-1").attr("src","{{ asset('img/star.png') }}");
            $("#sw-2").attr("src","{{ asset('img/star.png') }}");
            $("#sw-3").attr("src","{{ asset('img/star-null.png') }}");
            $("#sw-4").attr("src","{{ asset('img/star-null.png') }}");
            $("#sw-5").attr("src","{{ asset('img/star-null.png') }}");
        }
        if(g == 4)
        {
            $("#sw-1").attr("src","{{ asset('img/star.png') }}");
            $("#sw-2").attr("src","{{ asset('img/star-null.png') }}");
            $("#sw-3").attr("src","{{ asset('img/star-null.png') }}");
            $("#sw-4").attr("src","{{ asset('img/star-null.png') }}");
            $("#sw-5").attr("src","{{ asset('img/star-null.png') }}");
        }
    });


</script>
<script>
var statusOverSR = 0;
$('#sr-1').click(function(){
    $("#formreadingskill").val('1');
    statusOverSR = 1;
    $("#sr-1").attr("src","{{ asset('img/star.png') }}");
    $("#sr-2").attr("src","{{ asset('img/star-null.png') }}");
    $("#sr-3").attr("src","{{ asset('img/star-null.png') }}");
    $("#sr-4").attr("src","{{ asset('img/star-null.png') }}");
    $("#sr-5").attr("src","{{ asset('img/star-null.png') }}");
});
$('#sr-2').click(function(){
    $("#formreadingskill").val('2');
    statusOverSR = 1;
    $("#sr-1").attr("src","{{ asset('img/star.png') }}");
    $("#sr-2").attr("src","{{ asset('img/star.png') }}");
    $("#sr-3").attr("src","{{ asset('img/star-null.png') }}");
    $("#sr-4").attr("src","{{ asset('img/star-null.png') }}");
    $("#sr-5").attr("src","{{ asset('img/star-null.png') }}");
});
$('#sr-3').click(function(){
    $("#formreadingskill").val('3');
    statusOverSR = 1;
    $("#sr-1").attr("src","{{ asset('img/star.png') }}");
    $("#sr-2").attr("src","{{ asset('img/star.png') }}");
    $("#sr-3").attr("src","{{ asset('img/star.png') }}");
    $("#sr-4").attr("src","{{ asset('img/star-null.png') }}");
    $("#sr-5").attr("src","{{ asset('img/star-null.png') }}");
});
$('#sr-4').click(function(){
    $("#formreadingskill").val('4');
    statusOverSR = 1;
    $("#sr-1").attr("src","{{ asset('img/star.png') }}");
    $("#sr-2").attr("src","{{ asset('img/star.png') }}");
    $("#sr-3").attr("src","{{ asset('img/star.png') }}");
    $("#sr-4").attr("src","{{ asset('img/star.png') }}");
    $("#sr-5").attr("src","{{ asset('img/star-null.png') }}");
});
$('#sr-5').click(function(){
    $("#formreadingskill").val('5');
    statusOverSR = 1;
    $("#sr-1").attr("src","{{ asset('img/star.png') }}");
    $("#sr-2").attr("src","{{ asset('img/star.png') }}");
    $("#sr-3").attr("src","{{ asset('img/star.png') }}");
    $("#sr-4").attr("src","{{ asset('img/star.png') }}");
    $("#sr-5").attr("src","{{ asset('img/star.png') }}");
});
$('#sr-1').hover(function(){
    $("#sr-1").attr("src","{{ asset('img/star.png') }}");
    $("#sr-2").attr("src","{{ asset('img/star-null.png') }}");
    $("#sr-3").attr("src","{{ asset('img/star-null.png') }}");
    $("#sr-4").attr("src","{{ asset('img/star-null.png') }}");
    $("#sr-5").attr("src","{{ asset('img/star-null.png') }}");
});

$('#sr-2').hover(function(){
    $("#sr-1").attr("src","{{ asset('img/star.png') }}");
    $("#sr-2").attr("src","{{ asset('img/star.png') }}");
    $("#sr-3").attr("src","{{ asset('img/star-null.png') }}");
    $("#sr-4").attr("src","{{ asset('img/star-null.png') }}");
    $("#sr-5").attr("src","{{ asset('img/star-null.png') }}");
});
$('#sr-3').hover(function(){
    $("#sr-1").attr("src","{{ asset('img/star.png') }}");
    $("#sr-2").attr("src","{{ asset('img/star.png') }}");
    $("#sr-3").attr("src","{{ asset('img/star.png') }}");
    $("#sr-4").attr("src","{{ asset('img/star-null.png') }}");
    $("#sr-5").attr("src","{{ asset('img/star-null.png') }}");
});
$('#sr-4').hover(function(){
    $("#sr-1").attr("src","{{ asset('img/star.png') }}");
    $("#sr-2").attr("src","{{ asset('img/star.png') }}");
    $("#sr-3").attr("src","{{ asset('img/star.png') }}");
    $("#sr-4").attr("src","{{ asset('img/star.png') }}");
    $("#sr-5").attr("src","{{ asset('img/star-null.png') }}");
});
$('#sr-5').hover(function(){
    $("#sr-1").attr("src","{{ asset('img/star.png') }}");
    $("#sr-2").attr("src","{{ asset('img/star.png') }}");
    $("#sr-3").attr("src","{{ asset('img/star.png') }}");
    $("#sr-4").attr("src","{{ asset('img/star.png') }}");
    $("#sr-5").attr("src","{{ asset('img/star.png') }}");
});
$('#m-leave-2').mouseleave(function(){
    $("#sr-1").attr("src","{{ asset('img/star-null.png') }}");
    $("#sr-2").attr("src","{{ asset('img/star-null.png') }}");
    $("#sr-3").attr("src","{{ asset('img/star-null.png') }}");
    $("#sr-4").attr("src","{{ asset('img/star-null.png') }}");
    $("#sr-5").attr("src","{{ asset('img/star-null.png') }}");
});

$('#m-leave-2').mouseleave(function(){
    var indexr = $("#formreadingskill").val();
    var z = 5;
    for(var j=0;j<indexr;j++)
    {
    }
    z = z - j;
    if(z == 0)
    {
        $("#sr-1").attr("src","{{ asset('img/star.png') }}");
        $("#sr-2").attr("src","{{ asset('img/star.png') }}");
        $("#sr-3").attr("src","{{ asset('img/star.png') }}");
        $("#sr-4").attr("src","{{ asset('img/star.png') }}");
        $("#sr-5").attr("src","{{ asset('img/star.png') }}");
    }
    if(z == 1)
    {
        $("#sr-1").attr("src","{{ asset('img/star.png') }}");
        $("#sr-2").attr("src","{{ asset('img/star.png') }}");
        $("#sr-3").attr("src","{{ asset('img/star.png') }}");
        $("#sr-4").attr("src","{{ asset('img/star.png') }}");
        $("#sr-5").attr("src","{{ asset('img/star-null.png') }}");
    }
    if(z == 2)
    {
        $("#sr-1").attr("src","{{ asset('img/star.png') }}");
        $("#sr-2").attr("src","{{ asset('img/star.png') }}");
        $("#sr-3").attr("src","{{ asset('img/star.png') }}");
        $("#sr-4").attr("src","{{ asset('img/star-null.png') }}");
        $("#sr-5").attr("src","{{ asset('img/star-null.png') }}");
    }
    if(z == 3)
    {
        $("#sr-1").attr("src","{{ asset('img/star.png') }}");
        $("#sr-2").attr("src","{{ asset('img/star.png') }}");
        $("#sr-3").attr("src","{{ asset('img/star-null.png') }}");
        $("#sr-4").attr("src","{{ asset('img/star-null.png') }}");
        $("#sr-5").attr("src","{{ asset('img/star-null.png') }}");
    }
    if(z == 4)
    {
        $("#sr-1").attr("src","{{ asset('img/star.png') }}");
        $("#sr-2").attr("src","{{ asset('img/star-null.png') }}");
        $("#sr-3").attr("src","{{ asset('img/star-null.png') }}");
        $("#sr-4").attr("src","{{ asset('img/star-null.png') }}");
        $("#sr-5").attr("src","{{ asset('img/star-null.png') }}");
    }
});


</script>
