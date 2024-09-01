function addNew(){
    var price = document.getElementById("price").value;
    var name = document.getElementById("name").value;
    var qty = document.getElementById("qty").value;
    var type = document.getElementById("type").value;
    var stype = document.getElementById("stype").value;

    var f = new FormData();
    f.append("price",price);
    f.append("name",name);
    f.append("qty",qty);
    f.append("type",type);
    f.append("stype",stype);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if( r.readyState == 4){
            var t = r.responseText;
                alert(t);
                
        }
    }

    r.open("POST","addNewEq.php",true);
    r.send(f);
}

