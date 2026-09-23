<!-- Шапка сайта -->
<?php include __DIR__ . '/../components/header/header.php'; ?>



<div class="card">

    <div class="flex justify-between items-center mb-4">
        <h1>Пользователи</h1>

        <div class="card-header">
            <div class="avatar">AC</div>
            <div>
                <h3><?= htmlspecialchars($adminData['login']) ?></h3>
                <div class="meta">ID: <?= $adminData['id'] ?> · создан <?= $adminData['created_at'] ?></div>
                <form action="/logout" method="POST">
                    <button class="btn-danger mt-4">Выйти</button>
                </form>
            </div>
        </div>
    </div>


    <div class="toolbar">
        <form action="/home" method="GET" class="search">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="7" />
                <path d="m21 21-4.35-4.35" />
            </svg>
            <input type="text" placeholder="Поиск по логину..." name="search" value="<?= htmlspecialchars($search) ?>">
        </form>
        <a href="/home" class="btn-primary">Сбросить</a>
        <a href="/user/create" class="btn-primary">+ Добавить пользователя</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th class="sortable">ЛОГИН ▾</th>
                <th>ПОЛЬЗОВАТЕЛЬ</th>
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
                        <td class="sortable"><a href="/user/show/<?= $user['id'] ?>" class="user_link">
                                <?= $user['login'] ?></a></td>

                        <td><?= $user['first_name'] ?>         <?= $user['last_name'] ?></td>
                        <td><?= $user['gender'] ?></td>
                        <td class="sortable"><?= $user['birth_date'] ?></td>
                        <td class="actions-col">
                            <div class="row-actions">
                                <a href="/user/edit/<?= $user['id'] ?>">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 20h9M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5z"></path>
                                    </svg>
                                </a>
                                <button command="show-modal" commandfor="my-dialog-<?= $user['id'] ?>">
                                    <svg class="danger" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path
                                            d="M3 6h18M8 6V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2m3 0-1 14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2L4 6h16z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <dialog id="my-dialog-<?= $user['id'] ?>">
                        <p>Вы уверены, что хотите удалить этого пользователя с ID: <?= $user['id'] ?>?</p>
                        <form method="POST" action="/user/delete/<?= $user['id'] ?>">
                            <button type="submit" class="danger">Да</button>
                            <button type="button"
                                onclick="document.getElementById('my-dialog-<?= $user['id'] ?>').close()">Нет</button>
                        </form>
                    </dialog>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>

    <div class="list-footer">
        <div class="pagination">
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <a href="/home?page=<?= $i ?>">
                    <button aria-label="Предыдущая" class="<?= ($i == $page) ? 'active' : '' ?>">
                        <?= $i ?>
                    </button>
                </a>
            <?php endfor; ?>

        </div>
    </div>
</div>
</div>
<?php include __DIR__ . '/../components/footer/footer.php'; ?>

</body>

</html>