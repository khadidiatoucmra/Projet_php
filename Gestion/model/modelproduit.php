<?php
 require_once './model/db.php';


 function getAll(){
    global $connexion;
    $sql="SELECT *  FROM Produit";
    $sql="SELECT *  FROM Categorie";
    $produits = mysqli_query($connexion,$sql);
    return $Produit;
    return $Categorie;
 }

 
 function addProduit($libelle,$qt,$prix_unitaire){
    global $connexion;
    $sql="INSERT INTO Produit (libelle,quantite,prix_unitaire) values
     ('$libelle',$qt,$prix_unitaire)";
     mysqli_query($connexion,$sql);
    
 }
 function addCategorie($libelle){
    global $connexion;
    $sql="INSERT INTO Produit (libelle) values
     ('$libelle')";
     mysqli_query($connexion,$sql);
    
 }

 function deleteProduit($id){
    global $connexion;
    $sql="DELETE from Produit  where id = $id";
    mysqli_query($connexion,$sql);
    
 }
 function deleteCategorie($id){
    global $connexion;
    $sql="DELETE from Categorie  where id = $id";
    mysqli_query($connexion,$sql);
    
 }

 
 function updateProduit($id,$libelle,$qt,$prix,$Id_cat){
    global $connexion;
    $sql="UPDATE Produit SET libelle ='$libelle',quantite=$qt, prix =$prix, , Id_cat=$Id_cat where id=$id ";
    mysqli_query($connexion,$sql);
    
 }

 function updateCategorie($id,$libelle){
    global $connexion;
    $sql="UPDATE Categorie SET libelle ='$libelle' where id=$id ";
    mysqli_query($connexion,$sql);
    
 }
 

 

?>