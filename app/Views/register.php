<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Page Title  -->
    <title>Registration | Coralis Studio</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.1.1">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.1.1">
</head>

<body class="nk-body bg-white npc-general pg-auth">
    <form action="<?= site_url('register/submit') ?>" method="post" enctype="multipart/form-data">
        <div class="nk-app-root">
            <!-- main @s -->
            <div class="nk-main ">
                <!-- wrap @s -->
                <div class="nk-wrap nk-wrap-nosidebar">
                    <!-- content @s -->
                    <div class="nk-content ">
                        <div class="nk-split nk-split-page nk-split-md">
                            <div
                                class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
                                <div class="nk-block nk-block-middle nk-auth-body">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h5 class="nk-block-title">Register</h5>
                                            <div class="nk-block-des">
                                                <p>Create New Account</p>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <?php if (session()->has('errors')) : ?>
                                    <div class="alert alert-danger">
                                        <?php foreach (session('errors') as $error) : ?>
                                        <p><?= esc($error) ?></p>
                                        <?php endforeach ?>
                                    </div>
                                    <?php endif ?>
                                    <?php if (session()->has('success')) : ?>
                                    <div class="alert alert-success">
                                        <p><?= esc(session('success')) ?></p>
                                    </div>
                                    <?php endif ?>
                                    <div class="form-group">
                                        <label class="form-label" for="name">Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg" id="name"
                                                name="name" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email or Username</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg" id="email"
                                                name="email" placeholder="Enter your email address or username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Passcode</label>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#"
                                                class="form-icon form-icon-right passcode-switch lg"
                                                data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg" id="password"
                                                name="password" placeholder="Enter your passcode">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Upload Foto Profile</label>
                                        <div name="foto" class="mb-3">
                                            <div class="dz-message" data-dz-message>
                                                <input type="file" name="foto">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-control-xs custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox"
                                                onchange="toggleRegisterButton(this)">
                                            <label class="custom-control-label" for="checkbox">I agree to <a
                                                    tabindex="-1" href="#">Privacy Policy</a> &amp; <a tabindex="-1"
                                                    href="#">Terms.</a></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button id="registerButton" type="submit"
                                            class="btn btn-lg btn-primary btn-block" disabled>Register</button>
                                    </div>

                                    <script>
                                    function toggleRegisterButton(checkbox) {
                                        var registerButton = document.getElementById("registerButton");
                                        registerButton.disabled = !checkbox.checked;
                                    }
                                    </script>

                                    <div class="form-note-s2 pt-4"> Already have an account ? <a
                                            href="<?= site_url('login') ?>"><strong>Sign in
                                                instead</strong></a>
                                    </div>
                                    <div class="text-center pt-4 pb-3">
                                        <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
                                    </div>
                                    <ul class="nav justify-center gx-8">
                                        <li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Google</a></li>
                                    </ul>
                                </div><!-- .nk-block -->
                                <div class="nk-block nk-auth-footer">
                                    <div class="nk-block-between">
                                        <ul class="nav nav-sm">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Terms & Condition</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Privacy Policy</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Help</a>
                                            </li>
                                            <li class="nav-item dropup">
                                                <a class="dropdown-toggle dropdown-indicator has-indicator nav-link"
                                                    data-bs-toggle="dropdown"
                                                    data-offset="0,10"><small>English</small></a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                    <ul class="language-list">
                                                        <li>
                                                            <a href="#" class="language-item">
                                                                <img src="./images/flags/english.png" alt=""
                                                                    class="language-flag">
                                                                <span class="language-name">English</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="language-item">
                                                                <img src="./images/flags/spanish.png" alt=""
                                                                    class="language-flag">
                                                                <span class="language-name">Español</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="language-item">
                                                                <img src="./images/flags/french.png" alt=""
                                                                    class="language-flag">
                                                                <span class="language-name">Français</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="language-item">
                                                                <img src="./images/flags/turkey.png" alt=""
                                                                    class="language-flag">
                                                                <span class="language-name">Türkçe</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul><!-- nav -->
                                    </div>
                                </div><!-- nk-block -->
                            </div><!-- nk-split-content -->
                            <div class="nk-split-content nk-split-stretch bg-abstract"></div><!-- nk-split-content -->
                        </div><!-- nk-split -->
                    </div>
                    <!-- wrap @e -->
                </div>
                <!-- content @e -->
            </div>
            <!-- main @e -->
        </div>
    </form>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=3.1.1"></script>
    <script src="./assets/js/scripts.js?ver=3.1.1"></script>
    <!-- select region modal -->

</html>