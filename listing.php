<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">telephone</th>
            <th scope="col">email</th>
            <th scope="col">Pays</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'database.php';

        $query = $db->query('SELECT * FROM annuaire');
        while ($data = $query->fetch()) {
        ?>
            <tr>
                <th scope="row"><?= $data['nom'] ?></th>
                <td><?= $data['prenom'] ?></td>
                <td><?= $data['tel'] ?></td>
                <td><?= $data['email'] ?></td>
                <td><?= $data['pays'] ?></td>
                <td>
                    <a href="delete.php?id=<?=$data['id'] ?>" class='text-danger' id="delete">Suprimer</a>
                    <a href="update.php?id=<?=$data['id'] ?>" class='text-primary'>Modifer</a>

                </td>

            </tr>
        <?php } ?>
    </tbody>
</table>