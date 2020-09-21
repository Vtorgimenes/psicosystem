<?php
include './TFuncao.php';
if ($_POST) {
    TFuncoes::login($_POST["email"], $_POST["password"]);
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Projects - Inicio</title>
    <?php require("componentes/header_importacoes.html");?>
</head>

<body>
    <?php require("componentes/topo.html");?>
    <main class="page projets-page">
        <section class="portfolio-block project-no-images">
            <div class="container">
                <!-- Start: portfolio heading -->
                <div class="heading">
                    <h2>Seja bem vindo psicologo</h2>
                </div>
                <!-- End: portfolio heading -->
                <p>Psicologo, aqui você tem disponível um pequeno painel de controle com algumas funções. Lembre-se sempre de visualizar suas consultas pré-agendadas para decidir se serão agendadas ou não.&nbsp;<br>&nbsp;<br>Caso seja necessário cadastrar
                    um plano de saúde pelo qual você não atenda, envie um e-mail para 'Psicosystembusiness@gmail.com' para que ele seja incluído dentro do sistema. (Realizar a solicitação com pelo menos 48 horas antes de realizar a consulta.<br><br></p>
                <div
                    class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="project-card-no-image">
                            <h3>Não se esqueça de checar seu e-mail para visualizar seus pacientes Pré agendados.</h3>
                            <h4>Responda o e-mail de confirmação já com o link ou o numero do boleto do pagamento da consulta.</h4>
                            <!-- Start: AXY Modal Demo Button -->
                            <div class="text-center">
                                <div class="modal fade" role="dialog" tabindex="-1" id="myModal">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <!-- Start: 888 -->
                                            <div class="modal-header">
                                                <h5 class="text-center">Aqui estão suas consultas do dia :)</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                            <!-- End: 888 -->
                                            <div class="modal-body">
                                                <p class="text-center text-muted">Nenhum paciente agendado para o dia de hoje.</p>
                                            </div>
                                            <div class="modal-footer"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End: AXY Modal Demo Button -->
                            <!-- Start: AXY Modal Demo Button -->
                            <div class="text-center">
                                <div class="modal fade" role="dialog" tabindex="-1" id="myModal">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4>Modal Title</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                            <div class="modal-body">
                                                <p class="text-center text-muted">Description </p>
                                            </div>
                                            <div class="modal-footer"><button class="btn btn-light" data-dismiss="modal" type="button">Close</button><button class="btn btn-primary" type="button">Save</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End: AXY Modal Demo Button -->
                            <div class="modal fade" role="dialog" tabindex="-1">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Modal Title</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                        <div class="modal-body">
                                            <p>The content of your modal.</p>
                                        </div>
                                        <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tags"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="text-danger project-card-no-image">
                            <h3 style="color: rgb(0,0,0);">Arquivos</h3>
                            <h4 style="color: rgb(0,0,0);">Crie uma pasta no Google Drive para adicionar Materiais e disponibilizar para seus pacientes.</h4><a class="btn btn-outline-primary btn-sm" role="button" href="#">Entrar</a>
                            <div class="tags"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="project-card-no-image">
                            <h3 class="display-4" style="filter: hue-rotate(360deg);">Psicologo não esqueça de checar Diariamante seu e-mail pra verificar suas consultas pré agendadas.</h3>
                            <div class="tags"></div>
                        </div>
                    </div>
            </div>
            </div>
        </section>
    </main>
    <div class="container-fluid">
        <h3 class="text-center text-dark mb-4">Consultas já realizada</h3>
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 text-nowrap">
                        <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Filtro&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right dataTables_filter" id="dataTable_filter"><label></label></div>
                    </div>
                </div>
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="dataTable">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Data</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        /**
                         * exemplo para você listar algo na tela
                         */
                            // colocar ao certo os campos do banco de dados, colocar o nome da tabela
                            $sql = 'SELECT id, nome, data, valor FROM agendamentos;';
                    
                            //tive que usar mysqli_query pois a funcao pra preencher tabela nao estava funcionando
                            $resultado = mysqli_query(TFuncoes::AddConexao(), $sql);
                           // echo $sqlEditar;
                            while($registro = mysqli_fetch_assoc($resultado)){
                                // colocar ao certo os campos do banco de dados dentro dos [""] aonde tem ["nome"]
                                echo '<tr>';
                                        echo '<td><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/favteste.png?h=98b0d64a468f6a5f152be18dc94d4bbe">'.$registro["nome"].'</td>';
                                        echo '<td>'.$registro["data"].'</td>';
                                        echo '<td>'.$registro["valor"].'</td>';
                                    echo '</tr>';
                                }

                             ?>
                        </tbody>
                        <tfoot>
                            <tr></tr>
                        </tfoot>
                    </table>
                </div><button class="btn btn-primary btn-block btn-sm text-center" type="button">Sair&nbsp;</button></div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/smart-forms.min.js?h=a52d057774a957ffc5c4e3aabf79520a"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="../assets/js/script.min.js?h=64241765bd4451a847941a9a75856ee8"></script>
</body>

</html>