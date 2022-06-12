    <section class="foco-pagina">
        <div class="container" style="float:inline-start">
            <h1>Bem-vindo á Gestão !</h1>                   
                <button  type="button" onclick="window.location.href='index.php?r=atualizar'"class="btn btn-primary">Atualizar Dados (email e password)</button>
                <br>
                <br>                                                  
                <button  type="button" onclick="window.location.href='index.php?r=fatura/index'"class="btn btn-primary">Emitir Fatura</button>
                <br> 
                <br>                                                     
                <button  type="button" onclick="window.location.href='index.php?r=criar/cliente'"class="btn btn-primary">Registar Cliente</button>
                <br>  
                <br>                                                    
                <button  type="button" onclick="window.location.href='index.php?r=produto/index'"class="btn btn-primary">Gerir Produto e Stock</button>
                <br> 
                <br>                                                    
                <button  type="button" onclick="window.location.href='index.php?r=iva/index'"class="btn btn-primary">Gerir IVA</button>
                <br> 
                <br>                                                     
                <button  type="button" onclick="window.location.href='index.php?r=empresa/atualizar'"class="btn btn-primary">Configurar Dados De Empresa</button>
                <br> 
                <br>                                                   
                <button  type="button" onclick="window.location.href='index.php?r=consulta/index'"class="btn btn-primary">Consultar Histórico de Faturas Emitidas</button>
                <br> 
                <br>        
                <?php   if(isset($_SESSION['administrador'])){ ?>      
                <button  type="button" onclick="window.location.href='index.php?r=funcionario/index'"class="btn btn-primary">Gerir Funcionários</button>
                <?php  } ?>
                </div>
    </section>