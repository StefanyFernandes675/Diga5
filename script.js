let btn = document.getElementById("play");

btn.onclick = function () {
  aleatorio = Math.floor(Math.random() * 7);
  document.getElementsByTagName('h3')[0].innerHTML = "Seu número é: " + aleatorio;
}