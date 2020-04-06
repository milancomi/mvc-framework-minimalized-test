<?php require_once '../layout/header.php'; ?>

<ul>
<?php 
dd($para1);
foreach ($para1 as $user)
{
    echo "<li>" . $user->u_name ."</li>";
} 

?>

</ul>

<?php require_once '../layout/footer.php'; ?>
