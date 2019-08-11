var visibleDiv=0;
function showDiv(){
    $(".session1").hide();
    $(".session1:eq("+ visibleDiv +")").show();
}
showDiv();

function showNext(){
if(visibleDiv == $(".session1").length-1){
    visibleDiv=0;
}
else{
    visibleDiv++;
}
showDiv();
}
function showPrev(){
    if(visibleDiv == 0){
        visibleDiv= $(".session1").length-1;
    }
    else{
        visibleDiv--;
    }
    showDiv();
}