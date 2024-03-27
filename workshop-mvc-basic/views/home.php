<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <h1>Chào mừng bạn đến với chúng tôi</h1>

    <p id="txtHint"></p>

    <form>
        First name: <input type="text" onkeyup="showHint(this.value)">
    </form>

    <script>
        function showHint(value) {
            $.get('?act=txthint&str=' + value, (data, status) => {
                $('#txtHint').text(data);
            });
        }
    </script>
</body>

</html>