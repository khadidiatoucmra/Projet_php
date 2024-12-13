<a href="?action=add">Add Product</a>
<table>
    <tr>
        <th>ID</th>
        <td>Libelle</td>
        <th>Prix</th>
        <th>Quantite</th>
        <th>ID Cat</th>
    </tr>
    <?php while($p = pg_fetch_assoc($produits)){?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['libelle'] ?></td>
            <td><?= $p['prix_unitaire'] ?></td>
            <td><?= $p['quantite'] ?></td>
            <td><?= $p['Id_Cat'] ?></td>
            <td>
                <a href="?action=delete&id=<?= $p['id'] ?>">Delete</a>
                <button>Update</button>
            </td>
        </tr>
    <?php } ?>
</table>