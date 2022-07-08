let btn = document.getElementById("comecar");

btn.onclick=function(){
  console.log("apertado")
  let div = document.getElementById("page1");
  div.style.display="none";
}
  
/*let btn = document.getElementById("play");

btn.onclick = function () {
  aleatorio = Math.floor(Math.random() * 7);
  document.getElementsByTagName('h3')[0].innerHTML = "Seu número é: " + aleatorio;
}*/

// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);

// Escuta o evento resize
window.addEventListener('resize', () => {
  // Executa o mesmo script de antes
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});

