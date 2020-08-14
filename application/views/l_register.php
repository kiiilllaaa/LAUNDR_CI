<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.min.css') ?>">
    
    <style>
        body{
            background: #cffffe;
        }

        .card{
            border-radius: 0;
            border: 0;
            
        }

        .card > .card-header{
            background: transparent;
            border-bottom: 1px solid #eee;

        }

        .form-control{
            border-radius: 0;
            background-color: white;
        }

        .form-control:focus{
            box-shadow: none;

        }

        .border-box{
            box-shadow: 0 3px rgba(0, 0, 0, 0.04);
            border: 0px solid rgba(171, 169, 169, 0.06);
        }

        .icon-user{
            float: right;
            margin-top: 1px;
            right: 18px;
        }

        .img1{
            width: 25%;
        }

        .mt-12{
            margin-top: 110px;
        }

        .link-a {
            margin-left: -6%;
        }


 

    </style>
</head>
<body>
<nav class="navbar navbar-primary bg-dark">
        <a class="navbar-brand" href="login">
        <i class="fas fa-angle-double-left"></i> Back
        </a>
    </nav>
    <div class="container">
        <div class="row justify-content-md-center mt-12">
            <div class="col-sm-8 border-box">
                <div class="row">
                    <div class="col-sm-5 p-0 ">
                        <img src="<?php echo base_url ('assets/img/baju.png')?>" class="img-fluid">
    </div>
    <div class="col-sm-7 p-0">
        <div class="card">
            <div class="card-header">
                <img src="<?php echo base_url ('assets/img/regis.png')?>" class="img1" style="width: 150px;">
    </div>

    <form></form>
    <div class="card-body">
        <form action="<?php echo site_url('Dashboard/simpan_data');?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputPassword1">ID</label>
                <div class="input-group">
                    <input type="number" name="idd" class="form-control" placeholder="ID">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Nama</label>
                <div class="input-group">
                    <input type="text" name="namaa" class="form-control" placeholder="Nama">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Alamat</label>
                <div class="input-group">
                    <input type="text" name="alamatt" class="form-control" placeholder="Alamat">
                </div>
                
                <div class="form-group">
                <label for="exampleInputPassword1">Jenis Kelamin</label>
                <div class="input-group">
                    <input type="text" name="jenis_kelaminn" class="form-control" placeholder="Jenis Kelamin">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Phone Number</label>
                    <div class="input-group">
                        <input type="text" name="phonee" class="form-control" placeholder="Phone Number">
                    </div>
                </div>
            </div>
            <a class="dropdown-item link-a">Already have an account? Login</a>
            <div class="form-group">
            <button type="submit" class="btn btn-success" style="margin-left: 5px; width: 200px; font-family: candara; font-size: 25px;">
            <a href="<?php echo site_url('Dashboard/l_register') ?>"></a> Register</button>
        </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

<div class="row">
        <div class="col-sm-12 mt-4">
            <div class="table-responsive mb-4">
                <table id="example" class="table table-striped table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Nama</td>
                        <td>Alamat</td>
                        <td>Jenis Kelamin</td>
                        <td>No. Telepon</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                <!-- <?php  
                    if ($c_regis > 0)
                    {
                        foreach ($regis as $datas)
                    {
                ?> -->
                    <tr>
                        <td><?php echo $datas->id;?></td>
                        <td><?php echo $datas->nama;?></td>
                        <td><?php echo $datas->alamat;?></td>
                        <td><?php echo $datas->jenis_kelamin;?></td>
                        <td><?php echo $datas->phone ?></td>
                        <td>
                            <div class="col-12">
                                <button class="btn btn-success btn-sm edit_data" style="width: 100%;">EDIT</button>
                            </div>
                            <div class="col-12 mt-2">
                                <button id="" class="btn btn-danger btn-sm hapus_data" style="width: 100%;">HAPUS</button>
                            </div>
                        </td>
                    </tr>
                        <?php }
                        }
                        else {
                        ?>
                        <?php
                    }
                        ?>
                </tbody>
            </table>
         </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>