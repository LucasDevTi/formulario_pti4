<?php

$succes_flag = false;
$valid_name = false;
$valid_password = false;

if (isset($_POST)) {

    if (isset($_POST['user_name']) && !empty($_POST['user_name'])) {
        $user_name = htmlspecialchars($_POST['user_name'], ENT_QUOTES);
        $valid_name = true;
        
    } else {
        $user_name = '';
    }

    if (isset($_POST['user_password']) && !empty($_POST['user_password'])) {
        $user_password = htmlspecialchars($_POST['user_password'], ENT_QUOTES);
        $valid_password = true;
    } else {
        $user_password = '';
    }

    if($valid_name && $valid_password){
        $succes_flag = true;
    }

    if ($succes_flag) { ?>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style_index.css">
        <header>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Login</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <section class="container">
            <div class="row justify-content-center align-items-center vh-100">
                <div class="col-10 rounded p-4">
                    <div id="name_user_login">
                        <p class="fs-1 fw-bolder line type_animation"> Seja bem vindo(a), <?php echo (!empty($user_name) ? " $user_name." : ""); ?></p>
                    </div>
                </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<?php }
}
