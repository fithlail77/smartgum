<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?= base_url('ptgumacc') ?>/azzara/assets/img/gumico.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="<?= base_url('ptgumacc') ?>/azzara/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Open+Sans:300,400,600,700"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"],
                urls: ['<?= base_url('ptgumacc') ?>/azzara/assets/css/fonts.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url('ptgumacc') ?>/azzara/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('ptgumacc') ?>/azzara/assets/css/azzara.min.css">
</head>

<body class="login">