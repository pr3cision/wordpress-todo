<?php /* Template Name: Demo Page Template */ get_header(); ?>

	<main role="main">
	<div class="container">

<!--Section entete-->
<div class="heading">
                <h2>Liste de Tâches 
                    <i class="fa fa-clipboard-list"></i>
                </h2>
            </div>
        <!--Fin section entete-->

        <!--Debut section formulaire-->
            <div class="row">
                <div class="col-lg-11 offset-lg-1">
                    <form action="index.html" method="POST" id="contact-form" role="form">
                        <div class="row">
                            <!--debut Boite message-->
                            <div class="col-9 ">
                                <input type="text" name="message" id="message" class="form-control" placeholder="Ajouter une tâche" cols="30" rows="1">
                            </div>
                            <!--fin boite message-->

                            <!--Bouton submit-->
                            <div class="col-3">
                                <input type="submit" class="button1" value="Ajouter"> 
                            </div>
                            <!--fin bouton submit-->
                        </div>
                    </form>
                </div>
            </div>
        <!--Fin section formulaire-->

        <!--Debut boite liste-->
            <div class="row">
                <div class="col-lg-11 offset-lg-1">
                    <div class="listBox">
                        <div class="listBox">

                            <!--Contenu de la boite-->
                                <ul id="list-items">

                                    <!--Element de la boite-->
                                        <li class="itemLine">
                                            <div>
                                                <input type="checkbox">
                                                <label> Exemple 1</label>
                                                <button type="submit" class="btn"><i class="fas fa-trash"></i></button>
                                            </div>
                                            <hr style="width:93%;text-align:left;margin-left:0">
                                        </li>
                                        <li class="itemLine">
                                            <div>
                                                <input type="checkbox">
                                                <label> Exemple 2</label>
                                                <button type="submit" class="btn"><i class="fas fa-trash"></i></button>
                                            </div>
                                            <hr style="width:93%;text-align:left;margin-left:0">
                                        </li>
                                        <li class="itemLine">
                                            <div>
                                                <input type="checkbox">
                                                <label> Exemple 3</label>
                                                <button type="submit" class="btn"><i class="fas fa-trash"></i></button>
                                            </div>
                                            <hr style="width:93%;text-align:left;margin-left:0">
                                        </li>
                                        <li class="itemLine">
                                            <div>
                                                <input type="checkbox">
                                                <label> Exemple 4</label>
                                                <button type="submit" class="btn"><i class="fas fa-trash"></i></button>
                                            </div>
                                            <hr style="width:93%;text-align:left;margin-left:0">
                                        </li>
                                    <!--Fin Element boite-->

                                </ul>
                            <!--Fin Contenu Boite-->

                        </div>
                    </div>
                </div>
            </div>
        <!--Fin boite liste-->    

</div>
<?php get_footer(); ?>
