<div class="container">
    <div class="row">
        <div class="col-12 col-sm8-offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <div class="container">
                <h3>CSIR Technologies</h3>
                <h4>Other Technologies</h4>
                <hr>

                <form class="" action="/othertechnologies" method="post">
                    <div class="form-group">
                        <label for="Technology">Technology</label>
                            <input type="text" class="form-control" name="Technology" id="Technology" value="">

                            <div class="form-group">
                        <label for="Year">Year</label>
                        <input type="number" class="form-control" name="Year" id="Year" value="">
                    </div>
                           

                    <div class="form-group">
                        <label for="Attributes">Attributes</label>
                        <input type="text" class="form-control" name="Attributes" id="Attributes" value="">
                    </div>

                    <div class="form-group">
                        <label for="description">Applicability</label>
                        <input type="text" class="form-control" name="description" id="description" value="">
                    </div>

                    <div class="form-group">
                        <label for="Uses">Uses</label>
                        <input type="text" class="form-control" name="Uses" id="Uses" value="">
                    </div>

                    
                    <div class="form-group">
                        <label for="Contact">Contact</label>
                        <input type="Contact" class="form-control" name="Contact" id="Contact" value="">
                    </div>

                    <div class="form-group">
                        <label for="Telephone">Telephone</label>
                        <input type="Contact" class="form-control" name="Telephone" id="Telephone" value="">
                    </div>

                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="Email" class="form-control" name="Email" id="Email" value="">
                    </div>
                   

                    <div class="form-group">
                        <label for="GPS">GPS</label>
                        <input type="text" class="form-control" name="GPS" id="GPS" value="">
                    </div>

                    <div class="form-group">
                        <label for="Category">Category</label>
                        <input type="text" class="form-control" name="Category" id="Category" value="">
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
    <?php echo form_close(); ?>
    <?php echo anchor('/dashboard', 'Cancel', array('class' => 'btn btn-secondary')); ?>
</div>
                        
<div class="col-12 col-sm-8 text-right">
                <a href="/dashboard">Dashboard</a>
                        </div>
                    </div>
                </form>
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