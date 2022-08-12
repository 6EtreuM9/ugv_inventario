function confirmacion(e){

    if (confirm("Seguro que desea eliminar el registro?")){
        return true;
    } else{
        e.preventDefault();        
    }
}

let linkDelet = document.querySelectorAll('.tooltip');
for (let i = 0; i < linkDelet.length; i++) {
    linkDelet[i].addEventListener('click', confirmacion)
    
}