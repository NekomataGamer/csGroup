<?php require_once(APPPATH.'views/comuns/secretaria/header.php'); ?>
<div class="page-container">
    <div class="page-header">
        <nav class="navbar navbar-expand">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav">
                <li class="nav-item small-screens-sidebar-link">
                    <a href="#" class="nav-link"><i class="material-icons-outlined">menu</i></a>
                </li>
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="../../assets/images/avatars/profile-image-1.png" alt="profile image">
                        <span>Nancy Moore</span><i class="material-icons dropdown-icon">keyboard_arrow_down</i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Calendar<span class="badge badge-pill badge-info float-right">2</span></a>
                        <a class="dropdown-item" href="#">Settings &amp Privacy</a>
                        <a class="dropdown-item" href="#">Switch Account</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Log out</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="material-icons-outlined">mail</i></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="material-icons-outlined">notifications</i></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" id="dark-theme-toggle"><i class="material-icons-outlined">brightness_2</i><i class="material-icons">brightness_2</i></a>
                </li>
            </ul>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Tasks</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Reports</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-search">
                <form>
                    <div class="form-group">
                        <input type="text" name="search" id="nav-search" placeholder="Search...">
                    </div>
                </form>
            </div>
        </nav>
    </div>
    <div class="page-content">
        <div class="page-info">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Apps</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Matricular Aluno</li>
                </ol>
            </nav>
            <div class="page-options">
                <a href="#" class="btn btn-secondary">Settings</a>
                <a href="#" class="btn btn-primary">Upgrade</a>
            </div>
        </div>
        <div class="main-wrapper">
            <form method="POST">
                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Matricular Aluno</h5>
                                <p>Area destinada à matricula de Alunos. </p>

                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="exampleInputEmail1">Inscrição INEP/MEC</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="inscricao_inep_mec">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Nome </label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="exampleInputPassword1">Nome Social (Opcional)</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="nome_social">
                                        </div>
                                       <div class="form-group col-md-3">
                                            <label for="exampleInputPassword1">Sexo</label>
                                            <select id="inputState" class="form-control custom-select" name="sexo">
                                                <option value="M">Masculino</option>
                                                <option value="F">Feminino</option>
                                            </select>
                                       </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="exampleInputPassword1">Nascimento</label>
                                            <input type="date" class="form-control" id="exampleInputPassword1" name="nascimento">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="exampleInputPassword1">Estado Cívil</label>
                                            <select id="inputState" class="form-control custom-select" name="sexo">
                                                <option value="Falecido">Falecido</option>
                                                <option value="Não Cadastrado">(Não Cadastrado)</option>
                                                <option value="Casado">Casado(a)</option>
                                                <option value="Solteiro">Solteiro(a)</option>
                                                <option value="Divorciado">Divorciado(a)</option>
                                                <option value="Desquitado">Desquitado(a)</option>
                                                <option value="Viuvo">Viuvo(a)</option>
                                                <option value="Falecido(a)">Falecido(a)</option>
                                                <option value="Não Informado">Não Informado</option>
                                            </select>
                                       </div>
                                       <div class="form-group col-md-3">
                                            <label for="exampleInputPassword1">Profissão</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="profissao">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="exampleInputPassword1">Raça.</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="raca">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Naturalidade</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="naturalidade">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputPassword1">Nacionalidade</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="nacionalidade">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputPassword1">UF</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="UF">
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputPassword1">Empresa</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="empresa">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputPassword1">Cargo</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="cargo">
                                        </div>

                                    </div>

                                    <!-- <button type="submit" class="btn btn-primary">Cadastrar Curso</button> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Informações Pedagógicas</h4>
                                <!-- <p>Area destinada ao cadastro de Alunos. </p> -->
                                
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Curso </label>
                                        <select id="inputState" class="form-control custom-select" name="curso">
                                            <option value="">Selecionar Curso</option>
                                            <!-- Foreach com os cursos -->
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Período </label>
                                        <select id="inputState" class="form-control custom-select" name="periodo">
                                            <option value="">Selecionar Período</option>
                                            <!-- Foreach com os períodos -->
                                        </select>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Turma </label>
                                        <select id="inputState" class="form-control custom-select" name="turma">
                                            <option value="">Selecionar Período</option>
                                            <!-- Foreach com os períodos -->
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h4 class="card-title">Informações Financeiras</h4> 
                                    </div>   
                                    <!-- <div class="col-md-2">
                                        <div class="page-options" style="float: right;">
                                            <button type="submit" class="btn btn-primary">+</button>
                                        </div>
                                    </div> -->
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Plano </label>
                                        <select id="inputState" class="form-control custom-select" name="plano">
                                            <option value="0">00 (0x)</option>

                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputPassword1">Dia Venc.</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="dia_venc">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="exampleInputPassword1">Dia Lim.</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="dia_lim">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-10">
                                        <h4 class="card-title">Cobranças</h4> 
                                    </div>   
                                    <div class="col-md-2">
                                        <div class="page-options" style="float: right;">
                                            <button type="submit" class="btn btn-primary">+</button>
                                            <!-- este btn adiciona mais uma div class="form-row" identica a proxima div com o id='primeira_cobranca' -->
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">1º Vencimento.</label>
                                        <input type="date" class="form-control" id="exampleInputPassword1" name="primeiro_vencimento">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Valr. Entr.</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="vlr_entrada">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Dia Venc.</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="dia_venc">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Dia Venc.</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="dia_venc">
                                    </div>
                                </div>

                                <div class="form-row" id="primeira_cobranca">
                                    <div class="form-group col-md-3">
                                        <!-- <label for="exampleInputPassword1">1º Vencimento.</label>
                                        <input type="date" class="form-control" id="exampleInputPassword1" name="primeiro_vencimento"> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <!-- <label for="exampleInputPassword1">Valr. Entr.</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="vlr_entrada"> -->
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Qtd. Parcelas.</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="qtd_parcelas">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Vlr da parc..</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="vlr_parcelas">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h4 class="card-title">Diferenças</h4> 
                                    </div>   
                                    <div class="col-md-2">
                                        <div class="page-options" style="float: right;">
                                            <button type="submit" class="btn btn-primary">+</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Motivo </label>
                                        <select id="inputState" class="form-control custom-select" name="motivo_cobranca">
                                            <option value="0"> (*x)</option>

                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Valor</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="valor_cobranca">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">Perc.</label>
                                        <select id="inputState" class="form-control custom-select" name="perc">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Mês Inicial </label>
                                        <select id="inputState" class="form-control custom-select" name="mes_inicial">
                                            <option value="1">Janeiro</option>
                                            <option value="2">Fevereiro</option>
                                            <option value="3">Março</option>
                                            <option value="4">Abril</option>
                                            <option value="5">Maio</option>
                                            <option value="6">Junho</option>
                                            <option value="7">Julho</option>
                                            <option value="8">Agosto</option>
                                            <option value="9">Setembro</option>
                                            <option value="10">Outubro</option>
                                            <option value="11">Novembro</option>
                                            <option value="12">Dezembro</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">Ano.</label>
                                        <select name="ano_inicial" id="" class="form-control">
                                            <?php for($q = date('Y');$q<=date('Y')+8;$q++):?>
                                                <option value="<?php echo $q;?>"><?php echo $q;?></option>
                                            <?php endfor;?>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">Mês Inicial </label>
                                        <select id="inputState" class="form-control custom-select" name="mes_final">
                                            <option value="1">Janeiro</option>
                                            <option value="2">Fevereiro</option>
                                            <option value="3">Março</option>
                                            <option value="4">Abril</option>
                                            <option value="5">Maio</option>
                                            <option value="6">Junho</option>
                                            <option value="7">Julho</option>
                                            <option value="8">Agosto</option>
                                            <option value="9">Setembro</option>
                                            <option value="10">Outubro</option>
                                            <option value="11">Novembro</option>
                                            <option value="12">Dezembro</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">Ano.</label>
                                        <select name="ano_final" id="" class="form-control">
                                            <?php for($q = date('Y');$q<=date('Y')+8;$q++):?>
                                                <option value="<?php echo $q;?>"><?php echo $q;?></option>
                                            <?php endfor;?>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">Cond.</label>
                                        <select id="inputState" class="form-control custom-select" name="cond">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Documentação</h4>
                                <!-- <p>Area destinada ao cadastro de Alunos. </p> -->
                                
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Sexo </label>
                                        <select id="inputState" class="form-control custom-select" name="sexo">
                                            <option value="M">Macho</option>
                                            <option value="F">Femea</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Nascimento</label>
                                        <input type="date" class="form-control" id="exampleInputPassword1" name="nascimento">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Raça.</label>
                                        <input type="date" class="form-control" id="exampleInputPassword1" name="raca">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Documentação</h4>
                                <!-- <p>Area destinada ao cadastro de Alunos. </p> -->
                                
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">CPF </label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="cpf">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">RG</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="rg">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Orgão Expeditor</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="orgao_expeditor">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Data</label>
                                        <input type="date" class="form-control" id="exampleInputPassword1" name="orgao_expeditor">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">UF</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="UF">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Certidão </label>
                                        <select id="inputState" class="form-control custom-select" name="certidao">
                                            <option value="nao">Não apresentou</option>
                                            <option value="nascimento">Nascimento</option>
                                            <option value="casamento">Casamento</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Num. Certidão</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="num_certidao">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Cartório</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="cartorio">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Livro</label>
                                        <input type="date" class="form-control" id="exampleInputPassword1" name="cert_livro">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">Folha</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="folha">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">Cidade</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="cert_cidade">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">UF</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="cert_uf">
                                    </div>
                                
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Titulo de Eleitor</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="titulo_eleitor">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Zona</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="zona_eleitor">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Seção</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="secao_eleitor">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">UF</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="uf_eleitor">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Certificado de Reservista</label>
                                        <select id="inputState" class="form-control custom-select" name="certificado_reservista">
                                            <option value="nao">Não apresentou</option>
                                            <option value="alistamento">Alistamento</option>
                                            <option value="reservista">Reservista</option>
                                            <option value="disp">Disp. Corporação</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Num. Certificado</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="num_certificado">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Categoria</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="categoria_reservista">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Região</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="regiao_reservista">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">UF</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="uf_reservista">
                                    </div>



                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>




                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Endereço</h4>
                                <!-- <p>Area destinada ao cadastro de Alunos. </p> -->
                                
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">CEP </label>
                                        <input type="text" class="form-control" id="cep" name="cep_residencial">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Endereço Residencial</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="endereco_residencial">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Nº</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="numero_residencial">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Complemento</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="complemento_residencial">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">Bairro</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="bairro_residencial">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">Cidade UF</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="uf_residencial">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Corresp. </label>
                                        <select id="inputState" class="form-control custom-select" name="corresp_residencial">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>

                                </div>


                                
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputEmail1">CEP de Cobranca </label>
                                        <input type="text" class="form-control" id="cep" name="cep_cobranca">
                                        <small id="emailHelp" class="form-text text-muted" >* Preencher se for diferente do endereço residencial.</small>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputPassword1">Endereço Residencial</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="endereco_cobranca">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Nº</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="numero_cobranca">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="exampleInputPassword1">Complemento</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="complemento_cobranca">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">Bairro</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="bairro_cobranca">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">Cidade UF</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="uf_cobranca">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Corresp. </label>
                                        <select id="inputState" class="form-control custom-select" name="corresp_cobranca">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Telefones</h4>
                                <!-- <p>Area destinada ao cadastro de Alunos. </p> -->
                                
                                <div class="form-row">
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">DDD </label>
                                        <input type="text" class="form-control" id="cep" name="DDD">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputPassword1">Tel. Residencial</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="tel_residencial">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="exampleInputPassword1">OBS</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="obs_numero_residencial">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">Cob.</label>
                                        <select id="inputState" class="form-control custom-select" name="cob_num_residencial">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">SMS.</label>
                                        <select id="inputState" class="form-control custom-select" name="cob_num_residencial">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">DDD </label>
                                        <input type="text" class="form-control" id="cep" name="ddd_comercial">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputPassword1">Tel. Comercial</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="tel_comercial">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="exampleInputPassword1">OBS</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="obs_numero_comercial">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">Cob.</label>
                                        <select id="inputState" class="form-control custom-select" name="cob_num_comercial">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">SMS.</label>
                                        <select id="inputState" class="form-control custom-select" name="cob_num_comercial">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Necessidades Especiais</h4>
                                <!-- <p>Area destinada ao cadastro de Alunos. </p> -->
                                
                                <div class="form-row">
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Def. Auditiva</label>
                                        <select id="inputState" class="form-control custom-select" name="def_auditiva">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Def. Mental</label>
                                        <select id="inputState" class="form-control custom-select" name="def_mental">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Baixa Visão</label>
                                        <select id="inputState" class="form-control custom-select" name="baixa_visao">
                                        <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Cegueira</label>
                                        <select id="inputState" class="form-control custom-select" name="cegueira">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Def. Visual</label>
                                        <select id="inputState" class="form-control custom-select" name="def_visual">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Surdo Cegueira</label>
                                        <select id="inputState" class="form-control custom-select" name="Def_surdo_cegueira">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Def. Multiplas</label>
                                        <select id="inputState" class="form-control custom-select" name="def_multiplas">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Sínd. de Asperger</label>
                                        <select id="inputState" class="form-control custom-select" name="sindrome_asperger">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Autismo Clássico</label>
                                        <select id="inputState" class="form-control custom-select" name="autismo_classico">
                                        <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Sínd. de Rett</label>
                                        <select id="inputState" class="form-control custom-select" name="sindrome_rett">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Transt. Desint. da Infância</label>
                                        <select id="inputState" class="form-control custom-select" name="transt_desg_infancia">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Psicose Infantil</label>
                                        <select id="inputState" class="form-control custom-select" name="psc_infant">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Altas Habilidades/Superdotação</label>
                                        <select id="inputState" class="form-control custom-select" name="altas_hab">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Laudo</label>
                                        <select id="inputState" class="form-control custom-select" name="laudo">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Outras (Descreva)</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="outras">
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Telefones</h4>
                                <!-- <p>Area destinada ao cadastro de Alunos. </p> -->
                                
                                <div class="form-row">
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">DDD </label>
                                        <input type="text" class="form-control" id="cep" name="DDD">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputPassword1">Tel. Residencial</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="tel_residencial">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="exampleInputPassword1">OBS</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="obs_numero_residencial">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">Cob.</label>
                                        <select id="inputState" class="form-control custom-select" name="cob_num_residencial">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">SMS.</label>
                                        <select id="inputState" class="form-control custom-select" name="cob_num_residencial">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">DDD </label>
                                        <input type="text" class="form-control" id="cep" name="ddd_comercial">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputPassword1">Tel. Comercial</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="tel_comercial">
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="exampleInputPassword1">OBS</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" name="obs_numero_comercial">
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">Cob.</label>
                                        <select id="inputState" class="form-control custom-select" name="cob_num_comercial">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputPassword1">SMS.</label>
                                        <select id="inputState" class="form-control custom-select" name="cob_num_comercial">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Endereço</h4>
                                <!-- <p>Area destinada ao cadastro de Alunos. </p> -->
                                <div class="form-row">
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Local</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="local">
                                    </div>
                                    
                                    <div class="form-group col-md-5">
                                        <label for="exampleInputEmail1">Endereço</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="endereco">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Bairro</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bairro">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Cidade</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cidade">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">UF</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uf_pessoa">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">CEP</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cep_pessoa">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Correspondencia</label>
                                        <select id="inputState" class="form-control custom-select" name="correspondencia">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Cobrança</label>
                                        <select id="inputState" class="form-control custom-select" name="cobranca">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Telefone</h4>
                                <!-- <p>Area destinada ao cadastro de Alunos. </p> -->
                                <div class="form-row">
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Local</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="local_celular">
                                    </div>
                                    
                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">DDD</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="DDD">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Telefone:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="telefone">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">OBS:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="obs_telefone">
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">Cobranca</label>
                                        <select id="inputState" class="form-control custom-select" name="cobranca_telefone">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-1">
                                        <label for="exampleInputEmail1">SMS</label>
                                        <select id="inputState" class="form-control custom-select" name="sms">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

                <button type="submit" class="btn btn-primary">Cadastrar Aluno</button>

            </form>
            
        </div>
    </div>
<?php require_once(APPPATH.'views/comuns/secretaria/footer.php'); ?>