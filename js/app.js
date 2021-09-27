let gpa1 = document.getElementById('gpa1');
let gpa2 = document.getElementById('gpa2');
let gpa3 = document.getElementById('gpa3');
let gpa4 = document.getElementById('gpa4');
let gpa5 = document.getElementById('gpa5');
let gpa6 = document.getElementById('gpa6');
let gpa7 = document.getElementById('gpa7');
let gpa8 = document.getElementById('gpa8');
var cgpa = 0;

let show = document.getElementById("cgpa");

function calcCGPA() {
	cgpa = gpa1.value * 0.05;
	cgpa += gpa2.value * 0.05;
	cgpa += gpa3.value * 0.05;
	cgpa += gpa4.value * 0.15;
	cgpa += gpa5.value * 0.15;
	cgpa += gpa6.value * 0.20;
	cgpa += gpa7.value * 0.25;
	cgpa += gpa8.value * 0.10;

	show.innerHTML = "<div class='alert alert-success text-center'>Your CGPA is : <strong >"+cgpa+"</strong></div>";
}