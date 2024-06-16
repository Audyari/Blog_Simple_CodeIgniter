<h2>Tambah Artikel Baru</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('blog/save_blog'); ?>

    <label for="title">Judul:</label>
    <input type="text" id="title" name="title" value="<?php echo set_value('title'); ?>">

    <label for="content">Isi:</label>
    <textarea id="content" name="content"><?php echo set_value('content'); ?></textarea>

    <input type="submit" name="submit" value="Simpan">

<?php echo form_close(); ?>
