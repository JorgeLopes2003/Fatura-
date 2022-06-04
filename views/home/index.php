    <section class="foco-pagina">
        <div class="container">
            <h1>Bem-vindo ao nosso site web!</h1>                   
                <button  type="button" onclick="window.location.href='index.php?r=atualizar'"class="btn btn-primary">Atualizar Dados (email e password)</button>
                <br>
                <br>                                                     <!-- Mudar rotas  -->
                <button  type="button" onclick="window.location.href='index.php?r=login'"class="btn btn-primary">Emitir Fatura</button>
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
                <br>                                                   <!-- Mudar rotas  -->
                <button  type="button" onclick="window.location.href='index.php?r=login'"class="btn btn-primary">Consultar Histórico de Faturas Emitidas</button>
                <br> 
                <br>        
                <?php   if(isset($_SESSION['administrador'])){ ?>      <!-- Mudar rotas  --> 
                <button  type="button" onclick="window.location.href='index.php?r=login'"class="btn btn-primary">Gerir Funcionários</button>
                <?php  } ?>
                </div>
    </section>