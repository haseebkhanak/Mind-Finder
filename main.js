let element=document.querySelector(".hamburger");
element.addEventListener("click",click1);
element.addEventListener("click",click2)

let isopen=false;

function click1()
{
   let x=document.getElementsByClassName("hamburger")[0];
   x.classList.toggle("change");
   isopen=!isopen;
}

function click2()
{
    if(isopen===true)
    {
        document.querySelector(".main").style.display="block";
    }

else
    {
        document.querySelector(".main").style.display="none";
    }
}