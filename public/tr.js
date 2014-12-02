var GT = {
    "tr": function(id) {
        var xht;
        if(window.XMLHttpRequest) {
            xht = new XMLHttpRequest();
        } else {
            xht = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xht.open("POST", "//tr.thegeneration.se/track", true);
        xht.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xht.send("id="+id);
    }
};