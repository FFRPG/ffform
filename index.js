document.getElementById("soushin").onclick = function() {
    const Dname = document.getElementById("Dname").value;
    const Mname = document.getElementById("Mname").value;
    const youken = document.getElementById("youken").value;
    const naiyou = document.getElementById("naiyou").value;

    var flag = 0;
    if(Dname.length == 0){flag = 1;}
    if(Mname.length == 0){ flag = 1; }
    if(youken.length == 0){ flag = 1; }
    if(naiyou.length == 0){ flag = 1; }

    if(flag == 1){ alert('必須項目が未記入の箇所があります'); }
};