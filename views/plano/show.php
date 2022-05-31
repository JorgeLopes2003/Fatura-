    <div class="container">
        <h2>Resultado Simulação</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Num</th>
                    <th scope="col">Data</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Dívida</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($dados as $i){
                ?>
                <tr>
                    <td scope="row"><?= $i['Num']?></td>
                    <td><?= $i['data']?></td>
                    <td><?= $i['valor']?></td>
                    <td><?= $i['divida']?></td>
                </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
   </div>