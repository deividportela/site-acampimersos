/* MENU RESPONSIVO */

const btnMenu = document.getElementById('botao-hamburguer');
const btnFechar = document.getElementById('botao-fechar')
const fecharMenu = document.querySelector('#menu')

function toggleMenu() {
    const nav = document.getElementById('nav');
    nav.classList.toggle('active')
}

btnMenu.addEventListener('click', toggleMenu);
btnFechar.addEventListener('click', toggleMenu);
fecharMenu.addEventListener('click', toggleMenu);


/* MOSTRAR FORMULÁRIO PELO BOTÃO INSCREVA-SE E FECHAR FORMULÁRIO */

const abrir = document.getElementById('abrir');
const abrir2 = document.getElementById('abrir2');
const modalTotal = document.getElementById('modal-total');
const fechar = document.getElementById('fechar');


abrir.addEventListener('click', () => {
    document.getElementById('nome').setAttribute('required', "");
    document.getElementById('nascimento').setAttribute('required', "");
    document.getElementById('idade').setAttribute('required', "");
    document.getElementById('telefone').setAttribute('required', "");
    document.getElementById('endereco').setAttribute('required', "");
    document.getElementById('email').setAttribute('required', "");
    modalTotal.classList.add('show');
});

abrir2.addEventListener('click', () => {
    document.getElementById('nome').setAttribute('required', "");
    document.getElementById('nascimento').setAttribute('required', "");
    document.getElementById('idade').setAttribute('required', "");
    document.getElementById('telefone').setAttribute('required', "");
    document.getElementById('endereco').setAttribute('required', "");
    document.getElementById('email').setAttribute('required', "");
    modalTotal.classList.add('show');
});

fechar.addEventListener('click', () => {
    document.getElementById('nome').removeAttribute('required');
    document.getElementById('nascimento').removeAttribute('required');
    document.getElementById('idade').removeAttribute('required');
    document.getElementById('telefone').removeAttribute('required');
    document.getElementById('endereco').removeAttribute('required');
    document.getElementById('email').removeAttribute('required');
    modalTotal.classList.remove('show');
});


/* MOSTRAR AVISO FORMULÁRIO (SE MENOR 18) */

function mostraAviso (idade) {
    var avisoMenores = document.getElementById('form-aviso-menores');
    if (idade.value < 18) {
        avisoMenores.style.display = 'block';
    }
    else {
        avisoMenores.style.display = 'none';
    }
}

/* DESCOBRIR SE É DA PIB EM VISTA ALEGRE */

function membro(x) {
    if (x == 0) document.getElementById("form-visitante").style.display = "none";
    else document.getElementById("form-visitante").style.display = "block";
    return;
}

/* DESCOBRIR SE É DE OUTRA IGREJA / VISITANTE */
function visitante(x) {
    if (x == 1) document.getElementById("form-visitante-qual-igreja").style.display = "none";
    else document.getElementById("form-visitante-qual-igreja").style.display = "block";
    return;
}

/* DESCOBRIR SE TEM ALERGIA */
function alergia(x) {
    if (x == 1) document.getElementById("form-alergia-qual-medicamento").style.display = "none";
    else document.getElementById("form-alergia-qual-medicamento").style.display = "block";
    return;
}

/* SCROOL SUAVE (https://github.com/tigercodes-io) */ 
const menuLinks = document.querySelectorAll('#nav a[href^="#"]');

function getDistanceFromTheTop(element) {
  const id = element.getAttribute("href");
  return document.querySelector(id).offsetTop;
}


function scrollToSection(event) {
  event.preventDefault();
  const distanceFromTheTop = getDistanceFromTheTop(event.target);
  smoothScrollTo(0, distanceFromTheTop);
}

menuLinks.forEach((link) => {
  link.addEventListener("click", scrollToSection);
});

function smoothScrollTo(endX, endY, duration) {
  const startX = window.scrollX || window.pageXOffset;
  const startY = window.scrollY || window.pageYOffset;
  const distanceX = endX - startX;
  const distanceY = endY - startY;
  const startTime = new Date().getTime();

  duration = typeof duration !== "undefined" ? duration : 400;

  const easeInOutQuart = (time, from, distance, duration) => {
    if ((time /= duration / 2) < 1)
      return (distance / 2) * time * time * time * time + from;
    return (-distance / 2) * ((time -= 2) * time * time * time - 2) + from;
  };

  const timer = setInterval(() => {
    const time = new Date().getTime() - startTime;
    const newX = easeInOutQuart(time, startX, distanceX, duration);
    const newY = easeInOutQuart(time, startY, distanceY, duration);
    if (time >= duration) {
      clearInterval(timer);
    }
    window.scroll(newX, newY);
  }, 1000 / 60);
}

/* VOLTAR AO TOPO SUAVE */
const toTop = document.getElementById('link-topo');

window.addEventListener('scroll', () => {
  if (window.pageYOffset > 100) {
    toTop.classList.add('active');
  } else {
    toTop.classList.remove('active');
  }
})
