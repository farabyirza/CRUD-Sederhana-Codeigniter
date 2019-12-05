<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Penyewaan Playstation</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
</head>
<body>
<div class="container">
	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                <h1>Sewa
                    <small>Playstation</small>
                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Masukkan Data</a></div>
                </h1>
            </div>
            
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th style="text-align: center;">Kode Peminjaman</th>
                        <th style="text-align: center;">No. Playstation</th>
                        <th style="text-align: center;">Type</th>
                        <th style="text-align: center;">Nama Peminjam</th>
                        <th style="text-align: center;">Awal Sewa</th>
                        <th style="text-align: center;">Akhir Sewa</th>
                        <th style="text-align: center;">Harga Sewa</th>
                        <th style="text-align: center;">Status Sewa</th>
                        <th style="text-align: center;">Actions</th>
                    </tr>
                </thead>
                <tbody id="show_data">
                    
                </tbody>
            </table>
        </div>
    </div>
        
</div>

		<!-- MODAL ADD -->
            <form>
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Masukkan data baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Kode Penyewaan</label>
                            <div class="col-md-10">
                              <input type="text" name="kode_sewa" id="kode_sewa" class="form-control" placeholder="Sesuai Antrian" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">No. PS</label>
                            <div class="col-md-10">
                              <input type="text" name="no_ps" id="no_ps" class="form-control" placeholder="No. PS">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Type</label>
                            <div class="col-md-10">
                              <input type="text" name="type" id="type" class="form-control" placeholder="Type">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Nama Peminjam</label>
                            <div class="col-md-10">
                              <input type="text" name="nama_peminjam" id="nama_peminjam" class="form-control" placeholder="Nama Peminjam">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Awal Sewa</label>
                            <div class="col-md-10">
                              <input type="date" name="awal_sewa" id="awal_sewa" class="form-control" placeholder="Awal Sewa">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Akhir Sewa</label>
                            <div class="col-md-10">
                              <input type="date" name="akhir_sewa" id="akhir_sewa" class="form-control" placeholder="Akhir Sewa">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Harga Sewa</label>
                            <div class="col-md-10">
                              <input type="text" name="harga_sewa" id="harga_sewa" class="form-control" placeholder="Harga Sewa">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Status Sewa</label>
                            <div class="col-md-10">
                              <input type="text" name="status_sewa" id="status_sewa" class="form-control" placeholder="Status Sewa">
                            </div>
                        </div>
                        
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL ADD-->

        <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Kode Penyewaan</label>
                            <div class="col-md-10">
                              <input type="text" name="kode_sewa_edit" id="kode_sewa_edit" class="form-control" placeholder="Kode Penyewaan" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">No. PS</label>
                            <div class="col-md-10">
                              <input type="text" name="no_ps_edit" id="no_ps_edit" class="form-control" placeholder="No. PS">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Type</label>
                            <div class="col-md-10">
                              <input type="text" name="type_edit" id="type_edit" class="form-control" placeholder="Type">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Nama Peminjam</label>
                            <div class="col-md-10">
                              <input type="text" name="nama_peminjam_edit" id="nama_peminjam_edit" class="form-control" placeholder="Nama Peminjam">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Awal Sewa</label>
                            <div class="col-md-10">
                              <input type="date" name="awal_sewa_edit" id="awal_sewa_edit" class="form-control" placeholder="Awal Sewa">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Akhir Sewa</label>
                            <div class="col-md-10">
                              <input type="date" name="akhir_sewa_edit" id="akhir_sewa_edit" class="form-control" placeholder="Akhir Sewa">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Harga Sewa</label>
                            <div class="col-md-10">
                              <input type="text" name="harga_sewa_edit" id="harga_sewa_edit" class="form-control" placeholder="Harga Sewa">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Status Sewa</label>
                            <div class="col-md-10">
                              <input type="text" name="status_sewa_edit" id="status_sewa_edit" class="form-control" placeholder="Status Sewa">
                            </div>
                        </div>
                        
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL EDIT-->

        <!--MODAL DELETE-->
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="kode_sewa_delete" id="kode_sewa_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE-->

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>

<script type="text/javascript">
	$(document).ready(function(){
		show_product();	//call function show all product
		
		$('#mydata').dataTable();
		 
		//function show all product
		function show_product(){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('product/product_data')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+data[i].kode_sewa+'</td>'+
		                        '<td>'+data[i].no_ps+'</td>'+
                                '<td>'+data[i].type+'</td>'+
		                        '<td>'+data[i].nama_peminjam+'</td>'+
                                '<td>'+data[i].awal_sewa+'</td>'+
                                '<td>'+data[i].akhir_sewa+'</td>'+
                                '<td>'+data[i].harga_sewa+'</td>'+
                                '<td>'+data[i].status_sewa+'</td>'+

		                        '<td style="text-align:left;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-kode_sewa="'+data[i].kode_sewa+'" data-no_ps="'+data[i].no_ps+'" data-type="'+data[i].type+'" data-nama_peminjam="'+data[i].nama_peminjam+'"data-awal_sewa="'+data[i].awal_sewa+'"data-akhir_sewa="'+data[i].akhir_sewa+'"data-harga_sewa="'+data[i].harga_sewa+'"data-status_sewa="'+data[i].status_sewa+'">Edit</a>'+' '+
                                    
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-kode_sewa="'+data[i].kode_sewa+'">Delete</a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}

        //Save product
        $('#btn_save').on('click',function(){
            var kode_sewa = $('#kode_sewa').val();
            var no_ps = $('#no_ps').val();
            var type        = $('#type').val();
            var nama_peminjam = $('#nama_peminjam').val();
            var awal_sewa = $('#awal_sewa').val();
            var akhir_sewa        = $('#akhir_sewa').val();
            var harga_sewa = $('#harga_sewa').val();
            var status_sewa = $('#status_sewa').val();

            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/save')?>",
                dataType : "JSON",
                data : {kode_sewa:kode_sewa, no_ps:no_ps, type:type, nama_peminjam:nama_peminjam, awal_sewa:awal_sewa, akhir_sewa:akhir_sewa, harga_sewa:harga_sewa, status_sewa:status_sewa},
                success: function(data){
                    $('[name="kode_sewa"]').val("");
                    $('[name="no_ps"]').val("");
                    $('[name="type"]').val("");
                    $('[name="merek"]').val("");
                    $('[name="awal_sewa"]').val("");
                    $('[name="akhir_sewa"]').val("");
                    $('[name="periode_sewa"]').val("");
                    $('[name="status_sewa"]').val("");
                    
                    $('#Modal_Add').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var kode_sewa = $(this).data('kode_sewa');
            var no_ps = $(this).data('no_ps');
            var type        = $(this).data('type');
            var nama_peminjam        = $(this).data('nama_peminjam');
            var awal_sewa        = $(this).data('awal_sewa');
            var akhir_sewa        = $(this).data('akhir_sewa');
            var harga_sewa        = $(this).data('harga_sewa');
            var status_sewa        = $(this).data('status_sewa');

            $('#Modal_Edit').modal('show');
            $('[name="kode_sewa_edit"]').val(kode_sewa);
            $('[name="no_ps_edit"]').val(no_ps);
            $('[name="type_edit"]').val(type);
            $('[name="nama_peminjam_edit"]').val(nama_peminjam);
            $('[name="awal_sewa_edit"]').val(awal_sewa);
            $('[name="akhir_sewa_edit"]').val(akhir_sewa);
            $('[name="harga_sewa_edit"]').val(harga_sewa);
            $('[name="status_sewa_edit"]').val(status_sewa);
            
        });

        //update record to database
         $('#btn_update').on('click',function(){
            var kode_sewa = $('#kode_sewa_edit').val();
            var no_ps = $('#no_ps_edit').val();
            var type        = $('#type_edit').val();      
            var nama_peminjam        = $('#nama_peminjam_edit').val();
            var awal_sewa        = $('#awal_sewa_edit').val();
            var akhir_sewa        = $('#akhir_sewa_edit').val();
            var harga_sewa        = $('#harga_sewa_edit').val();
            var status_sewa        = $('#status_sewa_edit').val();
            
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/update')?>",
                dataType : "JSON",
                data : {kode_sewa:kode_sewa, no_ps:no_ps, type:type, nama_peminjam:nama_peminjam, awal_sewa:awal_sewa, akhir_sewa:akhir_sewa, harga_sewa:harga_sewa, status_sewa:status_sewa},
                success: function(data){
                    $('[name="kode_sewa_edit"]').val("");
                    $('[name="no_ps_edit"]').val("");
                    $('[name="type_edit"]').val("");
                    $('[name="nama_peminjam_edit"]').val("");
                    $('[name="awal_sewa_edit"]').val("");
                    $('[name="akhir_sewa_edit"]').val("");
                    $('[name="harga_sewa_edit"]').val("");
                    $('[name="status_sewa_edit"]').val("");
                    
                    $('#Modal_Edit').modal('hide');
                    show_product();
                }
            });
            return false;
        });

        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var kode_sewa = $(this).data('kode_sewa');
            
            $('#Modal_Delete').modal('show');
            $('[name="kode_sewa_delete"]').val(kode_sewa);
        });

        //delete record to database
         $('#btn_delete').on('click',function(){
            var kode_sewa = $('#kode_sewa_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/delete')?>",
                dataType : "JSON",
                data : {kode_sewa:kode_sewa},
                success: function(data){
                    $('[name="kode_sewa_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
            return false;
        });

	});

</script>
</body>
</html>