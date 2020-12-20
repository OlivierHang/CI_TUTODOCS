<h2><?= esc($title) ?></h2>

<!-- used to report errors related to form validation -->
<?= \Config\Services::validation()->listErrors(); ?>

<form action="<?= base_url() ?>/news/create" method="post">
    <!-- creates a hidden input with a CSRF token that helps protect against some common attacks -->
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input type="input" name="title"><br />


    <label for="body">Text</label>
    <textarea name="body"></textarea> <br />

    <input type="submit" name="submit" value="Create news item">

</form>