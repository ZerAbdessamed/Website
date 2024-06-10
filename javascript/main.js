let note=document.querySelectorAll(".numnot"),s=0;
let note1=document.querySelector("#note");
for(let i=0;i<note.length;i++){
if(parseFloat(note[i].textContent)<10){
    s++;
    note[i].style.color="red";
}else note[i].style.color="green"}
if(s>4)note1.style.color="red";
else{
    if(s==4)  note1.style.color="black";
    if(s<4) note1.style.color="green";
}  
let btn=document.querySelectorAll(".l");
btn[0].onclick=function(){
    window.close();
}

