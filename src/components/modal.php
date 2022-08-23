<style>


/*:::Boton-Modal:::*/
.boton-modal{
    padding: 40px;
    background-color: #fff;
}
.boton-modal label{
    padding: 10px 15px;
    background-color: #5488a3;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
    transition: all 300ms ease;
}
.boton-modal label:hover{
    background-color: #185E83;
}
/*:::Fin Boton-Modal:::*/

/*:::Ventana Modal:::*/
#btn-modal{
    display: none;
}
.container-modal{
    width: 100%;
    height: 100vh;
    position: fixed;
    top: 0; left: 0;
    background-color: rgba(144, 148, 150, 0.8);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 100;
}
#btn-modal:checked ~ .container-modal{
    display: flex;
}
.content-modal{
    width: 100%;
    
    padding: 20px;
    background-color: rgba(84, 230, 47, 0.5);
    border-radius: 4px;
    
}
.content-modal h1{
    margin-bottom: 15px;
    color: white;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.content-modal p{
    padding: 15px 0px;
    border-top: 1px solid #dbdbdb;
    border-bottom: 1px solid #dbdbdb;
}
.content-modal .btn-cerrar{
    width: 100%;
    margin-top: 15px;
    display: flex;
    justify-content: flex-end;
}
.content-modal .btn-cerrar label{
    padding: 7px 10px;
    background-color: #5488a3;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
    transition: all 300ms ease;
}
.content-modal .btn-cerrar label:hover{
    background-color:#185E83;
}
.cerrar-modal{
    width:100%;
    height: 100vh;
    position: absolute;
    top:0; left: 0;
    z-index: 1;
}
/*segundo modal*/
.container-modal1{
    width: 100%;
    height: 100vh;
    position: fixed;
    top: 0; left: 0;
    background-color: rgba(144, 148, 150, 0.8);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 100;
}
#btn-modal1:checked ~ .container-modal1{
    display: flex;
}
.content-modal1{
    width: 100%;
    
    padding: 20px;
    background-color: rgba(238, 28, 28, 0.5);
    border-radius: 4px;
    
}
.content-modal1 h1{
    margin-bottom: 15px;
    color: white;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.content-modal1 p{
    padding: 15px 0px;
    border-top: 1px solid #dbdbdb;
    border-bottom: 1px solid #dbdbdb;
}
.content-modal1 .btn-cerrar{
    width: 100%;
    margin-top: 15px;
    display: flex;
    justify-content: flex-end;
}
.content-modal1 .btn-cerrar label{
    padding: 7px 10px;
    background-color: #5488a3;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
    transition: all 300ms ease;
}
.content-modal1 .btn-cerrar label:hover{
    background-color:#185E83;
}
.cerrar-modal1{
    width:100%;
    height: 100vh;
    position: absolute;
    top:0; left: 0;
    z-index: 1;
}
@media screen and (max-width:800px) {
    .content-modal{
        width: 90%;
    }
}
/*:::Fin Ventana Modal:::*/
</style>
<!--Ventana Modal-->
<input type="checkbox" id="btn-modal">
    <div class="container-modal">
        <div class="content-modal">
            <h1>CORRECTO</h1>
            
            
        </div>
        <label for="btn-modal" class="cerrar-modal"></label>
    </div>
<!--Fin de Ventana Modal-->
<!--Ventana Modal-->
<input type="checkbox" id="btn-modal1">
    <div class="container-modal1">
        <div class="content-modal1">
            <h1>INCORRECTO</h1>
            
            
        </div>
        <label for="btn-modal" class="cerrar-modal"></label>
    </div>
<!--Fin de Ventana Modal-->