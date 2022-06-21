<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Blank Page</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
    <div class="card-header">
        <h3 class="card-title">Form Dosen</h3>

        <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
        </button>
        </div>
    </div>
    <div class="card-body">
    <div class="col-md-12">

    <?php echo form_open("dosen/save")?>
<div class="form-group row">
<label for="nidn" class="col-4 col-form-label">NIDN</label> 
<div class="col-8">
    <div class="input-group">
    <div class="input-group-prepend">
        <div class="input-group-text">
        <i class="fa fa-address-card"></i>
        </div>
    </div> 
    <input id="nidn" name="nidn" type="text" class="form-control">
    </div>
</div>
</div>
<div class="form-group row">
<label for="nama" class="col-4 col-form-label">Nama</label> 
<div class="col-8">
    <input id="nama" name="nama" type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<label for="gender" class="col-4 col-form-label">Gender</label> 
<div class="col-8">
    <input id="gender" name="gender" type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
<div class="col-8">
    <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
<div class="col-8">
    <input id="tgl_lahir" name="tgl_lahir" type="text" class="form-control">
</div>
</div>
<div class="form-group row">
<label for="pendidikan" class="col-4 col-form-label">Pendidikan</label> 
<div class="col-8">
    <input id="pendidikan" name="pendidikan" type="text" class="form-control">
</div>
</div> 
<div class="form-group row">
<div class="offset-4 col-8">
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
<?php echo form_close()?>

    </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->