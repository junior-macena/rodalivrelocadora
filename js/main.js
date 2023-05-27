$('.slider-principal').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true,
  autoplay: true,
  autoplaySpeed: 7000
});

window.addEventListener('beforeunload', function (event) {
  event.preventDefault();
  window.scrollTo(0, 0);
});


function formatarDecimal(input) {
  // Remove todos os caracteres não numéricos
  var valor = input.value.replace(/\D/g, '');

  // Formata o valor para exibir o formato decimal (2 casas decimais)
  var valorFormatado = (parseFloat(valor) / 100).toFixed(2);

  input.value = valorFormatado;
}
