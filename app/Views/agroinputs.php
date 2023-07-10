<div class="container">
    <div class="row">
        <div class="col-12 col-sm8-offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <div class="container">
                <h3>CSIR Technologies</h3>
                <h4>Agro Inputs</h4>
                <hr>

                <form class="" action="/agroinputs" method="post">
                    <div class="form-group">
                        <label for="Shopname">Shopname</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="Shopname" id="Shopname" value="">
                           
                        </div>
                    </div>

                <div class="form-group">
                      <label for="ProductSold">ProductSold</label>
                      <div class="input-group">
                      <input type="text" class="form-control" name="ProductSold" id="ProductSold" value="">
       
                </div>
                </div>

<div class="form-group">
                        <label for="Phone Number">Phone Number</label>
                        <input type="Phone Number" class="form-control" name="Phone Number" id="Phone Number" value="">
                    </div>
                   

                    <div class="form-group">
                        <label for="Association">Association</label>
                        <input type="text" class="form-control" name="Association" id="Association" value="">
                    </div>

                    <div class="form-group">
                        <label for="Location">Location</label>
                        <input type="Location" class="form-control" name="Location" id="Location" value="">
                    </div>

                    <div class="form-group">
                        <label for="ProductCategory">ProductCategory</label>
                        <input type="text" class="form-control" name="ProductCategory" id="ProductCategory" value="">
                    </div>


                    <div class="form-group">
                        <label for="Fertilizers">Fertilizers </label>
                        <input type="text" class="form-control" name="Fertilizers" id="Fertilizers" value="">
                    </div>

                  


                    <div class="form-group">
                        <label for="Implements">Implements</label>
                        <input type="text" class="form-control" name="Implements" id="Implements" value="">
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
    <?php echo anchor('/agroinputs', 'Cancel', array('class' => 'btn btn-secondary')); ?>
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