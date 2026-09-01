<?php
include_once('config.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
$sql="select * from materias where=?";
$smt=$conexao->prepare($sql);
$smt->bind_param('i',$id);
$smt->execute();
if($smt->num_rows>0){
    while($smt->fetch_assoc()){

    }
}
}
else{
    header('location:materias.php');
}

?>
