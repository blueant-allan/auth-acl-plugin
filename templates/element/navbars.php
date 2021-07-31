<div class="content">
    <nav class="navigation">
        <ul>
            <li><?= $this->Html->link('Home', ['controller' => 'Dashboard', 'action' => 'index']) ?></li>
            <li>
                Users
                <ul>
                    <li><?= $this->Html->link('List', ['controller' => 'Users', 'action' => 'index']) ?></li>
                </ul>
            </li>
            <li><?= $this->Html->link('Logout', 'logout') ?></li>
        </ul>
    </nav>
</div>