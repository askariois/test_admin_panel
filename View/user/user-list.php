<!-- Шапка сайта -->
<?php include __DIR__ . '/../components/header/header.php'; ?>



<div class="card">

    <h1>Пользователи</h1>

    <div class="toolbar">
        <div class="search">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="7" />
                <path d="m21 21-4.35-4.35" />
            </svg>
            <input type="text" placeholder="Поиск по логину...">
        </div>
        <a href="/user/create" class="btn-primary">+ Добавить пользователя</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ПОЛЬЗОВАТЕЛЬ</th>
                <th class="sortable">ЛОГИН ▾</th>
                <th>ПОЛ</th>
                <th class="sortable">ДАТА РОЖДЕНИЯ ▾</th>
                <th class="actions-col">ДЕЙСТВИЯ</th>
            </tr>
        </thead>
        <tbody id="user-rows">
            <?php if (empty($users)): ?>
                <tr>
                    <td colspan="6">Нет пользователей</td>
                </tr>
            <?php else: ?>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['first_name'] ?>         <?= $user['last_name'] ?></td>
                        <td class="sortable"><?= $user['login'] ?></td>
                        <td><?= $user['gender'] ?></td>
                        <td class="sortable"><?= $user['birth_date'] ?></td>
                        <td class="actions-col">
                            <div class="row-actions">
                                <a href="/user/edit/<?= $user['id'] ?>">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 20h9M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5z"></path>
                                    </svg>
                                </a>
                                <svg class="danger" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path
                                        d="M3 6h18M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2m3 0-1 14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2L4 6h16z">
                                    </path>
                                </svg>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>

    <div class="list-footer">
        <div class="count">Показано 1–8 из 87 пользователей</div>
        <div class="pagination">
            <button aria-label="Предыдущая">‹</button>
            <button class="active">1</button>
            <button>2</button>
            <button>3</button>
            <span class="ellipsis">…</span>
            <button>12</button>
            <button aria-label="Следующая">›</button>
        </div>
    </div>
</div>
</div>
<?php include __DIR__ . '/../components/footer/footer.php'; ?>

</body>

</html>