<script src="<?php echo SITE_BACK_ASSETS_JS; ?>/islem.js" type="text/javascript"></script>

<style type="text/css">
    .well { background: #fff; text-align: center; }
    .modal { text-align: left; }
</style>
<link rel="stylesheet" href="<?php echo SITE_BACK_ASSETS_PLUGINS_DATATABLES; ?>/dataTables.bootstrap.css">
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                       <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Anasayfa Ana İçerikler</h3>
                        </div><!-- /.box-header --> 
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>İçerik Başlık</th>
                                        <th>Açıklama</th>
                                        <th>İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $miktar = 2;
                                    for ($k = 0; $k < $miktar; $k++) {
                                        ?>
                                        <tr id="aanatable_<?php echo $model[0][$k]["id"]; ?>">

                                            <td><?php echo $model[0][$k]["baslik"]; ?></td>
                                            <td><?php echo $model[0][$k]["icerik"]; ?></td>
                                            <td>
                                                <a id="aanaduzenle" value="<?php echo $model[0][$k]["id"]; ?>" class="btn btn-sm btn-success" style="cursor:pointer" title="Düzenle"><i  class="fa fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                           
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Anasayfa Alt İçerikler</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>İçerik Başlık</th>
                                        <th>Açıklama</th>
                                        <th>İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $miktar = count($model[1]);
                                    for ($k = 0; $k < $miktar; $k++) {
                                        ?>
                                        <tr id="aatable_<?php echo $model[1][$k]["id"]; ?>">

                                            <td><?php echo $model[1][$k]["alt_icerik_baslik"]; ?></td>
                                             <td><?php echo $model[1][$k]["alt_icerik"]; ?></td>
                                            <td>
                                                <a id="aaduzenle" value="<?php echo $model[1][$k]["id"]; ?>" class="btn btn-sm btn-success" style="cursor:pointer" title="Düzenle"><i  class="fa fa-edit"></i></a>
                                           </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                        
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div>
    <div id="anasayfaModal" class="modal fade">
        <div class="modal-dialog">
            <input type="hidden" id="sakliID" value="">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">İçerik Düzenle</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box-body form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">İçerik Başlık</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="abaslik" name="abaslik" value="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">İçerik</label>
                                <div class="col-sm-9">
                                     <input type="text" class="form-control" id="aicerik" name="aicerik" value="" required>
                                 </div>    
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Vazgeç</button>
                            <button type="button" class="btn btn-primary" id="aIcerikDuzenle">Düzenle</button>
                        </div>
                    </div>
                </div>
        </div>
    </div> <!-- /.content-wrapper -->
    
     <div id="anasayfaAnaModal" class="modal fade">
        <div class="modal-dialog">
            <input type="hidden" id="anasakliID" value="">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Ana İçerik Düzenle</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box-body form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Ana İçerik Başlık</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="anabaslik" name="anabaslik" value="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Ana İçerik</label>
                                <div class="col-sm-9">
                                     <input type="text" class="form-control" id="anaicerik" name="anaicerik" value="" required>
                                 </div>    
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Vazgeç</button>
                            <button type="button" class="btn btn-primary" id="aAnaIcerikDuzenle">Düzenle</button>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<!-- Control Sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<script src="<?php echo SITE_BACK_ASSETS_BOOTSTRAPJS; ?>/bootstrap.min.js"></script>
<div class="control-sidebar-bg"></div>
<!-- jQuery 2.1.4 -->
<script src="<?php echo SITE_BACK_ASSETS_PLUGINS; ?>/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo SITE_BACK_ASSETS_BOOTSTRAPJS; ?>/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo SITE_BACK_ASSETS_PLUGINS_DATATABLES; ?>/jquery.dataTables.min.js"></script>
<script src="<?php echo SITE_BACK_ASSETS_PLUGINS_DATATABLES; ?>/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo SITE_BACK_ASSETS_PLUGINS; ?>/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo SITE_BACK_ASSETS_PLUGINS; ?>/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo SITE_BACK_ASSETS_DISTJS; ?>/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo SITE_BACK_ASSETS_DISTJS; ?>/demo.js"></script>
<!-- Bootstrap 3.3.5 -->
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });

    $(".sidebar-toggle").click(function () {
        if ($('body').hasClass("sidebar-collapse")) {
            $('body').removeClass("sidebar-collapse");
        } else {
            $('body').addClass("sidebar-collapse");
        }
    });
</script>
