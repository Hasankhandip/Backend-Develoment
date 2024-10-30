<div class="div">
    <div class="float-left">
        <p>
            <a href="index.php?task=report">All Students</a>
            <?php if (hasPrivilege()): ?>
                |
                <a href="index.php?task=add">Add New Students</a>
            <?php endif; ?>
            <?php
            if (isAdmin()):
            ?> |
                <a href="index.php?task=seed">Seed</a>
            <?php
            endif;
            ?>
        </p>
    </div>
    <div class="float-right">
        <?php
        if (!$_SESSION['loggedin']):
        ?>
            <a href="crud.php">Log In</a>
        <?php else : ?>
            <a href="crud.php?logout=true">Log Out (<?php echo $_SESSION['role'] ?>)</a>
        <?php endif; ?>
    </div>
</div>