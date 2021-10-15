<script>
    $( document ).ready(function() {
        
        pcFunction('formBirthDate','extra');
        pcFunction('formprojectDate','extra2');
     });

     //function
     function pcFunction(type, extra) {
        var objCal1 = new AMIB.persianCalendar(type, {
            extraInputID: extra,
            extraInputFormat: "YYYYMMDD"
        });
    }

</script>

<?php /**PATH /home/emzaapp1/mysite/resources/views/scripts/date.blade.php ENDPATH**/ ?>