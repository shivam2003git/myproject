
let name=document.getElementsByClassName(".name");
let num=document.getElementsByClassName(".num");
let total=document.getElementById("#total");

let menu=document.querySelector("#menu");
let navbar=document.querySelector(".navbar");

menu.addEventListener("click",function(){
    menu.classList.toggle("active");
    navbar.classList.toggle("active");
});

let videoBtn=document.querySelectorAll(".vid-btn");
let video=document.querySelector(".video-container video");
let controls=document.querySelector(".controls");

videoBtn.forEach(btn=>{
    btn.addEventListener("click",()=>{
        video.src=btn.getAttribute("data-src");
        controls.classList.add("active");
        videoBtn.forEach(vidBtn=>{
            vidBtn.classList.remove("active");
        });
        btn.classList.add("active");
    });
});


