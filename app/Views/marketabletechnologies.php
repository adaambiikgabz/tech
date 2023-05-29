<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white form-wrapper">
            <div class="container">
                <h3>CSIR Technologies</h3>
                <h4>List of Marketable Technologies</h4>
                <hr>

                <?= form_open('/marketabletechnologies', ['method' => 'post']) ?>

                    <div class="form-group">
                        <label for="Technologies">Technologies</label>
                        <input type="text" class="form-control" name="Technologies" id="Technologies" value="">
                    </div>

                    <div class="form-group">
                        <label for="Year">Year</label>
                        <input type="number" class="form-control" name="Year" id="Year" value="">
                    </div>

                    <div class="form-group">
                        <label for="image">Upload image if any</label>
                        <input type="file" class="form-control" name="image" id="image">
                    </div>

                    <?php if (isset($validation)): ?>
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <?= $validation->listErrors() ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <?= form_close() ?>
                            <?= anchor('/marketabletechnologies', 'Cancel', ['class' => 'btn btn-secondary']) ?>
                        </div>
                        
                        <div class="col-12 col-sm-8 text-right">
                            <a href="/dashboard">Dashboard</a>
                        </div>
                    </div>

                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>

<style>
    .input-group-append select {
        border-radius: 0 4px 4px 0;
        border-left: none;
    }
</style>
