<?php include __DIR__ . '/../components/header/header.php'; ?>


<div class="panel-wrap ">
    <div class="panel-title-row">
        <h2>Редактирование пользователя</h2>
        <div class="icons">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7" />
            </svg>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M7 10l5 5 5-5M12 15V3" />
            </svg>
        </div>
    </div>

    <div class="card">
        <a href="/home" class="back-link">‹ К списку пользователей</a>

        <div class="edit-header">
            <div>
                <h2>Создание  пользователя</h2>
            </div>
        </div>

        <form action="/user/store" method="POST">
            <div class="field-row">
                <div class="field">
                    <label for="login">Логин</label>
                    <input id="login" type="text" name="login" required>
                    <div class="field-hint">Должен быть уникальным — проверяется при сохранении</div>
                </div>

                <div class="field">
                    <label for="password">Новый пароль</label>
                    <input id="password" type="password" name="password" placeholder="Оставьте пустым, чтобы не менять" required>
                </div>
            </div>
            <div class="field-row">
                <div class="field">
                    <label for="first_name">Имя</label>
                    <input id="first_name" type="text" name="first_name" required>
                </div>
                <div class="field">
                    <label for="last_name">Фамилия</label>
                    <input id="last_name" type="text" name="last_name" required>
                </div>
            </div>

            <div class="field">
                <label>Пол</label>
                <div class="gender-toggle">
                    <label class="gender-option">
                        <input type="radio" name="gender" value="male" checked>
                        Мужской
                    </label>
                    <label class="gender-option">
                        <input type="radio" name="gender" value="female">
                        Женский
                    </label>
                </div>
            </div>

            <div class="field">
                <label for="birth_date">Дата рождения</label>
                <input id="birth_date" type="date" name="birth_date">
            </div>

            <div class="edit-footer">
                <button type="button" class="btn-text">Отмена</button>
                <button type="submit" class="btn-primary">Сохранить</button>
            </div>
        </form>


    </div>
</div>