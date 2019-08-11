
function hideDivOnLoad() {
    var x = document.getElementById("thursdaySession");
    var y = document.getElementById("fridaySession");
    x.style.display = "block";
    y.style.display = "none";
}

function hideFridayDiv(){
    document.getElementById("thursdaySession").style.display= "block";
    document.getElementById("fridaySession").style.display= "none";
}
function hideThrusdayDiv() {
    document.getElementById("thursdaySession").style.display= "none";
    document.getElementById("fridaySession").style.display= "block";
}