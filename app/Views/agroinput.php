<div class="container">
    <div class="row">
        <div class="col-12 col-sm8-offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <div class="container">
                <h3>CSIR Technologies</h3>
                <h4>Agro Inputs</h4>
                <hr>

                <form class="" action="/" method="post">
                    <div class="form-group">
                        <label for="Shop name">Shop name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="Shop name" id="Shop name" value="">
                           
                        </div>
                    </div>

                    <div class="form-group">
    <label for="product sold">Product sold</label>
    <div class="input-group">
        <input type="text" class="form-control" name="product sold" id="product sold" value="">
       
    </div>
</div>

<div class="form-group">
                        <label for="telephone">telephone</label>
                        <input type="telephone" class="form-control" name="telephone" id="telephone" value="">
                    </div>
                   

                    <div class="form-group">
                        <label for="association">Association</label>
                        <input type="text" class="form-control" name="association" id="association" value="">
                    </div>

                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="location" class="form-control" name="location" id="location" value="">
                    </div>

                    <div class="form-group">
                        <label for="product category">Product category</label>
                        <input type="text" class="form-control" name="product category" id="product category" value="">
                    </div>

                    <div class="form-group">
                        <label for="websiteFax">websiteFax</label>
                        <input type="text" class="form-control" name="websiteFax" id="websiteFax" value="">
                    </div>

                    <div class="form-group">
                        <label for="fertilizers">Fertilizers </label>
                        <input type="text" class="form-control" name="fertilizers" id="fertilizers" value="">
                    </div>

                  


                    <div class="form-group">
                        <label for="implements">Implements</label>
                        <input type="text" class="form-control" name="implements" id="implements" value="">
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