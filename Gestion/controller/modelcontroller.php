
<?php
 require_once './model/modelproduit.php';

 function index(){
    $produits = getAll();
    $Categorie = getAll();
    require_once './view/list.php';
    require_once './view/listcat.php';
}

function remove(){
    $id =$_GET['id'];
    deleteProduit($id);
    deleteCategorie($id);
    header('location:index.php');

}

function create(){
    require_once './view/add.php';
    require_once './view/addcat.php';
}

function save(){
    $libelle =$_POST['libelle'];
    $qt =$_POST['qt'];
    $prix =$_POST['prix'];
    addProduit($libelle,$qt,$prix);
    addCategorie($libelle);
    header('location:index.php');
}




?>