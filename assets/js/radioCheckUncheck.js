function checkUncheck() {
    alert("hi");
    document.querySelectorAll("INPUT[type='radio']").forEach(function (rd) {
        rd.addEventListener("mousedown", function () {
            if (this.checked) {
                this.onclick = function () {
                    this.checked = false
                }
            } else {
                this.onclick = null
            }
        })
    })
}