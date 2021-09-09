const d = new Date();
console.log(d.getDate());
document.getElementById(String(d.getDate())).classList.add("active")