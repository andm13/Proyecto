window.document.onkeydown = tecla;
var posiciony = 0;
var y = 20;
var posicionx = 0;
var randomx;
var randomy;
var x = 20;
var cola = 1;
var v = 2;
var divi = document.body.getElementsByTagName('div');
var tempo;
var Tenter = 0;
var randomcom;
//Funcion movimiento
function mov() {
    movCulebra();
    document.all.div0.style.top = y = y + posiciony;
    document.all.div0.style.left = x = x + posicionx;
    if (y + 'px' == divi[cola].style.top && x + 'px' == divi[cola].style.left) {
        Random();
    }
    if (y / 20 < 0 || y / 20 > 24) {
        fin();
    }
    if (x / 20 < 0 || x / 20 > 24) {
        fin();
    }
    for (i = 2; i < cola - 1; i++) {
        if (y + 'px' == divi[i].style.top && x + 'px' == divi[i].style.left) {
            fin();
        }
    }
}
// Funcion tecla para movimiento
function tecla() {
    switch (window.event.keyCode) {
        case 13://ENTER
            if (Tenter == 0) {
                Random();
                tempo = window.setInterval('mov()', 60);
                posicionx = 20;
                posiciony = 0;
                Tenter = 2;
            }
            else if (Tenter == 1) {
                tempo = window.setInterval('mov()', 60);
                Tenter = 2;
            }
            break;
        case 37://flecha izquierda
            if (posicionx == 0) {
                posiciony = 0;
                posicionx = -20;
            }
            break;
        case 38://flecha arriba
            if (posiciony == 0) {
                posiciony = -20;
                posicionx = 0;
            }
            break;
        case 39://flecha derecha
            if (posicionx == 0) {
                posiciony = 0;
                posicionx = 20;
            }
            break;
        case 40://flechaabajo
            if (posiciony == 0) {
                posiciony = 20;
                posicionx = 0;
            }
            break;
        case 80://tecla p para pausar
            window.clearInterval(tempo);
            Tenter = 1;
            break;
        case 67://tecla c para aumentar uno a la cola
            Random();
            break;
    }
}
//FUNCION RANDOM--
function Random() {
    cola = cola + 1;
    randomy = (Math.round(Math.random() * 24));
    randomx = (Math.round(Math.random() * 24));
    document.all.area.insertAdjacentHTML("BeforeEnd", "<div id=div" + cola + " style = 'position:absolute;width:20;height:20;top:" + randomy * 20 + ";left:" + randomx * 20 + ";background-color:black'></div>");
}
//FUNCION MOVCULEBRA--
function movCulebra() {
    v = v + 1;
    if (v >= cola) {
        v = 2;
    }
    if (v < cola) {
        divi[v].style.left = x;
        divi[v].style.top = y;
    }
}
function fin() {
    alert('Fin del juego');
    window.clearInterval(tempo);

}
