<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LAKESIA | Login</title>

        <!-- css here-->
        <link rel="stylesheet" href="/css/Login/LoginPageStyle.css">

        <script src="/js/CheckUpSekarang.js"></script>
    </head>
    <body>
    <div class="lakesia-text">Lakesia</div>
            <div class="lakesia-text1">Layanan Kesehatan Lansia</div>
            <div> <img class="lakesia-logo" src="../img/Lakesia-Logo.png" alt="Lakesia Logo"> </div>
            <div class="text1">Memudahkan anda untuk pengontrolan kesehatan</div>
            <div class="text2">Wilayah Kopelma Darussalam</div>
            <div> <img class="medical-logo" src="../img/Medical-Logo.png" alt="Medical Logo"> </div>
            <div> <img class="profile-logo" src="../img/Profile-Logo.png" alt="Profile Logo"> </div>

            <form method="GET" action="/dasboard/perawat">
            {{csrf_field()}}
                <table class="login">
                    <label class="textlogin">Akun Perawat</label>
                    <tr>
                        <td>Username <br> <input type="text" placeholder="Enter Username" name="username_per" required> </td>
                    </tr>
                    <tr>
                        <td>Password <br> <input type="password"  placeholder="Enter Password" name="password_per" required> </td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="login">Login</button></td>
                    </tr>
                </table>
            </form>
            
            <a onclick="history.back()" class="previous">&#8592;</a>
    </body>
</html>