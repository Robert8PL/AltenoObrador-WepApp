document.addEventListener('DOMContentLoaded', function(){

    var modal = document.querySelector(".custom-modal");
    var modalEditClientes = document.querySelector(".m-edit-cliente");
    var modaldeleteClientes = document.querySelector(".m-delete-clientes");

    // campos del formulario agregar clientes
    var addNombre = document.querySelector("#nombreAdd");
    var addTel = document.querySelector("#telefonoAdd");
    var addDir = document.querySelector("#dirAdd");
    var btnAddCli = document.querySelector("#addCli");
    var infoAddcli= document.querySelector('#infoAddCli');

    //campos del formulario editar clientes
    var edtNombre = document.querySelector('#nombreEdit');
    var edtTelefono = document.querySelector('#telefonoEdit');
    var edtDir = document.querySelector('#dirEdit');

    var btnEditCli = document.querySelector('#btnEditCli');
    var infoEditCli = document.querySelector('#infoEditCli');



    /* cerrar modales   2 - editar clientes 3 - eliminar clientes*/
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
    .addEventListener('click',()=>{

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
        btnAddCli.disabled = true;
    }
});

//modal editar clientes
document.querySelector('#editarClientes')
.addEventListener('click',(e)=>{
    if(modal.classList.contains('hidden')){

        modalEditClientes.classList.remove('hidden');
        modalEditClientes.classList.add("fixed");
        document.querySelector("#activo").checked = true;
        btnEditCli.disabled = true;
    }
});

//modal eliminar clientes
document.querySelector('#eliminarClientes')
.addEventListener('click',(e)=>{
    if(modaldeleteClientes.classList.contains('hidden')){

        modaldeleteClientes.classList.remove('hidden');
        modaldeleteClientes.classList.add("fixed");
        document.querySelector("#activo").checked = true;
    }
});


//Validacion en tiempo real del formulario de agregar clientes
addNombre.addEventListener('keyup', valFormAgregarCli);
addDir.addEventListener('keyup', valFormAgregarCli);
addTel.addEventListener('keyup', valFormAgregarCli);

addTel.addEventListener('input',(e)=>{
    let input = e.target;
    let val = input.value.trim();
    input.value = val.replace(/\D/g, '');
});

function valFormAgregarCli(){
    let nombre = addNombre.value.trim();
    let tel = addTel.value.trim();
    let direccion = addDir.value.trim();

    if((nombre != '' && nombre != null && nombre != undefined) &&
    (direccion != '' && direccion != null && direccion != undefined) &&
    (tel != '' && tel != null && tel != undefined)){
        
        btnAddCli.disabled = false;
        infoAddcli.innerHTML = "";
        

    } else {

        infoAddcli.innerHTML = "Esta dejando campos vacios";
        btnAddCli.disabled = true;
    }
}

    //Validacion en tiempo real del formulario editar clientes
    edtNombre.addEventListener('keyup', valFormEditarCli);
    edtTelefono.addEventListener('keyup', valFormEditarCli);
    edtDir.addEventListener('keyup', valFormEditarCli);
    
    edtTelefono.addEventListener('input',(e)=>{
        let input = e.target;
        let val = input.value.trim();
        input.value = val.replace(/\D/g, '');
    });
    
    function valFormEditarCli(){
        let nombre = edtNombre.value.trim();
        let tel = edtTelefono.value.trim();
        let direccion = edtDir.value.trim();
    
        if((nombre != '' && nombre != null && nombre != undefined) &&
        (direccion != '' && direccion != null && direccion != undefined) &&
        (tel != '' && tel != null && tel != undefined)){
            
            btnEditCli.disabled = false;
            infoEditCli.innerHTML = "";
            
    
        } else {
    
            infoEditCli.innerHTML = "Esta dejando campos vacios";
            btnEditCli.disabled = true;
        }



}





});