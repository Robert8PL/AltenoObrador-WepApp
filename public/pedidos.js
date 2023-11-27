
document.addEventListener('DOMContentLoaded', function(){

    var modal = document.querySelector(".m-add-cliente");

var btnsElimClis =  document.querySelectorAll('.eliminarClientes');
var modaldeleteClientes = document.querySelector(".m-delete-clientes");


var addNombre = document.querySelector("#nombreAdd");
var addTel = document.querySelector("#telefonoAdd");
var addDir = document.querySelector("#dirAdd");
var btnAddCli = document.querySelector("#addCli");
var infoAddcli= document.querySelector('#infoAddCli');


btnsElimClis.forEach((btn)=>{
   btn.addEventListener('click',(e)=>{
 
    let inputId = document.querySelector('#cliId');
        
    if(modaldeleteClientes.classList.contains('hidden')){
       
            modaldeleteClientes.classList.remove('hidden');
            modaldeleteClientes.classList.add("fixed");
            
        }
    });

});

document.querySelector('#btn-cerrar3')
    .addEventListener('click',(e)=>{

        if(modaldeleteClientes.classList.contains('fixed')){

                    modaldeleteClientes.classList.remove('fixed');
                    modaldeleteClientes.classList.add("hidden");
                   
        }
    });



// abrir m clis
    document.querySelector('#agregarCliente')
    .addEventListener('click',(e)=>{
        if(modal.classList.contains('hidden')){
    
            modal.classList.remove('hidden');
            modal.classList.add("fixed");
            document.querySelector("#activo").checked = true;
            btnAddCli.disabled = true;
        }
    });
//cerrar m clis
    document.querySelector('#btn-cerrar')
    .addEventListener('click',(e)=>{

        if(modal.classList.contains('fixed')){

                    modal.classList.remove('fixed');
                    modal.classList.add("hidden");
                    document.querySelector("#nombre").value= "";
                    document.querySelector("#dir").value = "";
        }
    }); 







});