function myFunction(printpart) {
     var printContents = document.getElementById(printpart).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}