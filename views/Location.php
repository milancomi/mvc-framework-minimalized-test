<?php require_once 'header.php'; ?>

<ul>
<?php 
foreach ($para1 as $user)
{
    echo "<li>" . $user->u_name ."</li>";
} 

?>

</ul>

<?php require_once 'footer.php'; ?>
