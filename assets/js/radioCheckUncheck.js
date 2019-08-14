function checkUncheck() {
    $("input:radio").on("click",function (e) {
        var inp=$(this); //cache the selector
        if (inp.is(".theone")) { //see if it has the selected class
            inp.prop("checked",false).removeClass("theone");
            return;
        }
        $("input:radio[name='"+inp.prop("name")+"'].theone").removeClass("theone");
        inp.addClass("theone");
    });
}