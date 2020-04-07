<!DOCTYPE html>
<html lang="en">
  <?php 
  include __DIR__ .'/head.php';
  ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
		<?php
		include __DIR__ . '/left.php';
		?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Editer hôtel</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
            
                  <div class="x_content">
                    <br />
                    <form action="index.php" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
						<input value="<?php echo $row["id"];?>" type="hidden" id="id" name="id" />
						<input value="confirmUpdate" type="hidden" id="Action" name="Action" />
                       
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nom <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input value="<?php echo $row["nom"];?>" type="text" id="nom" name="nom" required="required" class="form-control ">
                        </div>
                      </div>
					  
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Ville <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <select name="ville" class="form-control ">
							<?php
							foreach($rowsVille as $rowVille){
							?>
							<option <?php if($row["ville"]==$rowVille["id"]) echo 'selected';?> value="<?php echo $rowVille["id"];?>"><?=$rowVille["nom"];?></option>
							<?php }?>
						  </select>
                        </div>
                      </div>
					  
                      <div class="item form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Code postal</label>
                        <div class="col-md-6 col-sm-6 ">
                          <input value="<?php echo $row["codepostal"];?>" id="codepostal" name="codepostal" class="form-control" type="text" name="middle-name">
                        </div>
                      </div>
					  <div class="item form-group">
						<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">adresse</label>
						<div class="col-md-6 col-sm-6 ">
						  <input value="<?php echo $row["adresse"];?>" id="adresse" name="adresse" class="form-control" type="text" name="middle-name">
						</div>
					  </div>
					  
					  <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Etoile <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <select name="etoile" class="form-control ">
							<?php
							for($i=1; $i<6; $i++){
							?>
							<option  <?php if($row["etoile"]==$i) echo 'selected';?> value="<?php echo $i;?>"><?php echo $i;?></option>
							<?php }?>
						  </select>
                        </div>
                      </div>
					  
					
					  
					 <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Type<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <select name="type" class="form-control ">
							
							<option  <?php if($row["type"]==1) echo 'selected';?> value="1">hotel</option>
							<option  <?php if($row["etoile"]==2) echo 'selected';?> value="2">residence</option>
							
						  </select>
                        </div>
                      </div>
					  
						<div class="item form-group">
						<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Description</label>
						<div class="col-md-6 col-sm-6 ">
						  <textarea id="description" name="description" class="form-control"><?php echo $row["description"];?></textarea>
						</div>
					  </div>
					  
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

        <!-- /page content -->

         <?php
		include __DIR__ .'/footer.php';
		?>
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
	
  </body>
</html>
