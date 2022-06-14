    
    <h6 style="float:right;margin-right:3vw;"> <img src="public/img/user4.png" alt="user" style="height:30px; width:30px;">  <?= $user->username?></h6><br>
<section class="foco-pagina">
            <div class="container" style="float:inline-start">

                <button  type="button" onclick="window.location.href='index.php?r=atualizar'"class="btn btn-secondary" >Atualizar Dados (email e password)</button>
                <br>
                <br>                                                  
                <button  type="button" onclick="window.location.href='index.php?r=fatura/index'"class="btn btn-secondary">Emitir Fatura</button>
                <br> 
                <br>                                                     
                <button  type="button" onclick="window.location.href='index.php?r=criar/cliente'"class="btn btn-secondary">Registar Cliente</button>
                <br>  
                <br>                                                    
                <button  type="button" onclick="window.location.href='index.php?r=produto/index'"class="btn btn-secondary">Gerir Produto e Stock</button>
                <br> 
                <br>                                                    
                <button  type="button" onclick="window.location.href='index.php?r=iva/index'"class="btn btn-secondary">Gerir IVA</button>
                <br> 
                <br>                                                     
                <button  type="button" onclick="window.location.href='index.php?r=empresa/atualizar'"class="btn btn-secondary">Configurar Dados De Empresa</button>
                <br> 
                <br>                                                   
                <button  type="button" onclick="window.location.href='index.php?r=consulta/index'"class="btn btn-secondary">Consultar Histórico de Faturas Emitidas</button>
                <br> 
                <br>        
                <?php   if(isset($_SESSION['administrador'])){ ?>      
                <button  type="button" onclick="window.location.href='index.php?r=funcionario/index'"class="btn btn-secondary">Gerir Funcionários</button>
                <?php  } ?>
                </div>
    </section>