<table >
    <thead>
        <tr>
            <th>Nom</th>
            <th>Code</td>
            <th style="text-align: center;">action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($affichage as $key) {
            $nom = $key['nom'];
            $code = $key['code'];
            echo '<tr>';
            echo '<td>' . $nom . '</td>';
            echo '<td>' . $code . '</td>';
            echo '<td><a href="?entity=projet&action=edit&code='.$code.'"><button>modifier</button></a> <a href="http://localhost/index.php?entity=projet&action=delete&code='.$code.'"><button>supprimer</button></a></td>';
            echo '</tr>';
        };
        ?>
    </tbody>
</table>
<a href="?entity=projet&action=add"><button>Ajouter</button></a>