document.addEventListener('DOMContentLoaded', function(){

    var modal = document.querySelector(".custom-modal");
    var modalEditClientes = document.querySelector(".m-edit-clientes");
    var modaldeleteClientes = document.querySelector(".m-delete-clientes");

    
    /* cerrar modal*/
    document.querySelector('#btn-cerrar')
    .addEventListener('click',(e)=>{

        if(modal.classList.contains('fixed')){

                    modal.classList.remove('fixed');
                    modal.classList.add("hidden");
                    document.querySelector("#nombre").value= "";
                    document.querySelector("#dir").value = "";
        }
    }); 

    document.querySelector('#btn-cerrar2')
    .addEventListener('click',(e)=>{

        if(modalEditClientes.classList.contains('fixed')){

                    modalEditClientes.classList.remove('fixed');
                    modalEditClientes.classList.add("hidden");
                    document.querySelector("#nombre").value= "";
                    document.querySelector("#dir").value = "";
        }
    });

    document.querySelector('#btn-cerrar3')
    .addEventListener('click',(e)=>{

        if(modaldeleteClientes.classList.contains('fixed')){

                    modaldeleteClientes.classList.remove('fixed');
                    modaldeleteClientes.classList.add("hidden");
                   
        }
    });
    
    

// abrir modal clientes
document.querySelector('#agregarClientes')
.addEventListener('click',(e)=>{
    if(modal.classList.contains('hidden')){

        modal.classList.remove('hidden');
        modal.classList.add("fixed");
        document.querySelector("#activo").checked = true;
    }
});

//modal editar clientes
document.querySelector('#editarClientes')
.addEventListener('click',(e)=>{
    if(modal.classList.contains('hidden')){

        modalEditClientes.classList.remove('hidden');
        modalEditClientes.classList.add("fixed");
        document.querySelector("#activo").checked = true;
    }
});


document.querySelector('#eliminarClientes')
.addEventListener('click',(e)=>{
    if(modaldeleteClientes.classList.contains('hidden')){

        modaldeleteClientes.classList.remove('hidden');
        modaldeleteClientes.classList.add("fixed");
        document.querySelector("#activo").checked = true;
    }
});






});