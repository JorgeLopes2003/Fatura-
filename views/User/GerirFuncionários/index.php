<h2 class="text-center top-space">Funcioanrios Index</h2>

<h2 class="top-space"></h2>

<div class="row">
    
    <div class="col-sm-12">
    <hr>
        <table class="table tablestriped">
            <thead>
                <th>
                    <h3>Username</h3>
                </th>
                <th>
                    <h3>Password</h3>
                </th>
                <th>
                    <h3>Email</h3>
                </th>
                <th>
                    <h3>Telefone</h3>
                </th>
                <th>
                    <h3>NIF</h3>
                </th>
                <th>
                    <h3>Morada</h3>
                </th>
                <th>
                    <h3>Localidade</h3>
                </th>
                <th>
                    <h3>Código Postal</h3>
                </th>
                <th>
                    <h3>User Actions</h3>
                </th>
            </thead>
            <tbody>
                <?php foreach ($user as $user) { 
                    if($user->role == 2){?>
                    <tr>
                        <td><?= $user->username ?> </td>
                        <td ><?= $user->password ?></td>
                        <td><?= $user->email  ?></td>
                        <td><?= $user->telefone ?></td>
                        <td><?= $user->nif ?></td>
                        <td><?= $user->morada ?></td>
                        <td><?= $user->localidade ?></td>
                        <td><?= $user->codigopostal ?>
                        </td>
                        <td>
                            <a href="index.php?r=funcionario/edit&id=<?= $user->id ?>" class="btn btn-info" role="button">Edit</a>
                            <a href="index.php?r=funcionario/delete&id=<?= $user->id ?>" class="btn btn-warning" role="button">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
                <?php } ?>
            </tbody>
        </table>
        <br>
    </div>
    

    <div class="col-sm-6">
        <h3>Create a new Funcionario !</h3>
        <p>
            <a href="index.php?r=funcionario/create" class="btn btn-info" role="button">New</a>
        </p>
    </div>
</div> <!-- /row -->