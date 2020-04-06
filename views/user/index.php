
  <?php require  __DIR__ . '/../layout/header.php'?>

  <!-- Naslov -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List of all Users: </h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Content -->
    <section class="content">
<div class="container pl-5">
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">User e-mail</th>
      <th scope="col">User type</th>
      <th scope="col">User  Sub type</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <tr>
   <?php
    foreach ($para1 as $user)
{
    echo "<th scope='row'>".$user->id. "</th>";

    echo "<td>". $user->u_name ."</td>";
    echo "<td>". $user->u_email ."</td>";
    echo "<td>". $user->u_type ."</td>";
    echo "<td>". $user->u_sub_type ."</td>";
    echo "<td data-id=' ". $user->id ."' >Delete/Edit</td>";

    echo "</tr>";

} 
?>
  </tbody>
</table>

</div>
 <!-- OVDE IDE MAIN -->
 </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php require  __DIR__ . '/../layout/footer.php'?>
