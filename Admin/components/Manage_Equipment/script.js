function update(){
    var price = document.getElementById("e_price").value;
    var qty = document.getElementById("e_qty").value;
    var id = document.getElementById("e_id").value;
    var ac = document.getElementById("ac").value;

    var f = new FormData();
    f.append("price",price);
    f.append("qty",qty);
    f.append("id",id);
    f.append("ac",ac);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function (){
        if( r.readyState == 4){
            var t = r.responseText;
            if(t == "success"){
                window.location.reload();
                alert(t);
            }
        }
    }

    r.open("POST","updateEq.php",true);
    r.send(f);
}

