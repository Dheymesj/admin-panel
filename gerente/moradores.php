<!DOCTYPE html>
<html lang="pt-br">

<!--Header-->
<?php include_once('./php/header.php');?>
<!--Header-->

<body class="adminbody">

<div id="main">

	<!-- top bar navigation -->
    <?php 
    session_start();

    if(@$_SESSION['status']){
        $_SESSION['usuario'] = true;    
    }else{
        $_SESSION['usuario'] = false;
    }

    

    if($_SESSION['usuario']){
        include_once('./php/top_side.php');//top
        include_once('./php/left_side.php');//left
    }

    
    ?>
	


    <div class="content-page">	
		<!-- Start content -->
        <div class="content">            
			<div class="container-fluid" id="conteudo">	
<!-- Descrição Curta-->
<div class="row">
    <div class="col-xl-12">
        <div class="breadcrumb-holder">
            <h1 class="main-title float-left">Moradores</h1>
            <ol class="breadcrumb float-right">
                <li class="breadcrumb-item">Início</li>
                <li class="breadcrumb-item active">Moradores</li>
            </ol>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- Row principal -->
<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

        <div class="card mb-3">

            <div class="card-header">
                <span class="pull-right"><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_add_user"><i class="fa fa-user-plus" aria-hidden="true"></i> Add Novo Morador</button></span>
                <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="modal_add_user" aria-hidden="true" id="modal_add_user">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <form action="./moradores.php" id='form_morador' method="POST" accept-charset="utf-8">
                                <div class="modal-header">
                                    <h5 class="modal-title">Cadastro de Morador</h5>
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span>
                                    </button>
                                </div>

                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Nome Completo (obrigatório)</label>
                                                <input class="form-control" name="nome" type="text" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="genero">Informe o Sexo do Morador (obrigatório)</label>
                                                    <br/>
                                                    <div class='row'>
                                                        <div class='col-md-6'>
                                                            <input type="radio" name="sexo" value="M" required> Masculino
                                                            <br/>
                                                        </div>
                                                        <div class='col-md-6'>
                                                            <input type="radio" name="sexo" value="F" required> Feminino</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Curso (obrigatório)</label>
                                                <select name="curso" class="form-control" required>
                                                    <option value="">- Buscar Curso -</option>
                                                    <optgroup label="Universidade Federal Fluminense">
                                                        <option value="Administração">Administração</option>
                                                        <option value="Administração Pública">Administração Pública</option>
                                                        <option value="Antropologia">Antropologia</option>
                                                        <option value="Arquitetura e Urbanismo">Arquitetura e Urbanismo</option>
                                                        <option value="Arquivologia">Arquivologia</option>
                                                        <option value="Artes">Artes</option>
                                                        <option value="Biblioteconomia e Documentação">Biblioteconomia e Documentação</option>
                                                        <option value="Biomedicina">Biomedicina</option>
                                                        <option value="Ciência Ambiental">Ciência Ambiental</option>
                                                        <option value="Ciência da Computação">Ciência da Computação</option>
                                                        <option value="Ciências Atuariais">Ciências Atuariais</option>
                                                        <option value="Ciências Biológicas">Ciências Biológicas</option>
                                                        <option value="Ciências Contábeis">Ciências Contábeis</option>
                                                        <option value="Ciências Econômicas">Ciências Econômicas</option>
                                                        <option value="Ciências Naturais">Ciências Naturais</option>
                                                        <option value="Ciências Sociais">Ciências Sociais</option>
                                                        <option value="Cinema e Audiovisual">Cinema e Audiovisual</option>
                                                        <option value="Computação">Computação</option>
                                                        <option value="Comunicação Social - Jornalismo">Comunicação Social - Jornalismo</option>
                                                        <option value="Comunicação Social - Publicidade e Propaganda">Comunicação Social - Publicidade e Propaganda</option>
                                                        <option value="Desenho Industrial">Desenho Industrial</option>
                                                        <option value="Direito">Direito</option>
                                                        <option value="Educação Física">Educação Física</option>
                                                        <option value="Enfermagem">Enfermagem</option>
                                                        <option value="Engenharia Agrícola e Ambiental">Engenharia Agrícola e Ambiental</option>
                                                        <option value="Engenharia Civil">Engenharia Civil</option>
                                                        <option value="Engenharia de Agronegócios">Engenharia de Agronegócios</option>
                                                        <option value="Engenharia de Petróleo">Engenharia de Petróleo</option>
                                                        <option value="Engenharia de Produção">Engenharia de Produção</option>
                                                        <option value="Engenharia de Recursos Hídricos e do Meio Ambiente">Engenharia de Recursos Hídricos e do Meio Ambiente</option>
                                                        <option value="Engenharia de Telecomunicações">Engenharia de Telecomunicações</option>
                                                        <option value="Engenharia Elétrica">Engenharia Elétrica</option>
                                                        <option value="Engenharia Mecânica">Engenharia Mecânica</option>
                                                        <option value="Engenharia Metalúrgica">Engenharia Metalúrgica</option>
                                                        <option value="Engenharia Química">Engenharia Química</option>
                                                        <option value="Estatística">Estatística</option>
                                                        <option value="Estudos de Mídia">Estudos de Mídia</option>
                                                        <option value="Farmácia">Farmácia</option>
                                                        <option value="Filosofia">Filosofia</option>
                                                        <option value="Física">Física</option>
                                                        <option value="Física com ênfase em Física Computacional">Física com ênfase em Física Computacional</option>
                                                        <option value="Fonoaudiologia">Fonoaudiologia</option>
                                                        <option value="Geofísica">Geofísica</option>
                                                        <option value="Geografia">Geografia</option>
                                                        <option value="História">História</option>
                                                        <option value="Hotelaria">Hotelaria</option>
                                                        <option value="Interdisciplinar em Educação do Campo">Interdisciplinar em Educação do Campo</option>
                                                        <option value="Jornalismo">Jornalismo</option>
                                                        <option value="Letras - Alemão">Letras - Alemão</option>
                                                        <option value="Letras - Espanhol">Letras - Espanhol</option>
                                                        <option value="Letras - Francês">Letras - Francês</option>
                                                        <option value="Letras - Grego">Letras - Grego</option>
                                                        <option value="Letras - Inglês">Letras - Inglês</option>
                                                        <option value="Letras - Italiano">Letras - Italiano</option>
                                                        <option value="Letras - Latim">Letras - Latim</option>
                                                        <option value="Letras - Português">Letras - Português</option>
                                                        <option value="Letras- Francês">Letras- Francês</option>
                                                        <option value="Matemática">Matemática</option>
                                                        <option value="Matemática com ênfase em Matemática Computacional">Matemática com ênfase em Matemática Computacional</option>
                                                        <option value="Medicina">Medicina</option>
                                                        <option value="Medicina Veterinária">Medicina Veterinária</option>
                                                        <option value="Nutrição">Nutrição</option>
                                                        <option value="Odontologia">Odontologia</option>
                                                        <option value="Pedagogia">Pedagogia</option>
                                                        <option value="Políticas Públicas">Políticas Públicas</option>
                                                        <option value="Processos Gerenciais">Processos Gerenciais</option>
                                                        <option value="Produção Cultural">Produção Cultural</option>
                                                        <option value="Psicologia">Psicologia</option>
                                                        <option value="Química">Química</option>
                                                        <option value="Química Industrial">Química Industrial</option>
                                                        <option value="Relações Internacionais">Relações Internacionais</option>
                                                        <option value="Segurança Pública">Segurança Pública</option>
                                                        <option value="Serviço Social">Serviço Social</option>
                                                        <option value="Sistemas de Informação">Sistemas de Informação</option>
                                                        <option value="Sociologia">Sociologia</option>
                                                        <option value="Turismo">Turismo</option>
                                                    </optgroup>

                                                    <optgroup label="Faculdade Privada">
                                                        <option value="Outros">Outros Cursos</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Telefone (obrigatório)</label>
                                                <input class="form-control" name="tel" type="number" required/>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6">
										<div class="form-group">
                                                <label>Mensalidade (obrigatório)</label>
                                                <input class="form-control" name="mensalidade" type="number" placeholder='R$' required/>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Situação de Moradia (obrigatório)</label>
                                                <select name="quarto" class="form-control" required>
													<option value="">-- Tipo de Quarto --</option>
													<option value="Quadruplo">Quarto Quadruplo</option>
                                                    <option value="Duplo">Quarto Duplo</option>
                                                </select>
                                            </div>
                                        </div>

									</div>
									<input name='status' value='add_morador' type='hidden'>   
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Incluir Morador</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
                <h3><i class="fa fa-user"></i> All users (4 users)</h3>
            </div>
            <!-- end card-header -->

            <div class="card-body">


                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width:50px">ID</th>
                                <th>User details</th>
                                <th style="width:130px">Role</th>
                                <th style="width:150px">Articles</th>
                                <th style="width:120px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th>
                                    5 </th>

                                <td>
                                    <span style="float: left; margin-right:10px;"><img alt="image" style="max-width:40px; height:auto;" src="assets/images/avatars/avatar1.png" /></span>
                                    <strong>Gabriel Gaby</strong>
                                    <br />
                                    <small>webmaster@website.com</small>
                                </td>

                                <td>Author</td>


                                <td>0</td>

                                <td>
                                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_edit_user_5"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-hidden="true" id="modal_edit_user_5">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <form action="#" method="post" enctype="multipart/form-data">


                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit user</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">

                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Full name (required)</label>
                                                                    <input class="form-control" name="name" type="text" required value="Gabriel Gaby" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Valid Email (required)</label>
                                                                    <input class="form-control" name="email" type="email" required value="webmaster@website.com" />
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Password (empty not to change)</label>
                                                                    <input class="form-control" name="password" type="text" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Role</label>
                                                                    <select name="role_id" class="form-control" required>
                                                                        <option value="">- select -</option>
                                                                        <optgroup label="Staff member">
                                                                            <option value="1">Administrator</option>
                                                                            <option value="2">Manager</option>
                                                                            <option selected="selected" value="3">Author</option>
                                                                        </optgroup>

                                                                        <optgroup label="Registered member">
                                                                            <option value="4">User</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Skype (optional)</label>
                                                                    <input class="form-control" name="skype" type="text" value="pppp" />
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Email verified</label>
                                                                    <select name="email_verified" class="form-control">
                                                                        <option selected="selected" value="1">YES</option>
                                                                        <option value="0">NO</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Active</label>
                                                                    <select name="active" class="form-control">
                                                                        <option selected="selected" value="1">YES</option>
                                                                        <option value="0">NO</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="form-group">
                                                            <label>Change avatar (optional):</label>
                                                            <br />
                                                            <input type="file" name="image">
                                                        </div>

                                                    </div>

                                                    <div class="modal-footer">
                                                        <input type="hidden" name="user_id" value="5" />
                                                        <button type="button" class="btn btn-primary">Edit user</button>
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:deleteRecord_5('5');" class="btn btn-danger btn-sm" data-placement="top" data-toggle="tooltip" data-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    <script>
                                        function deleteRecord_5(RecordId) {
                                            if (confirm('Confirm delete')) {
                                                window.location.href = '#';
                                            }
                                        }
                                    </script>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    4 </th>

                                <td>
                                    <span style="float: left; margin-right:10px;"><img alt="image" style="max-width:40px; height:auto;" src="assets/images/avatars/avatar2.png" /></span>
                                    <strong>Test Author</strong>
                                    <br />
                                    <small>user@website.com</small>
                                </td>

                                <td>Author</td>


                                <td>0</td>

                                <td>
                                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_edit_user_4"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-hidden="true" id="modal_edit_user_4">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <form action="#" method="post" enctype="multipart/form-data">


                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit user</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">

                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Full name (required)</label>
                                                                    <input class="form-control" name="name" type="text" required value="Test Author" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Valid Email (required)</label>
                                                                    <input class="form-control" name="email" type="email" required value="user@website.com" />
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Password (empty not to change)</label>
                                                                    <input class="form-control" name="password" type="text" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Role</label>
                                                                    <select name="role_id" class="form-control" required>
                                                                        <option value="">- select -</option>
                                                                        <optgroup label="Staff member">
                                                                            <option value="1">Administrator</option>
                                                                            <option value="2">Manager</option>
                                                                            <option selected="selected" value="3">Author</option>
                                                                        </optgroup>

                                                                        <optgroup label="Registered member">
                                                                            <option value="4">User</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Skype (optional)</label>
                                                                    <input class="form-control" name="skype" type="text" value="skype_author" />
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Email verified</label>
                                                                    <select name="email_verified" class="form-control">
                                                                        <option selected="selected" value="1">YES</option>
                                                                        <option value="0">NO</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Active</label>
                                                                    <select name="active" class="form-control">
                                                                        <option selected="selected" value="1">YES</option>
                                                                        <option value="0">NO</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="form-group">
                                                            <label>Change avatar (optional):</label>
                                                            <br />
                                                            <input type="file" name="image">
                                                        </div>

                                                    </div>

                                                    <div class="modal-footer">
                                                        <input type="hidden" name="user_id" value="4" />
                                                        <button type="button" class="btn btn-primary">Edit user</button>
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:deleteRecord_4('4');" class="btn btn-danger btn-sm" data-placement="top" data-toggle="tooltip" data-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    <script>
                                        function deleteRecord_4(RecordId) {
                                            if (confirm('Confirm delete')) {
                                                window.location.href = '#';
                                            }
                                        }
                                    </script>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    2 </th>

                                <td>
                                    <span style="float: left; margin-right:10px;"><img alt="image" style="max-width:40px; height:auto;" src="assets/images/avatars/avatar3.png" /></span>
                                    <strong>Test Manager</strong>
                                    <br />
                                    <small>manager@website.com</small>
                                </td>

                                <td>Manager</td>


                                <td>0</td>

                                <td>
                                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_edit_user_2"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-hidden="true" id="modal_edit_user_2">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <form action="#" method="post" enctype="multipart/form-data">


                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit user</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">

                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Full name (required)</label>
                                                                    <input class="form-control" name="name" type="text" required value="Test Manager" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Valid Email (required)</label>
                                                                    <input class="form-control" name="email" type="email" required value="manager@website.com" />
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Password (empty not to change)</label>
                                                                    <input class="form-control" name="password" type="text" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Role</label>
                                                                    <select name="role_id" class="form-control" required>
                                                                        <option value="">- select -</option>
                                                                        <optgroup label="Staff member">
                                                                            <option value="1">Administrator</option>
                                                                            <option selected="selected" value="2">Manager</option>
                                                                            <option value="3">Author</option>
                                                                        </optgroup>

                                                                        <optgroup label="Registered member">
                                                                            <option value="4">User</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Skype (optional)</label>
                                                                    <input class="form-control" name="skype" type="text" value="skype_manager" />
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Email verified</label>
                                                                    <select name="email_verified" class="form-control">
                                                                        <option selected="selected" value="1">YES</option>
                                                                        <option value="0">NO</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Active</label>
                                                                    <select name="active" class="form-control">
                                                                        <option selected="selected" value="1">YES</option>
                                                                        <option value="0">NO</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="form-group">
                                                            <label>Change avatar (optional):</label>
                                                            <br />
                                                            <input type="file" name="image">
                                                        </div>

                                                    </div>

                                                    <div class="modal-footer">
                                                        <input type="hidden" name="user_id" value="2" />
                                                        <button type="button" class="btn btn-primary">Edit user</button>
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:deleteRecord_2('2');" class="btn btn-danger btn-sm" data-placement="top" data-toggle="tooltip" data-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    <script>
                                        function deleteRecord_2(RecordId) {
                                            if (confirm('Confirm delete')) {
                                                window.location.href = '#';
                                            }
                                        }
                                    </script>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    1 </th>

                                <td>
                                    <span style="float: left; margin-right:10px;"><img alt="image" style="max-width:40px; height:auto;" src="assets/images/avatars/avatar4.png" /></span>
                                    <strong>Pike Admin</strong>
                                    <br />
                                    <small>demo@pikephp.com</small>
                                </td>

                                <td>Administrator</td>


                                <td>8</td>

                                <td>
                                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_edit_user_1"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-hidden="true" id="modal_edit_user_1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <form action="#" method="post" enctype="multipart/form-data">


                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit user</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">

                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Full name (required)</label>
                                                                    <input class="form-control" name="name" type="text" required value="Pike Admin" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Valid Email (required)</label>
                                                                    <input class="form-control" name="email" type="email" required value="demo@pikephp.com" />
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Password (empty not to change)</label>
                                                                    <input class="form-control" name="password" type="text" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Role</label>
                                                                    <select name="role_id" class="form-control" required>
                                                                        <option value="">- select -</option>
                                                                        <optgroup label="Staff member">
                                                                            <option selected="selected" value="1">Administrator</option>
                                                                            <option value="2">Manager</option>
                                                                            <option value="3">Author</option>
                                                                        </optgroup>

                                                                        <optgroup label="Registered member">
                                                                            <option value="4">User</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Skype (optional)</label>
                                                                    <input class="form-control" name="skype" type="text" value="pikephp" />
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Email verified</label>
                                                                    <select name="email_verified" class="form-control">
                                                                        <option selected="selected" value="1">YES</option>
                                                                        <option value="0">NO</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Active</label>
                                                                    <select name="active" class="form-control">
                                                                        <option selected="selected" value="1">YES</option>
                                                                        <option value="0">NO</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="form-group">
                                                            <label>Change avatar (optional):</label>
                                                            <br />
                                                            <input type="file" name="image">
                                                        </div>

                                                    </div>

                                                    <div class="modal-footer">
                                                        <input type="hidden" name="user_id" value="1" />
                                                        <button type="button" class="btn btn-primary">Edit user</button>
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:deleteRecord_1('1');" class="btn btn-danger btn-sm" data-placement="top" data-toggle="tooltip" data-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    <script>
                                        function deleteRecord_1(RecordId) {
                                            if (confirm('Confirm delete')) {
                                                window.location.href = '';
                                            }
                                        }
                                    </script>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>
            <!-- end card-body -->

        </div>
        <!-- end card -->

    </div>
    <!-- end col -->

</div>

</div>
			<!-- END container-fluid -->
		</div>
		<!-- END content -->
    </div>
	<!-- END content-page -->
    
    <!--Footer-->
    <?php
        include_once('./html/footer.html');
    ?>

</div>
<!-- JAVA SCRIPTS -->
    <?php
        include_once('./scripts.html');
    ?>
<!-- END Java Script  -->


</body>
</html>


