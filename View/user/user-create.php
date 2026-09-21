<form action="/user/store" method="POST">
    <!-- Логин -->
    <label for="login">Логин</label><br>
    <input type="text" id="login" name="login"><br>
    <small>Должен быть уникальным — проверяется при сохранении</small>
    
    <br><br>

    <!-- Новый пароль -->
    <label for="password">Новый пароль</label><br>
    <input type="password" id="password" name="password" placeholder="Оставьте пустым, чтобы не менять">
    
    <br><br>

    <!-- Имя и Фамилия в одну строку с помощью таблицы -->
    <table border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td>
                <label for="first_name">Имя</label><br>
                <input type="text" id="first_name" name="first_name" value="Аскар">
            </td>
            <!-- Неразрывные пробелы для отступа между колонками -->
            <td>&nbsp;&nbsp;&nbsp;&nbsp;</td> 
            <td>
                <label for="last_name">Фамилия</label><br>
                <input type="text" id="last_name" name="last_name" value="Сыдыкакпаров">
            </td>
        </tr>
    </table>

    <br>

    <!-- Пол -->
    <label>Пол</label><br>
    <input type="radio" id="male" name="gender" value="male" checked>
    <label for="male">Мужской</label>
    &nbsp;&nbsp;
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Женский</label>

    <br><br>

    <!-- Дата рождения -->
    <label for="birth_date">Дата рождения</label><br>
    <input type="date" id="birth_date" name="birth_date" value="1996-03-14">

    <br><br><br>

    <!-- Кнопки управления -->
    <input type="button" value="Отмена">
    &nbsp;&nbsp;
    <input type="submit" value="Сохранить">
</form>