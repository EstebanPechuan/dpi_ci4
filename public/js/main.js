//  Sección Servicios / Tablas -> Desplegables

const desplegables = document.querySelectorAll('.cada-servicio')

desplegables.forEach(item => {
    item.addEventListener('click', () => {
        console.log(item);
        // console.log(item.children[4]);
        item.children[2].classList.toggle('serv-descripcion-click')
        item.children[3].classList.toggle('flecha-ver-mas-click')
    })
});