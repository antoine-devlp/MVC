<p>Etes vous sur de vouloir supprimer le projet ayant le code : 
    <?php echo $_GET['code'] ?> ?</p>
    <?php
    echo '<a href="http://localhost/index.php?entity=projet&action=delete&code='.$_GET['code'].'&commit"><button>Confimer</button></a>';
    echo '<a href="http://localhost/index.php?entity=projet"><button>Annuler</button></a>';
    ?>