
function hideDivOnLoad() {
    var x = document.getElementById("input1");
    var y = document.getElementById("input2");
    x.style.display = "block";
    y.style.display = "none";
}

function hideFridayDiv(){
    document.getElementById("input1").style.display= "block";
    document.getElementById("input2").style.display= "none";
}
function hideThrusdayDiv() {
    document.getElementById("input1").style.display= "none";
    document.getElementById("input2").style.display= "block";
}