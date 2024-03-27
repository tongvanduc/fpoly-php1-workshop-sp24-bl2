<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <h1>Đây là trang chủ</h1>

    <p id="txtHint"></p>

    <form>
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
    </form>

    <script>
        function showHint(value) {
            $.get('?act=txthint&str=' + value, (data, status) => {
                $('#txtHint').text(data);
            }) // Tham số 1 lf đường link, tham số 2 là functiong callback
        }
    </script>
</body>

</html>