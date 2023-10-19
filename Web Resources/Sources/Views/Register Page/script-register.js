var fecha = new Date();
var day = document.getElementById("inputbox-day")
var month = document.getElementById("inputbox-month")
var year= document.getElementById("inputbox-year")
var email = document.getElementById("email")
var password= document.getElementById("password")

// Este evento input sirve para limitar  el rango de numeros
// Este evento click para que inice el input

day.addEventListener("input", function(){
    let dayInt = parseInt(day.value)
    if(dayInt > 31 || dayInt <=0 ){
        day.value="1"
    }
})

day.addEventListener("click", function(){
    if(day.value===""){
        day.value="1"
    }
})
month.addEventListener("input", function(){
    let monthInt = parseInt(month.value)
    if(monthInt > 12 || monthInt <= 0 ){
        month.value="1"
    }
})
month.addEventListener("click", function(){
    if(month.value===""){
        month.value="1"
    }
})

year.addEventListener("click", function(){
    if(year.value===""){
        year.value="1970"
    }
})
year.addEventListener("input", function(){
    let Datenow=new Date().getFullYear();
    let yearInt = parseInt(year.value)
    if(yearInt > Datenow || yearInt < 1970 ){
        year.value="1970"
    }
})