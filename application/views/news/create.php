<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

    <label for="title">Title</label>
    <input type="input" name="title" class="form-control" /><br />

    <label for="text">Text</label>
    <textarea name="text" class="form-control"></textarea><br />

    <input class="btn btn-default" type="submit" name="submit" value="Create news item" />

</form>
