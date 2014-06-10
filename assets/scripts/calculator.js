function val() {

gallons = document.form.a.value;
monthly = document.form.b.value;
now = (3.899 * gallons) * monthly;
inslee = ((3.899 + 1.17) * gallons) * monthly;
change = inslee - now;
changeFixed = change.toFixed(2);
year = change * 12;

document.getElementById("current").innerHTML = "$" + now.toFixed(2);
document.getElementById("future").innerHTML = "$" + inslee.toFixed(2);
document.getElementById("change").innerHTML = "$" + changeFixed;
document.getElementById("year").innerHTML = "$" + year.toFixed(2);


/*
SOURCES: 
http://www.washingtongasprices.com/
*/

}
window.onload = function() {
    document.getElementsByTagName("form")[0].onsubmit = function(evt) {
        evt.preventDefault();
        val()
    };
};
