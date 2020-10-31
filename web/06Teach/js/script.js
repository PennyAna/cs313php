$('#scriptureform').on('submit', function(e) {
    e.preventDefault();

    let data = "";
    book = document.getElementById('book').value;
    chapter = document.getElementById('chapter').value;
    verse = document.getElementById('verseFrom').value;
    content = document.getElementById('content').value;
    let listTopics = [];
    $('.topics').each(function (index, obj) {
        if(obj.checked == true)
        {
            listTopics.push(obj.value);
        }
    })    
    
    //add to string
    data = "book=" + book +
            "&chapter=" + chapter + 
            "&verse=" + verse + 
            "&content=" + content +
            "&topics=" + JSON.stringify(listTopics);        

    var XHTTP;
    XHTTP = new XMLHttpRequest();
    XHTTP.open('POST','./db_update.php',true);
    XHTTP.setRequestHeader('Content-type','applicaiton/x-www-form-urlencoded');
    XHTTP.onreadystatechange = function(){        
        if (XHTTP.readyState == 4 && XHTTP.status == 200)
        {
            alert("We have made contact");
        }
        else{
            //if failfure
        }
    };    
    XHTTP.send(data);
});