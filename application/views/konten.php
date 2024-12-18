
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
    <div id="menghilang">
      <?php echo $this->session->flashdata('alert', true);?>
    </div>
    <a href="<?= site_url('konten/tambah')?>"><button>Tambah Konten</button>

	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">Konten
		  <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
		 </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>Judul</th>
                     <th>Isi Konten</th>
                    <th>Nama Kategori</th>
                     <th>Tanggal</th>
                     <th>Foto</th>
                     
                     <th>Aksi</th>
                   </tr>
                   </thead>

                   <?php foreach($kontenn as $konten): ?>

                   <tbody>
                    <tr>
                    <td><?= $konten['judul'] ?></td>
                      <td>
									<?= substr($konten['isi_konten'], 0, 150); ?> <!-- Batas 200 karakter -->
									<?php if (strlen($konten['isi_konten']) > 150): ?>
										... <a href="<?= base_url('welcome/artikel/'.$konten['slug']) ?>">Baca Selengkapnya</a>
									<?php endif; ?>
                  </td>
                    
                   <td value="<?= $konten['id_kategori']?>"><?= $konten['nama_kategori']?></td>
                    <td><?= $konten['tanggal'] ?></td>
                    <td><img src="<?= base_url().'./tema/assets/images/'.$konten['foto']?>" width="100px" alt=""></td>
                   
                    <td>
                    <a class="btn btn-sm btn-warning" href="<?= site_url('konten/edit/'.$konten['id_konten'])?>"><i class="fa fa-edit"></i>
                    |
                    <a class="btn btn-sm btn-danger" onClick="return confirm('Apakah kamu sungguh ingin menghapusnya')"
                     href="<?= site_url('konten/hapus/'.$konten['id_konten'])?>"><i class="fa fa-trash"></i>
                    </td>
                   </tr>

                 </tbody>
                   <?php endforeach;?>
                </table>
               </div>

	   </div>
	 </div>
	</div><!--End Row-->
  
    <!--start overlay-->
    <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
