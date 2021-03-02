<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>CSGroup | Secretaria</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">


        <link href="<?php echo base_url();?>assets/plugins/DataTables/datatables.min.css" rel="stylesheet">

        <!-- Theme Styles -->
        <link href="<?php echo base_url();?>assets/css/connect.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/dark_theme.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
                <span class='sr-only'>Loading...</span>
            </div>
        </div>
        <div class="connect-container align-content-stretch d-flex flex-wrap">
            <div class="page-sidebar">
                <div class="logo-box"><a href="#" class="logo-text">CSGroup</a><a href="#" id="sidebar-close"><i class="material-icons">close</i></a> <a href="#" id="sidebar-state"><i class="material-icons">adjust</i><i class="material-icons compact-sidebar-icon">panorama_fish_eye</i></a></div>
                <div class="page-sidebar-inner slimscroll" style="background-color: ; overflow: scroll;">
                    <ul class="accordion-menu" >
                        <li class="sidebar-title">
                            Apps
                        </li>
                        <li class="active-page">
                            <a href="<?php echo site_url('secretaria/Index/inicio');?>" class="active"><i class="material-icons-outlined">dashboard</i>Dashboard</a>
                        </li>
                        <!-- <li>
                            <a href="mailbox.html"><i class="material-icons-outlined">inbox</i>Mailbox</a>
                        </li>
                        <li>
                            <a href="profile.html"><i class="material-icons-outlined">account_circle</i>Profile</a>
                        </li>
                        <li>
                            <a href="file-manager.html"><i class="material-icons">cloud_queue</i>File Manager</a>
                        </li>
                        <li>
                            <a href="calendar.html"><i class="material-icons-outlined">calendar_today</i>Calendar</a>
                        </li>
                        <li>
                            <a href="todo.html"><i class="material-icons">done</i>Todo</a>
                        </li> -->
                        <li class="sidebar-title">
                            Menu
                        </li>
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Cursos<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo site_url('secretaria/cursos/cadastrar');?>">Cadastrar Curso</a>
                                </li>
                                
                                <li>
                                    <a href="<?php echo site_url('secretaria/cursos/listar');?>">Listar Cursos</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('secretaria/diciplinas/listar');?>">Diciplinas</a>
                                </li>
                                <!-- <li>
                                    <a href="styles-tables.html">Cadastro de Turmas</a>
                                </li>
                                <li>
                                    <a href="styles-icons.html">Icons</a>
                                </li> -->
                            </ul>
                        </li>

                        <!-- <li class="sidebar-title">
                            Alunos
                        </li> -->
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Alunos<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo site_url('secretaria/aluno/cadastrar');?>">Cadastrar Aluno</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('secretaria/aluno/listar');?>">Lista de Alunos</a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="sidebar-title">
                            Turmas
                        </li> -->
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Turmas<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo site_url('secretaria/turmas/cadastrar');?>">Cadastrar Turmas</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('secretaria/turmas/listar');?>">Lista de Turmas</a>
                                </li>
                                <!-- <li>
                                    <a href="styles-tables.html">Cadastro de Turmas</a>
                                </li> -->
                                <!-- <li>
                                    <a href="styles-icons.html">Icons</a>
                                </li> -->
                            </ul>
                        </li>

                        <!-- <li class="sidebar-title">
                            Documentos
                        </li> -->
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Documentos<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo site_url('secretaria/documentos/adicionar');?>">Adicionar Documentos</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('secretaria/documentos/adicionar_aluno');?>">Adicionar Documento ao Aluno</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('secretaria/documentos/listar');?>">Listar Documentos</a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="sidebar-title">
                            Matriculas
                        </li> -->
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Matriculas<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo site_url('secretaria/matriculas/matricular');?>">Matricular Aluno</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('secretaria/matriculas/listar');?>">Lista de Matriculas</a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="sidebar-title">
                            Contratos
                        </li> -->
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Contratos<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="styles-typography.html">Adicionar Contrato</a>
                                </li>
                                <li>
                                    <a href="styles-typography.html">Lista de Contratos</a>
                                </li>
                                <li>
                                    <a href="styles-typography.html">Relatório de Contratos</a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="sidebar-title">
                            Relatórios
                        </li> -->
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Relatórios<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="styles-typography.html">Filtrar Relatórios</a>
                                </li>
                                
                            </ul>
                        </li>

                        <!-- <li class="sidebar-title">
                            Email Marketing
                        </li> -->
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Peças Promocionais<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="styles-typography.html">Adicionar</a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="sidebar-title">
                            Portal do Aluno
                        </li> -->
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Portal do Aluno<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="styles-typography.html">Adicionar Comunicado</a>
                                </li>
                                <li>
                                    <a href="styles-typography.html">Lista de Comunicados</a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="sidebar-title">
                            Livro de Ocorrencia
                        </li> -->
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Livro de Ocorrência<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="styles-typography.html">Ocorrência do Aluno</a>
                                </li>
                                <li>
                                    <a href="styles-typography.html">Ocorrência da Turma</a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="sidebar-title">
                            Calendario da Turma
                        </li> -->
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Calendario da Turma<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="styles-typography.html">Lista de Turmas</a>
                                </li>
                            </ul>
                        </li>
                        
                        <!-- <li class="sidebar-title">
                            Cadastros
                        </li> -->
                        <li>
                            <a href="#"><i class="material-icons">text_format</i>Cadastros Gerais<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?= site_url('secretaria/unidades/cadastrar');?>">Cadastrar Unidades</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('secretaria/professor/cadastrar')?>">Cadastrar Professor</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('secretaria/tutor/cadastrar')?>">Cadastrar Tutor</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('secretaria/coordenador/cadastrar')?>">Cadastrar Coordenador</a>
                                </li>
                            </ul>
                        </li>

                        

                        <!-- <li>
                            <a href=""><i class="material-icons">apps</i>Components<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="ui-alerts.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="ui-badge.html">Badge</a>
                                </li>
                                <li>
                                    <a href="ui-breadcrumb.html">Breadcrumb</a>
                                </li>
                                <li>
                                    <a href="ui-buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="ui-card.html">Card</a>
                                </li>
                                <li>
                                    <a href="ui-collapse.html">Collapse</a>
                                </li>
                                <li>
                                    <a href="ui-dropdowns.html">Dropdowns</a>
                                </li>
                                <li>
                                    <a href="ui-list-group.html">List Group</a>
                                </li>
                                <li>
                                    <a href="ui-modal.html">Modal</a>
                                </li>
                                <li>
                                    <a href="ui-pagination.html">Pagination</a>
                                </li>
                                <li>
                                    <a href="ui-popovers.html">Popovers</a>
                                </li>
                                <li>
                                    <a href="ui-progress.html">Progress</a>
                                </li>
                                <li>
                                    <a href="ui-spinners.html">Spinners</a>
                                </li>
                                <li>
                                    <a href="ui-toast.html">Toast</a>
                                </li>
                                <li>
                                    <a href="ui-tooltips.html">Tooltips</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="material-icons">card_giftcard</i>Extended<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="extended-select2.html">Select2</a>
                                </li>
                                <li>
                                    <a href="extended-datatables.html">Data Tables</a>
                                </li>
                                <li>
                                    <a href="extended-blockui.html">Block UI</a>
                                </li>
                                <li>
                                    <a href="extended-session.html">Session Timeout</a>
                                </li>
                                <li>
                                    <a href="extended-tree.html">Tree View</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="charts.html"><i class="material-icons">bar_chart</i>Charts</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="material-icons">input</i>Forms</a>
                        </li>
                        <li class="sidebar-title">
                            Other
                        </li>
                        <li>
                            <a href=""><i class="material-icons">star_border</i>Pages<i class="material-icons has-sub-menu">add</i></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="404.html">404</a>
                                </li>
                                <li>
                                    <a href="500.html">500</a>
                                </li>
                                <li>
                                    <a href="sign-in.html">Sign In</a>
                                </li>
                                <li>
                                    <a href="sign-up.html">Sign Up</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="material-icons">bookmark_border</i>Documentation</a>
                        </li>
                        <li>
                            <a href="#"><i class="material-icons">access_time</i>Change Log</a>
                        </li>
                    </ul> -->
                </div>
            </div>