 <div class="col-lg-12">




                        <h1 class="page-header">
                            Clifor
                            <small>Cadastro de clientes e fornecedores</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="/">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Clifor
                            </li>
                        </ol>

                    
                       <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>nome</th>
                                        <th>ativo</th>
                                        <th>documento</th>
                                        <th>tipo</th>
                                        <th>acao</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($clifor as $clifor): ?>
                                    <tr>
                                        <td><?= $clifor->idclifor ?></td>
                                        <td>
                                            <?= $this->Html->link($clifor->nome, ['action' => 'view', $clifor->idclifor]) ?>
                                        </td>
                                        <td>
                                            <?= $clifor->ativo ?>
                                        </td>
                                        <td>
                                            <?= $clifor->documento ?>
                                        </td>
                                        <td>
                                            <?= $clifor->tipo ?>
                                        </td>
                                        <td>
                                            editar | excluir
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                     
                                </tbody>
                            </table>
                        </div>

</div> 
                        