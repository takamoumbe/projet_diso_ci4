<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>ICAB - GEST</title>          
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html" id="name-logo">{{ message }}</a>
                        <a href="#" class="x-navigation-control"></a>

                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name" id="name-user"> {{ message }}</div>
                                <div class="profile-data-title" id="role-user">{{ message }}</div>
                            </div>
                            <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Options</li>
                    <li class="active">
                        <a href="index.html"><span class="fa fa-desktop"></span> <span class="xn-text">Acceuil</span></a>                        
                    </li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Etudiants</span></a>
                        <ul>
                            <li><a href="pages-address-book.html"><span class="fa fa-users"></span> Profile d'étudiants</a></li>
                            <li><a href="pages-messages.html"><span class="fa fa-save"></span> Enregistrer Etudiants</a></li>
                            <li><a href="pages-calendar.html"><span class="fa fa-group"></span> Liste des Etudiants</a></li>
                            <li><a href="pages-tasks.html"><span class="fa fa-edit"></span> Rapport d'Etudiants</a></li>                            
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Enseignants</span></a>
                        <ul>
                            <li><a href="pages-address-book.html"><span class="fa fa-users"></span> Profile d'Enseignants</a></li>
                            <li><a href="pages-messages.html"><span class="fa fa-save"></span> Enregistrer Enseignants</a></li>
                            <li><a href="pages-calendar.html"><span class="fa fa-group"></span> Liste des Enseignants</a></li>
                            <li><a href="pages-calendar.html"><span class="fa fa-link"></span> Matiéres - Enseignants</a></li>
                            <li><a href="pages-tasks.html"><span class="fa fa-edit"></span> Rapport d'Enseignants</a></li>
                        </ul>
                    </li>
                    <li class="xn-title">Plus d'Options</li>
                     <li class="xn-openable">
                        <a href="#"><span class="fa fa-list-alt"></span> <span class="xn-text">Notes</span></a>                        
                        <ul>
                            <li><a href="ui-widgets.html"><span class="fa fa-save"></span> Enregistrer les Notes</a></li>                            
                            <li><a href="ui-elements.html"><span class="fa fa-chain-broken"></span> Traiter les Requetes</a></li>
                            <li><a href="ui-buttons.html"><span class="glyphicon glyphicon-folder-open"></span> Produire les relevés</a></li>
                            <li><a href="ui-buttons.html"><span class="fa fa-edit"></span> Rapport de Relevés</a></li>
                        </ul>
                    </li> 
                     <li class="xn-openable">
                        <a href="#"><span class="glyphicon glyphicon-list-alt"></span> <span class="xn-text">Procés Verbaux</span></a>                        
                        <ul>
                            <li><a href="ui-widgets.html"><span class="glyphicon glyphicon-dashboard"></span> Produire les Procès</a></li>                            
                            <li><a href="ui-elements.html"><span class="fa fa-edit"></span> Rapport de Procès</a></li>
                        </ul>
                    </li> 
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-gears"></span> <span class="xn-text">Niveaux</span></a>                        
                        <ul>
                            <li><a href="ui-widgets.html"><span class="fa fa-save"></span> Enregistrer Niveaux</a></li>                            
                            <li><a href="ui-elements.html"><span class="fa fa-list"></span> Liste des Niveaux</a></li>
                        </ul>
                    </li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-paste"></span> <span class="xn-text">Matières</span></a>
                        <ul>
                            <li><a href="form-elements.html"><span class="fa fa-save"></span> Enregistrer Matières</a></li>
                            <li><a href="form-elements.html"><span class="fa fa-save"></span> Groupes - Modules</a></li>
                            <li><a href="form-wizards.html"><span class="fa fa-list"></span> Liste des Matières</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="glyphicon glyphicon-book"></span> <span class="xn-text">Examens</span></a>
                        <ul>
                            <li><a href="form-elements.html"><span class="fa fa-save"></span> Programmer un Examen</a></li>
                            <li><a href="form-elements.html"><span class="fa fa-list"></span> Examen Programmés</a></li>
                            <li><a href="form-elements.html"><span class="fa fa-edit"></span> Rapport d'Examen</a></li>
                        </ul>
                    </li>                    
                    <li class="xn-openable">
                        <a href="maps.html"><span class="glyphicon glyphicon-calendar"></span> <span class="xn-text">Année Scolaire</span></a>
                        <ul>
                            <li><a href="form-elements.html"><span class="fa fa-gear"></span> Parametrer l'année</a></li>
                            <li><a href="form-elements.html"><span class="fa fa-folder-open-o"></span> Archives</a></li>
                        </ul>
                    </li>

                    <!-- START SALLE -->
                     <li class="xn-openable">
                        <a href="#"><span class="fa fa-home"></span> <span class="xn-text">Salles</span></a>
                        <ul>
                           <li><a href="form-elements.html"><span class="fa fa-save"></span> Enregistrer Salles</a></li>
                            <li><a href="form-wizards.html"><span class="fa fa-list"></span> Liste des Salles</a></li>
                        </ul>
                    </li>
                    <!-- END SALLE -->
                    <!-- START MESSAGE -->
                     <li class="xn-openable">
                        <a href="#"><span class="fa fa-envelope"></span> <span class="xn-text">Messages</span></a>
                        <ul>
                            <li>
                                <a href="form-layouts-two-column.html"><span class="fa fa-tasks"></span> Consulter Messages</a>
                                <div class="informer informer-danger">New</div>
                            </li>
                        </ul>
                    </li>
                    <!-- END MESSAGE -->
                    <!-- START ACTIVITES -->
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-building-o"></span> <span class="xn-text">Activités</span></a>
                        <ul>
                           <li><a href="form-elements.html"><span class="fa fa-save"></span> Enregistrer Activités</a></li>
                            <li><a href="form-wizards.html"><span class="fa fa-list"></span> Liste des Activités</a></li>
                        </ul>
                    </li>
                    <!-- END ACTIVITES -->
                    <!-- START UTILISATEUR -->
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-users"></span> <span class="xn-text">Utilisateurs</span></a>
                        <ul>
                            <li><a href="form-elements.html"><span class="fa fa-save"></span> Enregistrer Utilisateurs</a></li>
                            <li><a href="form-wizards.html"><span class="fa fa-list"></span> Liste des Utilisateurs</a></li>
                        </ul>
                    </li>
                    <!-- END UTILISATEUR -->
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->

                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-comments"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>                                
                                <div class="pull-right">
                                    <span class="label label-danger">4 Nouveaux Messages</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                                    <span class="contacts-title">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-messages.html">Show all messages</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-tasks"></span></a>
                        <div class="informer informer-warning">3</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-tasks"></span> Activités</h3>                                
                                <div class="pull-right">
                                    <span class="label label-warning">3 activités</span>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll" style="height: 200px;">                                
                                <a class="list-group-item" href="#">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Aenean ac cursus</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                    </div>
                                    <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
                                </a>                                
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-tasks.html">Show all tasks</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Acceuil</a></li>                    
                    <li class="active">Statistiques</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                    <div class="row">
                        <div class="col-md-3">
                            
                            <!-- START WIDGET SLIDER -->
                            <div class="widget widget-default widget-carousel">
                                <div class="owl-carousel" id="owl-example">
                                    <div>                                    
                                        <div class="widget-title">DACC</div>                                                                        
                                        <div class="widget-subtitle">27/08/2014 15:23</div>
                                        <div class="widget-int">775</div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">COMPTABLE</div>
                                        <div class="widget-subtitle">27/08/2014 15:23</div>
                                        <div class="widget-int">744</div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">CELLULE INFORMATIQUE</div>
                                        <div class="widget-subtitle">27/08/2014 15:23</div>
                                        <div class="widget-int">744</div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">SECRÉTAIRE</div>
                                        <div class="widget-subtitle">27/08/2014 15:23</div>
                                        <div class="widget-int">744</div>
                                    </div>
                                     <div>                                    
                                        <div class="widget-title">PRÉFET DE DISCIPLINE</div>
                                        <div class="widget-subtitle">27/08/2014 15:23</div>
                                        <div class="widget-int">744</div>
                                    </div>
                                     <div>                                    
                                        <div class="widget-title">ENSEIGNANTS</div>
                                        <div class="widget-subtitle">27/08/2014 15:23</div>
                                        <div class="widget-int">744</div>
                                    </div>
                                    <div>                                    
                                        <div class="widget-title">ÉTUDIANTS</div>
                                        <div class="widget-subtitle">27/08/2014 15:23</div>
                                        <div class="widget-int">744</div>
                                    </div>
                                </div>                            
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                             
                            </div>         
                            <!-- END WIDGET SLIDER -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-messages.html';">
                                <div class="widget-item-left">
                                    <span class="fa fa-envelope"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count">48</div>
                                    <div class="widget-title">Requetes de Notes </div>
                                    <div class="widget-subtitle">26 Traités</div>
                                </div>      
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-address-book.html';">
                                <div class="widget-item-left">
                                    <span class="fa fa-users"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">375</div>
                                    <div class="widget-title">ETUDIANTS</div>
                                    <div class="widget-subtitle">Toutes les Filières</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET CLOCK -->
                            <div class="widget widget-info widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                                <div class="widget-buttons widget-c3">
                                    <div class="col">
                                        <a href="#"><span class="fa fa-clock-o"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-bell"></span></a>
                                    </div>
                                    <div class="col">
                                        <a href="#"><span class="fa fa-calendar"></span></a>
                                    </div>
                                </div>                            
                            </div>                        
                            <!-- END WIDGET CLOCK -->
                            
                        </div>
                    </div>
                    <!-- END WIDGETS -->                    
                    
                    <div class="row">
                        <div class="col-md-4">
                            
                             <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-messages.html';">
                                <div class="widget-item-left">
                                    <span class="fa fa-clipboard"></span>
                                </div>                             
                                <div class="widget-data">
                                    <div class="widget-int num-count">12</div>
                                    <div class="widget-title">Filières </div>
                                    <div class="widget-subtitle">12 Comerciaux | 23 Industriels</div>
                                </div>      
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>
                            </div>                            
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        <div class="col-md-4">
                            
                           <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-address-book.html';">
                                <div class="widget-item-left">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">1235</div>
                                    <div class="widget-title">BASE DE DONNEE</div>
                                    <div class="widget-subtitle">Exportation des Informations</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>

						<div class="col-md-4">
                            
                            <!-- START PROJECTS BLOCK -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Utilisateurs</h3>
                                        <span>Intervenants du système</span>
                                    </div>                                    
                                    <ul class="panel-controls" style="margin-top: 2px;">
                                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                                            <ul class="dropdown-menu">
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                                            </ul>                                        
                                        </li>                                        
                                    </ul>
                                </div>
                                <div class="panel-body panel-body-table">
                                    
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="50%">Pseudo</th>
                                                    <th width="20%">Role</th>
                                                    <th width="30%">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong>Joli Admin</strong></td>
                                                    <td><span class="label label-danger">DACC</span></td>
                                                    <td>
                                                        <span class="label label-danger">Inactif</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Gemini</strong></td>
                                                    <td><span class="label label-warning">COMPTABLE</span></td>
                                                    <td>
                                                        <span class="label label-danger">Inactif</span>
                                                    </td>
                                                </tr>                                                
                                                <tr>
                                                    <td><strong>Taurus</strong></td>
                                                    <td><span class="label label-warning">CELLULE INFORMATIQUE</span></td>
                                                    <td>
                                                        <span class="label label-warning">Actif</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Leo</strong></td>
                                                    <td><span class="label label-success">SECRÉTAIRE</span></td>
                                                    <td>
                                                        <span class="label label-warning">Actif</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Virgo</strong></td>
                                                    <td><span class="label label-success">PRÉFET DE DISCIPLINE</span></td>
                                                    <td>
                                                        <span class="label label-warning">Actif</span>
                                                    </td>
                                                </tr>  
                                                <tr>
                                                    <td><strong>Virgo</strong></td>
                                                    <td><span class="label label-success">ENSEIGNANTS</span></td>
                                                    <td>
                                                        <span class="label label-warning">Actif</span>
                                                    </td>
                                                </tr>   
                                                <tr>
                                                    <td><strong>Virgo</strong></td>
                                                    <td><span class="label label-success">ÉTUDIANTS</span></td>
                                                    <td>
                                                        <span class="label label-warning">Actif</span>
                                                    </td>
                                                </tr>                                                 
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- END PROJECTS BLOCK -->
                            
                        </div>
                    </div>
                    
                    <div class="row">
						<div class="col-md-4">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-address-book.html';">
                                <div class="widget-item-left">
                                    <span class="fa fa-users"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">375</div>
                                    <div class="widget-title">ENSEIGNANTS</div>
                                    <div class="widget-subtitle">Toutes les Filières</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                        
                        <div class="col-md-4">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-address-book.html';">
                                <div class="widget-item-left">
                                    <span class="glyphicon glyphicon-home"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">375</div>
                                    <div class="widget-title">SALLES</div>
                                    <div class="widget-subtitle">Toutes les Salles</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>

                        <div class="col-md-4">
                            
                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon" onclick="location.href='pages-address-book.html';">
                                <div class="widget-item-left">
                                    <span class="glyphicon glyphicon-book"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">375</div>
                                    <div class="widget-title">EXAMENS</div>
                                    <div class="widget-subtitle">Toutes les Examens</div>
                                </div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                            </div>                            
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                    </div>
                    
                    <!-- START DASHBOARD CHART -->
					<div class="chart-holder" id="dashboard-area-1" style="height: 200px;"></div>
					<div class="block-full-width">
                                                                       
                    </div>                    
                    <!-- END DASHBOARD CHART -->
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>
         <!-- VUE JS -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <script type="text/javascript" src="js/demo_dashboard.js"></script>
        <!-- END TEMPLATE -->

       

    </body>
</html>






