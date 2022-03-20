//  Sección Servicios / Tablas -> Desplegables

const desplegables = document.querySelectorAll('.cada-servicio')

desplegables.forEach(item => {
    item.addEventListener('click', () => {
        item.children[2].classList.toggle('serv-descripcion-click')
        item.children[3].classList.toggle('flecha-ver-mas-click')
    })

    // Agregar o no flecha desplegable
    let anchoSpan = item.children[2].children[0].clientWidth
    let anchoPadre = item.children[2].clientWidth


    // console.log(anchoSpan);
    // console.log(anchoPadre);

    // Diferencia entre contenido y su padre (110 es el padding total)
    if (anchoSpan >= (anchoPadre - 110)) {
        item.children[3].classList.add('active')
        item.children[2].children[0].classList.add('display-inline')
    }
});
