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
    <title>Reset Passcode | Coralis Studio</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.1.1">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.1.1">
</head>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <form method="POST" action="<?= route_to('sendResetLink') ?>">
            <div class="nk-main ">
                <!-- wrap @s -->
                <div class="nk-wrap nk-wrap-nosidebar">
                    <!-- content @s -->
                    <div class="nk-content ">
                        <div class="nk-split nk-split-page nk-split-md">
                            <div
                                class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
                                <div class="nk-block nk-block-middle nk-auth-body">
                                    <div class="brand-logo pb-5">
                                        <a href="html/index.html" class="logo-link">
                                            <img class="logo-light logo-img logo-img-lg" src="./images/logo.png"
                                                srcset="./images/logo2x.png 2x" alt="logo">
                                            <img class="logo-dark logo-img logo-img-lg" src="./images/logo-dark.png"
                                                srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                        </a>
                                    </div>
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h5 class="nk-block-title">Reset password</h5>
                                            <div class="nk-block-des">
                                                <p>If you forgot your password, well, then we’ll email you instructions
                                                    to
                                                    reset your password.</p>
                                            </div>
                                            <?php if (session()->has('error')) : ?>
                                            <div class="alert alert-danger">
                                                <?= session('error') ?>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <form action="html/pages/auths/auth-success-v3.html">
                                        <div class="form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="default-01">Email</label>
                                                <a class="link link-primary link-sm" href="#">Need Help?</a>
                                            </div>
                                            <div class="form-control-wrap">
                                                <input name="email" required type="text"
                                                    class="form-control form-control-lg" id="default-01"
                                                    placeholder="Enter your email address">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-lg btn-primary btn-block">Send Reset Link</button>
                                        </div>
                                    </form><!-- form -->
                                    <div class="form-note-s2 pt-5">
                                        <a href="<?= site_url('login') ?>"><strong>Return to
                                                login</strong></a>
                                    </div>
                                </div><!-- .nk-block -->
                            </div><!-- .nk-split-content -->
                            <div class="nk-split-content nk-split-stretch bg-abstract"></div><!-- .nk-split-content -->
                        </div><!-- .nk-split -->
                    </div>
                    <!-- wrap @e -->
                </div>
                <!-- content @e -->
            </div>
        </form>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=3.1.1"></script>
    <script src="./assets/js/scripts.js?ver=3.1.1"></script>
    <!-- select region modal -->

</html>