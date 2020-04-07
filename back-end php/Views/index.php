<!DOCTYPE html>
<html lang="en">
  <?php 
  include __DIR__ .'/head.php';
  ?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php 
		  include __DIR__ .'/left.php';
		  ?>
      
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Gestion des hôtels </h3>
              </div>
            </div>
			<?php 
				if($Message != ''){?>
				<div class="alert alert-success alert-dismissible " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="proche"><span aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></span>
                    </button>
                    <strong>
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;"><?=$Message;?> </font>
						</font>
					</strong>
				</div>
			<?php }?>	  
            <div class="clearfix"></div>

            <div class="row">
     
         

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Liste des hôtels</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                   
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Nom</th>
                          <th>Ville</th>
                          <th>Pays</th>
                          <th>Adresse</th>
                          <th>Code postal</th>
                          <th>etoile</th>
						  <th>Modifier</th>
						  <th>Supprimer</th>
                        </tr>
                      </thead>


                      <tbody>
					  <?php
						foreach($rows as $row){
							
					  ?>
                        <tr>
                          <td><?php echo $row["nom"]; ?></td>
                          <td><?php echo $row["ville"]; ?></td>
                          <td><?php echo $row["pays"]; ?></td>
                          <td><?php echo $row["adresse"]; ?></td>
                          <td><?php echo $row["codepostal"]; ?></td>
                          <td><?php echo $row["etoile"]; ?></td>
                          <td><a href="index.php?Action=update&id=<?php echo $row["id"]; ?>">Modifier</a></td>
						  <td><a href="index.php?Action=delete&id=<?php echo $row["id"]; ?>">Supprimer</a></td>
                        </tr>
                        <?php
						}
						?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
                </div>
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

	<?php 
		include __DIR__ . '/script.php';
	?>

  </body>
</html>