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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.1.1">
</head>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <form method="POST" action="<?= site_url('change-password') ?>">
            <div class="nk-main ">
                <!-- wrap @s -->
                <div class="nk-wrap nk-wrap-nosidebar">
                    <!-- content @s -->
                    <div class="nk-content ">
                        <div class="nk-split nk-split-page nk-split-md">
                            <div
                                class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
                                <div class="nk-block nk-block-middle nk-auth-body" id="form_change_password">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h5 class="nk-block-title">Change password</h5>
                                            <?php if (session()->has('error')) : ?>
                                            <div class="alert alert-danger">
                                                <?= session('error') ?>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="form-group">
                                        <div class="form-label-group">

                                            <label class="form-label" for="default-01">Current password</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="password" name="current_password" id="current_password"
                                                class="form-control form-control-lg">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">New password</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="password" name="new_password" id="new_password"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Confirm new password</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="password" name="confirm_password" id="confirm_password"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <span name="confirm_password_error" id="confirm_password_error"
                                        class="error-message"></span>
                                    <div class="form-group">
                                        <button type="submit" id="submit"
                                            class="btn btn-lg btn-primary btn-block">Change
                                            Password</button>
                                    </div>

                                    <script>
                                    $(document).ready(function() {
                                        $('#new_password, #confirm_password').on('input', function() {
                                            var newPassword = $('#new_password').val();
                                            var confirmPassword = $('#confirm_password').val();
                                            var confirmPassError = $('#confirm_password_error');
                                            var submitButton = $('#submit');

                                            if (newPassword !== confirmPassword) {
                                                confirmPassError.text(
                                                    'The confirmation password does not match the new password.'
                                                );
                                                submitButton.prop('disabled', true);
                                            } else {
                                                confirmPassError.text('');
                                                submitButton.prop('disabled', false);
                                            }
                                        });
                                    });
                                    </script>



                                    <div class="form-note-s2 pt-5">
                                        <a href="<?= site_url('/') ?>"><strong>Return to
                                                Dashboard</strong></a>
                                    </div>

                                </div><!-- .nk-block -->

                                <!-- .nk-split-content -->
                            </div><!-- .nk-split-content -->
                            <div class="nk-split-content nk-split-stretch bg-abstract"></div>

                        </div><!-- .nk-split -->
                    </div>
                </div>
            </div>
        </form>

        <!-- app-root @e -->
        <!-- JavaScript -->
        <script src="./assets/js/bundle.js?ver=3.1.1"></script>
        <script src="./assets/js/scripts.js?ver=3.1.1"></script>
        <!-- select region modal -->

</html>