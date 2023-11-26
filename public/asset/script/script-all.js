var tmenu = document.getElementById('tombol-menu');
var lmenu = document.getElementById('menu');
var cmenu = document.getElementById('tutup-menu');

tmenu.onclick = function() {
  lmenu.classList.add('active');
};
cmenu.onclick = function() {
  lmenu.classList.remove('active');
};

var onlyOnce = true;

window.onscroll = function() {
  tourstart();

  var fadescroll = document.getElementsByClassName('fadescroll');
  for (var i = 0; i < fadescroll.length; ++i) {
    let item = fadescroll[i];  
    item.style.opacity = 1 - window.scrollY / (window.innerHeight * 0.75);
  }

  var fadescrollHEAD = document.getElementsByClassName('fadescroll-h');
  for (var i = 0; i < fadescrollHEAD.length; ++i) {
    let itemHEAD = fadescrollHEAD[i];  
    itemHEAD.style.opacity = window.scrollY / window.innerHeight;
  }
};

function tourstart() {
  if (onlyOnce === true) {
    var lazys = document.getElementsByClassName('lazys');
    for (var i = 0; i < lazys.length; ++i) {
      let e = lazys[i];  
      e.src = e.getAttribute("data-src");
    }
      
  };
  onlyOnce = false;};

const slider = document.querySelector('.items');
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', (e) => {
  isDown = true;
  slider.classList.add('active');
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
});
slider.addEventListener('mouseleave', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mouseup', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mousemove', (e) => {
  if(!isDown) return;
  e.preventDefault();
  const x = e.pageX - slider.offsetLeft;
  const walk = (x - startX) * 3;
  slider.scrollLeft = scrollLeft - walk;
  console.log(walk);
});