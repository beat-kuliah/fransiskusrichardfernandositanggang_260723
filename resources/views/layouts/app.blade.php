<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<style>
    form {
        width: 700px;
    }

    label {
        width: 200px;
        float: left;
    }

    nav ul li {
        list-style-type: none;
        display: inline-block
    }
</style>
@yield('style')

<body>
    <nav>
        <ul>
            <li><a href="/datadiri">Data diri</a></li>
            <li><a href="/pegawai">Pegawai</a></li>
        </ul>
    </nav>
    @yield('content')
</body>
<script>
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>
@yield('script')

</html>