<?php
$cookie_name = "fadeInAnimation";
$cookie_value = "true";
if (!isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
    <script>
        window.onload = function() {
            setTimeout(function() {
                document.body.classList.add('fadeIn');
            }, 100);
        };
    </script>

    <style>
        body {
            opacity: 0;
            transition: opacity 2s ease-in-out;
        }

        .fadeIn {
            opacity: 1 !important;
        }
    </style>
<?php
}
?>