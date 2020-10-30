//shop_browse.php
document.getElementsByName("price[]").onchange = checkTotal();
document.getElementsByName("")
function checkTotal() {
    var table = document.getElementById("buyForm0");
    var checks = table.getElementsByTagName("input");
    var sum = 0;
    for (i=0; i < checks.length; i++) {
        if (checks[i].checked) {
            sum = sum + parseFloat(checks[i].value);
        }
    }
    document.getElementById("totalNum").innerHTML = sum.toFixed(2);
    document.getElementById("totalNum").value = sum.toFixed(2);
}  
//shop_cart.php
/* function checkTotal() {
    var table = document.getElementById("buyForm0");
    var checks = table.getElementsByTagName("input");
    var sum = 0;
    for (i=0; i < checks.length; i++) {
        if (checks[i].checked) {
            sum = sum + parseFloat(checks[i].value);
        }
    }
    document.getElementById("totalNum").innerHTML = sum.toFixed(2);
    document.getElementById("totalNum").value = sum.toFixed(2);
}            */
//shop_checkout.php

//shop_confirm.php
