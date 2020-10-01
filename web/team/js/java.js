function clicked() {
    alert("Clicked!");
}

function colorDiv(color) {
    var color = document.getElementById("color").value;
    var div = document.getElementById("div1");
    div.style.background = color;
}

function colorDivJQ() {
    var color = $('#color2').val();
    $('#div2').css({'background-color':color});
}

function hide() {
    $('#div3').toggle(1000);

}