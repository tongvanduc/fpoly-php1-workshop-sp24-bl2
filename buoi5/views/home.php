<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>
<body>
    <h1>Đây là trang chủ</h1>
    <p id = "txtHint"></p>
    <form>
        First name: <input type="text" onkeyup="showHint(this.value)">
    </form>

    <script>
        function showHint(value){
            $.get('?act = txthint & str =' + value, (data, status) => {
                $('#txtHint').text(data);
            } );
        }
    </script>
</body>
</html>