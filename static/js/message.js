$(function(){
    let spans=document.querySelector('span');


    let a=document.querySelector('a');
    let t=setInterval(move,1000);
    function move(){
        spans.innerText-=1;
        if(spans.innerText==0){
           clearInterval(t);
           location.href=a.href;
        }
    }
})