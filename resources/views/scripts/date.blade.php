<script>
    $( document ).ready(function() {
        {{-- edit-form-cv-fast-persian --}}
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

