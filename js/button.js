var count = 0;
document.getElementById("myButton").onclick = function() {
    count++;
    if (count % 2 == 0) {
        document.getElementById("demo").innerHTML = "";
    } else {
    var img = document.createElement("img");
    img.src = "https://media.wired.com/photos/644318b17b25a434b1f3bbd7/master/w_1920,c_limit/security_hacker_names.jpg";
    document.getElementById("demo").appendChild(img);
    }
}