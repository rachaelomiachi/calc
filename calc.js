//this function clears all the values
function clearScreen() {
    document.getElementById("result").value = "";
}
//this function display values
function display (values) {
    document.getElementById("result").value += value;
}
//this function evaluates and returns result


function calculate() {
    var p = document.getElementById("result").value;
    var q = eval(p);
    document.getElementById("result").value = q

}
