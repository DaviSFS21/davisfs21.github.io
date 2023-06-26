//Efeito em JS na class .title
var textWrapper = document.querySelector('.title');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: false})
  .add({
    targets: '.title .letter',
    translateX: [-40,0],
    translateY: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1200,
    delay: (el, i) => 500 + 30 * i
  });

/* Script para o botão back to top */

var btn = $('#back-top');
var divDeReferencia = $('#sobre');

$(window).scroll(function() {
  var posicaoDivReferencia = divDeReferencia.offset().top;
  var posicaoScroll = $(window).scrollTop();

  if (posicaoScroll > posicaoDivReferencia) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
