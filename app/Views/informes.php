<div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Grana</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Nuevo dictamen</li>
                            </ol>
                            <a href="/home/nuevoReporte"><button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class="fa fa-plus-circle"></i> Nuevo</button></a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                                
                                <h4 class="card-title">Dictámenes</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="example23"
                                        class="display nowrap table table-hover table-striped border"
                                        cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>No. Dictamen</th>
                                                <th>Programa académico</th>
                                                <th>Fecha</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>No. Dictamen</th>
                                                <th>Programa académico</th>
                                                <th>Fecha</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                            foreach ($datos as $dato) {
                                            ?>
                                            <tr>
                                                <td><?php echo $dato['id']; ?></td>
                                                <td><a href="/home/editarReporte/<?php echo $dato['id']; ?>"><?php echo $dato['cert_no']; ?></a></td>
                                                <td><a href="/home/editarReporte/<?php echo $dato['id']; ?>"><?php echo $dato['programa_academico']; ?></a></td>
                                                <td><?php echo $dato['fecha_mod']; ?></td>
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