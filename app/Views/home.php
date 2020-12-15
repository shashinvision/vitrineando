<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url();?>/assets/bulma/css/bulma.min.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/styles.css">
    <link href="<?=base_url();?>/assets/fontawesome/css/all.css" rel="stylesheet">
    <!--load all styles -->
    <title>vitrineando.cl</title>
</head>

<body>
    <section class="section">
        <div class=container>
            <div class="columns">
                <div class="column">
                    <i class="fas fa-share-square fa-2x"></i>
                    <i class="fab fa-facebook fa-2x"></i>
                    <i class="fab fa-twitter fa-2x"></i>
                </div>
                <div class="column">
                    <p class="text is-pulled-right"><span class="has-text-weight-bold ml-3">Bienvenido:</span> invitado
                    </p>
                    <i class="far fa-user fa-2x is-pulled-right"></i>
                </div>
            </div>
            <div class="is-clearfix"></div>

            <div class="columns sesion">
                <div class="column">
                    <button class="button is-success is-focused is-pulled-right ml-3">Iniciar sessión</button>
                    <button class="button is-success is-focused is-pulled-right ">Registrar</button>
                </div>
            </div>
            <div class="is-clearfix"></div>

            <div class="columns">
                <div class="column">
                    <h1 class="title logo">
                        Vitrineando.cl
                    </h1>
                </div>
            </div>
            <div class="columns">

                <div class="column homeCard">
                    <div class="card">
                        <header class="card-header">
                            <p class="label pl-3">Hola, necesitamos tu ayuda... </p>
                        </header>
                        <div class="card-content">
                            <div class="card-image">
                                <p class="title has-text-centered"> ¿En que región y comuna deseas vitrinear?. </p>
                                <img class="image relax" src="<?=base_url();?>/assets/img/relax.svg" alt="">

                                <div class="paisesComunas">
                                    <div class="field paises">
                                        <p class="control has-icons-left">
                                            <span class="select">
                                                <select>
                                                    <option selected>Región...</option>
                                                    <option>Región Metropolitana</option>
                                                    <option>Arica</option>
                                                </select>
                                            </span>
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-globe"></i>
                                            </span>
                                        </p>

                                    </div>
                                    <div class="field comunas">
                                        <p class="control has-icons-left">
                                            <span class="select">
                                                <select>
                                                    <option selected>Comuna...</option>
                                                    <option>Santiago</option>
                                                    <option>Iquique</option>
                                                </select>
                                            </span>
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-globe"></i>
                                            </span>
                                        </p>

                                    </div>
                                </div>
                                <div class="is-clearfix"></div>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="columns">
                    <div class="colum">

                    </div>
                </div>
            </div>

        </div>

    </section>
    <script src="<?=base_url();?>/assets/js/jquery-3.5.1.min.js"></script>
</body>

</html>