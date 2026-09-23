<!-- Шапка сайта -->
<?php include __DIR__ . '/../components/header/header.php'; ?>

<div >
  <div class="panel-title-row">
    <h2>Карточка пользователя</h2>
  </div>

  <div class="card-single">
    <a href="/home" class="card-back">‹ К списку пользователей</a>

    <div class="card-header">
      <div class="avatar">AC</div>
      <div>
        <h3><?= trim($user['first_name'] . ' ' . $user['last_name']) ?></h3>
        <div class="meta">ID <?= $user['id']; ?> · создан <?= $user['created_at']; ?></div>
        <span class="badge badge-male"><?php if($user['gender'] === 'male'): ?>Мужской<?php else: ?>Женский<?php endif; ?></span>
      </div>
    </div>

    <div class="info-list">
      <?php if($user['login']): ?>
      <div class="info-row">
        <span class="info-label">Логин</span>
        <span class="info-value link"><?= $user['login']; ?></span>
      </div>
      <?php endif; ?>
      <?php if($user['first_name']): ?>
      <div class="info-row">
        <span class="info-label">Имя</span>
        <span class="info-value"><?= $user['first_name']; ?></span>
      </div>
      <?php endif; ?>
      <?php if($user['last_name']): ?>
      <div class="info-row">
        <span class="info-label">Фамилия</span>
        <span class="info-value"><?= $user['last_name']; ?></span>
      </div>
      <?php endif; ?>
      <?php if($user['birth_date']): ?>
      <div class="info-row">
        <span class="info-label">Дата рождения</span>
        <span class="info-value"><?= $user['birth_date']; ?></span>
      </div>
      <?php endif; ?>
    </div>

  </div>
</div>