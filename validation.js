let alertMsg = document.querySelector("#alert")
alertMsg.style.opacity = 0
let inputCheck = document.querySelectorAll(".check")
let submitBtn = document.querySelector("#submit")

let fname = document.querySelector(".fname")
let lname = document.querySelector(".lname")
let mail = document.querySelector(".mail")
let web = document.querySelector(".web")
let addres = document.querySelector(".addres")

submitBtn.addEventListener("click",(e)=>{
    if(fname.value !="" && lname.value !="" && mail.value != "" && web.value !="" && addres.value !=""){
        alertMsg.style.opacity = 1
        setTimeout(()=>{
            alertMsg.style.opacity = 0
        },1500)
    }else{
        e.preventDefault();
        alert("Please enter value")
    }
})
