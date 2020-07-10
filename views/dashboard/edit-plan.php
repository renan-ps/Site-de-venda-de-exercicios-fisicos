<?php
echo \Classes\ClassLayout::setHeadRestrito('admin');
echo \Classes\ClassLayout::getHeadDashboard();
echo \Classes\ClassLayout::getSidebarDashboard($_SESSION['permition']);

use Classes\ClassPlano;

$plano = new ClassPlano();
$plano = $plano->getPlan($_GET['id']);

?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo $plano['titulo']; ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo DIRPAGE . 'dashboard' ?>">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo DIRPAGE . 'dashboard/plans' ?>">Planos</a></li>
                        <li class="breadcrumb-item active"><?php echo $plano['titulo']; ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements disabled -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edite o plano</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data"
                                  action="<?php echo DIRPAGE . 'controllers/controllerEditarPlano' ?>">
                                <input type="hidden" value="<?php echo $plano['id'] ?>" id="idPlano", name="idPlano">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label for="titulo">Título do plano</label>
                                            <input type="text" class="form-control" name="titulo" id="titulo"
                                                   value="<?php echo $plano['titulo']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="subtitulo">Subtítulo</label>
                                            <input class="form-control" rows="2" name="subtitulo"
                                                   id="subtitulo" value="<?php echo $plano['subtitulo']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="descricaoIndex">Mini-descrição</label>
                                            <textarea class="form-control" rows="2" name="descricaoIndex"
                                                      id="descricaoIndex"><?php echo $plano['descricaoIndex'] ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="descricao">Descrição completa</label>
                                            <textarea class="form-control" rows="3" name="descricao"
                                                      id="descricao"><?php echo $plano['descricao'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Banner</label>
                                            <img class="img-fluid mb-1" id="previewImg1" name="previewImg1"
                                                 src="<?php echo DIRIMG . $plano['img1'] ?>" alt="">
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" onchange="previewImagem()"
                                                           class="custom-file-input" id="img1" name="img1">
                                                    <label class="custom-file-label" for="img1">Escolha a
                                                        imagem</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="row">
                                                <label>Mini-imagem</label>
                                            </div>
                                            <div class="row">
                                                <img class="img-fluid mb-1" id="previewImg2" name="previewImg2"
                                                     src="<?php echo DIRIMG . $plano['img2'] ?>" alt="">
                                                <div class="input-group mb-3">
                                                    <div class="custom-file">
                                                        <input type="file" onchange="previewImagem2()" class="
                                                           custom-file-input" id="img2" name="img2">
                                                        <label class="custom-file-label" for="img2">Escolha a
                                                            imagem</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label for="titulo">Preço</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">€</div>
                                                </div>
                                                <input type="text" class="form-control" name="preco" id="preco"
                                                       value="<?php echo $plano['preco']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label for="titulo">Duração (meses)</label>
                                            <input type="text" class="form-control" name="duracao" id="duracao"
                                                   value="<?php echo $plano['duracao']; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Salvar</button>
                                            <a type="submit" class="btn btn-secondary"
                                               href="<?php echo DIRPAGE . 'dashboard/plans' ?>">Voltar</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- general form elements disabled -->

                </div>


            </div>
            <!-- /.row -->
            <!-- Main row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


<?php
echo \Classes\ClassLayout::getFooterDashboard();
?>
<script src="<?php echo DIRJS . 'vanilla-masker.min.js'?>"></script>
<script>
 VMasker(document.querySelector("#preco")).maskMoney({
            // Decimal precision -> "90"
            precision: 2,
            // Decimal separator -> ",90"
            separator: '.',
            // Number delimiter -> "12.345.678"
            delimiter: ' ',
        });


    function previewImagem() {
        var image1 = document.querySelector('input[name=img1]').files[0];
        var previewImage1 = document.querySelector('img[name=previewImg1]');
        var reader = new FileReader();
        reader.onloadend = function () {
            previewImage1.src = reader.result;
        }
        if (image1) {
            reader.readAsDataURL(image1);
        } else {
            previewImage1.src = "";
        }
    }

    function previewImagem2() {
        var image2 = document.querySelector('input[name=img2]').files[0];
        var previewImage2 = document.querySelector('img[name=previewImg2]');
        var reader = new FileReader();
        reader.onloadend = function () {
            previewImage2.src = reader.result;
        }
        if (image2) {
            reader.readAsDataURL(image2);
        } else {
            previewImage2.src = "";
        }
    }
</script>