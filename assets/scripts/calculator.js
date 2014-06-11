function val() {

gallons = document.form.a.value;
monthly = document.form.b.value;
now = ((3.899 * gallons) * monthly) * 1.10;
inslee = (((3.899 + 1.17) * gallons) * monthly) * 1.10;
change = inslee - now;
changeFixed = change.toFixed(2);
year = change * 12;

// 3.899 is the average price for gas in WA right now
// 1.17 is how much Inslee's plan is supposed to increase prices by per gallon
// Biofuels have about 10% less power, so you'll end up needing to buy 10% more to make up for it



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
