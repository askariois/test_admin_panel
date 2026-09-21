<div class="panel-wrap">
  <div class="eyebrow">SIBERS · ПАНЕЛЬ АДМИНИСТРАТОРА</div>

  <div class="card">

    <!-- LOGIN FORM -->
    <div id="login-view">
      <h1>Вход в систему</h1>
      <p class="subtitle">Введите логин и пароль, чтобы продолжить</p>

      <div class="alert" id="form-alert"></div>

      <form id="login-form" novalidate>
        <div class="field">
          <label for="login">Логин</label>
          <input id="login" name="login" type="text" placeholder="например, askar.s" autocomplete="username">
          <div class="field-error" id="login-error"></div>
        </div>

        <div class="field">
          <label for="password">Пароль</label>
          <input id="password" name="password" type="password" placeholder="Введите пароль" autocomplete="current-password">
          <div class="field-error" id="password-error"></div>
        </div>

        <div class="row-between">
          <label class="checkbox-option">
            <input type="checkbox" id="remember">
            Запомнить меня
          </label>
          <a href="#" class="link">Забыли пароль?</a>
        </div>

        <button type="submit" class="btn-primary" id="submit-btn">
          <span class="spinner" id="spinner"></span>
          <span id="submit-label">Войти</span>
        </button>
      </form>

      <div class="hint-footer">Демо-доступ: логин <b>askar.s</b>, пароль <b>12345678</b></div>
    </div>

    <!-- SUCCESS / LOGGED-IN VIEW -->
    <div class="success-view" id="success-view">
      <div class="avatar" id="success-avatar">AC</div>
      <h2 id="success-name">Аскар Сыдыкакпаров</h2>
      <p>Вы вошли как <span id="success-login">askar.s</span></p>
      <button type="button" class="btn-primary" id="logout-btn">Выйти</button>
    </div>

  </div>
</div>