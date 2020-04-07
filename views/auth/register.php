<?php require  __DIR__ . '/../layout/header.php'?>

<!-- Naslov -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Login 2</h1>
        </div>
      </div>
    </div>
  </section>

  <!-- Content -->
  <section class="content">
    <div class="col-lg-10 pl-5 ">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Register</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <iframe id="iframe" name="my_iframe"></iframe>

        <form id="register_form_data"  method="POST" role="form" action="/auth/signUp"> target="my_iframe" >
          <div class="card-body">
            <div class="row mt-2">
              <div class="col-lg-6">
                <label class="col-lg-9 control-label mb-0 f14 font-weight-bold"><span
                    class="ml-1 strong f14 font-weight-bold"></span>Username</label>
                <div class="col-lg-12">
                  <input id=" u_name" name=" u_name" type="text" class="form-control f14" placeholder=""
                    required="required" >
                </div>
              </div>
              <div class="col-lg-6">
                <label class="col-lg-9 control-label mb-0 f14 font-weight-bold">Password</label>
                <div class="col-lg-12">
                  <input id=" u_password" name=" u_password" type="text" class="form-control f14" placeholder=""
                       >
                </div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-lg-6">
                <label class="col-lg-9 control-label mb-0 f14 font-weight-bold"><span
                    class="ml-1 strong f14 font-weight-bold"></span>E-mail</label>
                <div class="col-lg-12">
                  <input id="u_mail" name="u_mail" type="text" class="form-control f14" placeholder=""
                        >
                </div>
              </div>
              <div class="col-lg-6">
                <label class="col-lg-9 control-label mb-0 f14 font-weight-bold">Password Repeat</label>
                <div class="col-lg-12">
                  <input id="u_password_repeat" name="u_password_repeat" type="text" class="form-control f14" placeholder=""
                        >
                </div>
              </div>
            </div>
            <div class="row mt-3">
              <label class="col-lg-12 control-label mb-0 f14 font-weight-bold">Position:</label>

              <div class="col-lg-4 mt-2">
                <div class="col-lg-12">
                  <label class="btn btn-primary active">
                    <input type="radio" name="u_position" id="option1" autocomplete="off" chacked>
                    <span class="glyphicon glyphicon-ok">Backend</span>
                  </label> </div>
              </div>
              <div class="col-lg-4 mt-2">
                <div class="col-lg-12">
                  <label class="btn btn-success active">
                    <input type="radio" name="u_position" id="option2" autocomplete="off" chacked>
                    <span class="glyphicon glyphicon-ok">Frontend</span>
                  </label>
                </div>
              </div>
              <div class="col-lg-4 mt-2">
                <div class="col-lg-12">
                  <label class="btn btn-warning active">
                    <input type="radio" name="u_position" id="option3" autocomplete="off" chacked>
                    <span class="glyphicon glyphicon-ok">Fullstack</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="row mt-3">
              <label class="col-lg-12 control-label mb-0 f14 font-weight-bold">Techonology stack:</label>
              <div class="col-lg-3 mt-2"> <label class="btn btn-default">
                  <input type="checkbox" name="u_teh_stack[]" value="1" autocomplete="off">
                  <span class="glyphicon glyphicon-ok"></span>
                  React
                </label>
              </div>
              <div class="col-lg-3 mt-2">
                <label class="btn btn-default">
                  <input type="checkbox" name="u_teh_stack[]" value="2" autocomplete="off">
                  <span class="glyphicon glyphicon-ok"></span>
                  React
                </label>
              </div>
              <div class="col-lg-3 mt-2"> <label class="btn btn-default">
                  <input type="checkbox" name="u_teh_stack[]" value="3" autocomplete="off">
                  <span class="glyphicon glyphicon-ok"></span>
                  React
                </label>
              </div>
              <div class="col-lg-3 mt-2"> <label class="btn btn-default">
                  <input type="checkbox" name="u_teh_stack[]" value="4" autocomplete="off">
                  <span class="glyphicon glyphicon-ok"></span>
                  React
                </label>
              </div>
              <div class="col-lg-3 mt-2"> <label class="btn btn-default">
                  <input type="checkbox" name="u_teh_stack[]" value="5" autocomplete="off">
                  <span class="glyphicon glyphicon-ok"></span>
                  React
                </label>
              </div>
              <div class="col-lg-3 mt-2"> <label class="btn btn-default">
                  <input type="checkbox" name="u_teh_stack[]" value="6" autocomplete="off">
                  <span class="glyphicon glyphicon-ok"></span>
                  React
                </label>
              </div>
              <div class="col-lg-3 mt-2"> <label class="btn btn-default">
                  <input type="checkbox" name="u_teh_stack[]" value="7" autocomplete="off">
                  <span class="glyphicon glyphicon-ok"></span>
                  React
                </label>
              </div>
              <div class="col-lg-3 mt-2"> <label class="btn btn-default">
                  <input type="checkbox" name="u_teh_stack[]" value="8" autocomplete="off">
                  <span class="glyphicon glyphicon-ok"></span>
                  React
                </label>
              </div>
              <div class="col-lg-3 mt-2"> <label class="btn btn-default">
                  <input type="checkbox" value="9" autocomplete="off">
                  <span class="glyphicon glyphicon-ok"></span>
                  React
                </label>
              </div>
              <div class="col-lg-3 mt-2"> <label class="btn btn-default">
                  <input type="checkbox" name="u_teh_stack[]" value="10" autocomplete="off">
                  <span class="glyphicon glyphicon-ok"></span>
                  React
                </label>
              </div>
              <div class="col-lg-3 mt-2"> <label class="btn btn-default">
                  <input type="checkbox" name="u_teh_stack[]" value="11" autocomplete="off">
                  <span class="glyphicon glyphicon-ok"></span>
                  React
                </label>
              </div>
              <div class="col-lg-3 mt-2"> <label class="btn btn-default">
                  <input type="checkbox" name="u_teh_stack[]" value="12" autocomplete="off">
                  <span class="glyphicon glyphicon-ok"></span>
                  React
                </label>
              </div>
            </div>

            <!-- /.card-body -->

            <div class="card-footer d-flex justify-content-center mt-4">
              <button id="subsub" type="submit" class="btn btn-primary col-lg-4">Submit</button>
            </div>
        </form>
      </div>

    </div>

    <!-- OVDE IDE MAIN -->
  </section>
  <!-- /.content -->
</div>
<script>
/*
var fdata= document.querySelector("#register_form_data");
var formData = new FormData(fdata);

const x = document.getElementById("subsub");
    x.onclick = (e)=>{
      e.preventDefault();
      e.stopImmediatePropagation();

      console.log(formData.getAll('u_name').values());

    }
    */
</script>
<!-- /.content-wrapper -->
<?php require  __DIR__ . '/../layout/footer.php'?>
