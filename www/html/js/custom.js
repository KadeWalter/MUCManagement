function filterRoomNumbers() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("roomNumberSearch");
    filter = input.value;
    table = document.getElementById("room-search-table");
    tr = table.getElementsByTagName("tr");
    for(i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if(td){
            if(td.innerHTML.indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
function openTab(evt, tabName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("detailItem");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
       tablinks[i].className = tablinks[i].className.replace(" w3-border-blue", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.firstElementChild.className += " w3-border-blue";
  }