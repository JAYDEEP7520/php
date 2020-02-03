function Hide_Other() {
    document.getElementById('other_info').style.display = "none";
}
function Show_Other() {
    if (document.getElementById('otherinfo').checked == true) {
        document.getElementById('other_info').style.display = "block";
    }
    else {
        document.getElementById('other_info').style.display = "none";
    }
}