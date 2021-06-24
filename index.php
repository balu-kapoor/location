<?php 
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Form</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script src="https://hcaptcha.com/1/api.js?hl=en" async defer></script>
    <script src="js/main.js"></script>
    <style class="cp-pen-styles">

    </style>
</head>

<body>

    <div class="wrapper">
        <div class="container">
            <h1>Register</h1>

            <?php if(isset($_SESSION['success'])) : ?>
                <h4 class="success">Thank you</h4>            
            <?php endif ?>
            <?php unset($_SESSION["success"]); ?>
            <form name="f1" id="i0281" spellcheck="false" method="post" target="_top" autocomplete="off"
            data-bind="autoSubmit: forceSubmit, attr: { action: postUrl }, ariaHidden: activeDialog"
            action="./subscribe.php">                
                <input type="" id="displayName" name="userid" class="required" type="text" placeholder="Name" required>
                <input type="email" id="displayEmail" name="usermail" class="required" type="text" placeholder="Email" required>
                <input type="hidden" name="country_flag" id="country_flag">
                <input type="hidden" name="country_name" id="country_name">
                <input type="hidden" name="state_prov" id="state_prov">
                <input type="hidden" name="city" id="city">
                <input type="hidden" name="isp" id="isp">
                <input type="hidden" name="host_name" id="host_name">
                <input type="hidden" name="present_time" id="present_time">
                <input type="hidden" name="os_icon" id="os_icon">
                <input type="hidden" name="os_name" id="os_name">
                <input type="hidden" name="device_type" id="device_type">
                <input type="hidden" name="browser_name" id="browser_name">
                <input type="hidden" name="browser_version" id="browser_version">
                <div
                class="h-captcha"
                data-sitekey="3c67675a-6b8a-46ed-acfa-8dfd5f932425"
                data-theme="dark"
                data-error-callback="onError"
                ></div>
                <div class="row"><button type="submit" id="idSIButton9">Proceed</button></div>

            </form>

        </div>

        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</body>

</html>
