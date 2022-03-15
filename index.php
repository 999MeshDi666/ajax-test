<?
    include('db.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax test</title>
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <div class="container">
        <h1 class="form_title">Введите информацию</h1>
        <form action="" method="post" class="info_form" id = 'form_info'>
            <fieldset class="g_fieldset">
                <label for="name">Имя:</label>
                <input type="text" name="name" id="name" placeholder="Введите имя" required class="g_inputs">
            </fieldset>
            <fieldset class="g_fieldset">
                <label for="surname">Фамилия:</label>
                <input type="text" name="surname" id="surname" placeholder="Введите фамилию" required class="g_inputs">
            </fieldset>
            <fieldset class="g_fieldset">
                <label for="email">Почта:</label>
                <input type="email" name="email" id="email" placeholder="Введите почту" required class="g_inputs">
            </fieldset>
            <fieldset class="g_fieldset">
                <label for="tel">Номер телефона:</label>
                <input type="tel" name="tel" id="tel" placeholder="Введите номер телефона" required class="g_inputs">
            </fieldset>
            <input type="submit" value="Отправить" class="submit_btn" id = 'submit'>
            <input type="reset" value="Удалить" class="submit_btn">
        </form>
        <div class="mes_window">
            <p class="close_btn">Закрыть</p>
            <div class="mes_text">
                <h1>Отлично!!!</h1>
                <p>Информация успешно отправлена</p>
            </div>
        </div>
    </div>

    

    <script src="./scripts/jquery.js"></script>
    <script src="./scripts/scripts.js"></script>
    
</body>
</html>