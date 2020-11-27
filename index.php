<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba FAC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="offset-x1-3 col-x1-6 py-5">
                <div class="card">
                    <div class="card-header">Sube tu archivo</div>
                    <div class="card-body">
                        <form class="upload_file">
                            <div class="form-group">
                                <label for="file">Archivo a subir</label>
                                <input type="file" class="form-control form-control-file" name="file" id="file" require>
                            </div>

                            <button class="btn btn-success" type="submit">Subir archivo</button>

                            <div class="wrapper mt-5" style="display: none;">
                                <div class="progress progress_wrapper">
                                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated progress_bar" role="progressbar" style="width: 0%;">0%</div>
                                </div>
                            </div>
                        </form>
                        <div class="wrapper_files">
                            <!-- ajax -->
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <small class="text-muted">Hola mundo</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>