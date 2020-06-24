			  <!-- Indeks Variabel -->
              <div class="card mb-4">
                <div class="card-header">
                  Indeks Variabel
                </div>
                <div class="card-body">
                  <!-- This card uses Bootstrap's default styling with no utility classes added. Global styles are the only things modifying the look and feel of this default card example. -->
					<div class="row">
					  <div class="col-lg-12">
						<div class="p-5">
						  <form class="user">
							<div class="form-group row">
							  <!-- <input type="text" class="form-control form-control-user" id="i" placeholder="i = "> -->
							  i = 
							  <?php
							  $varI = "";
							  for ($i = 1; $i <= $jumlahPengimpor; $i++) {
								  $varI = $varI.$i.", ";
							  }
							  echo substr($varI, 0, strlen($varI)-2);
							  ?>
							</div>
							<div class="form-group row">
							  <!-- <input type="text" class="form-control form-control-user" id="j" placeholder="j = "> -->
							  j = 
							  <?php
							  $varJ = "";
							  for ($i = 1; $i <= $jumlahStorage; $i++) {
								  $varJ = $varJ.$i.", ";
							  }
							  echo substr($varJ, 0, strlen($varJ)-2);
							  ?>
							</div>
							<div class="form-group row">
							  <!-- <input type="text" class="form-control form-control-user" id="k" placeholder="k = "> -->
							  k = 
							  <?php
							  $varK = "";
							  for ($i = 1; $i <= $jumlahDepo; $i++) {
								  $varK = $varK.$i.", ";
							  }
							  echo substr($varK, 0, strlen($varK)-2);
							  ?>
							</div>
							<div class="form-group row">
							  <!-- <input type="text" class="form-control form-control-user" id="l" placeholder="l = "> -->
							  l = 
							  <?php
							  $varL = "";
							  for ($i = 1; $i <= $jumlahTipe; $i++) {
								  $varL = $varL.$i.", ";
							  }
							  echo substr($varL, 0, strlen($varL)-2);
							  ?>
							</div>
						  </form>
						  <hr>
						</div>
					  </div>
					</div>
                </div>
              </div>