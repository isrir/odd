<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd Even Checker</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <h1>Odd Even Checker</h1>
    <form id="numberForm">
        <label for="number">Enter a number:</label>
        <input type="text" id="number" name="number">
        <button type="submit">Check</button>
    </form>
    <div id="result"></div>
    <script>
        $(document).ready(function() {
            $('#numberForm').submit(function(e) {
                e.preventDefault();
                const number = $('#number').val();
                $.ajax({
                    url: 'check.php',
                    type: 'POST',
                    data: { number: number },
                    success: function(response) {
                        $('#result').html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>
