
<?php include("head.php") ?>

<?php

$kategori = mysqli_query($baglan,'select * from kategoriler');
$ekle = mysqli_query($baglan,'insert into kategoriler values(7,"Savaş")');
$kategorisayisi = mysqli_num_rows($kategori);
//$kategorisayisi = $kategori->num_rows;



?>

<div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Kategoriler</h4>
                  <p class="card-category"> Kayıtlı tüm kategoriler burada</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <tr><th>
                          ID
                        </th>
                        <th>
                          Kategori Adı
                        </th>
                       
                      </tr></thead>
                      <tbody>
                          <?php 
                          
                          
                          for($i= 0;$i<$kategorisayisi;$i++){
                              $veriler = mysqli_fetch_array($kategori);
                            echo "<tr><td>".$veriler["id"]."</td><td>".$veriler["KategoriAdi"]."</td></tr>";
                        }
                          
                          
                          ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>









<?php include("footer.php") ?>