<a href="?action=add">Add Product</a>
<table>
    <tr>
        <th>ID</th>
        <td>Libelle</td>
    </tr>
    <?php while($p = pg_fetch_assoc($Categorie)){?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['libelle'] ?></td>
            
            <td>
                <a href="?action=delete&id=<?= $p['id'] ?>">Delete</a>
                <button>Update</button>
            </td>
        </tr>
    <?php } ?>
</table>