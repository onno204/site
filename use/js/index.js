function load_home() {
    document.getElementById("section").innerHTML = '<object type="text/html" data="use/home.php" style="width:100%; height: 100%;" ></object>';
    document.getElementById("selectedtext").innerHTML = "Home Page";
}function load_ranks() {
    document.getElementById("section").innerHTML = '<object type="text/html" data="use/ranks.php" style="width:100%; height: 100%;" ></object>';
    document.getElementById("selectedtext").innerHTML = "Ranks";
}function load_Dynmap() {
    document.getElementById("section").innerHTML = '<object type="text/html" data="use/dynmap.php" style="width:100%; height: 100%;" ></object>';
    document.getElementById("selectedtext").innerHTML = "Dynmap";
}function codeAddress() {
    document.getElementById("section").innerHTML = '<object type="text/html" data="use/home.php" style="width:100%; height: 100%;" ></object>';}
window.onload = codeAddress;
