<div class="container">
    <div class="row">
        <div class="col-12 col-sm8-offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <div class="container">
                <h3>CSIR Technologies</h3>
                <h4>Other Technologies</h4>
                <hr>

                <form class="" action="/" method="post">
                    <div class="form-group">
                        <label for="technology-name">Technology name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="technology-name" id="technology-name" value="">
                            <div class="input-group-append">
                                <select class="form-control" name="category">
                                    <option value="">Select Category</option>
                                    <option value="category-1">Maize</option>
                                    <option value="category-2">Rice</option>
                                    <option value="category-3">Cowpea</option>
                                    <option value="category-3">Millet</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
    <label for="other-categories">Other </label>
    <div class="input-group">
        <input type="text" class="form-control" name="other-categories" id="other-categories" value="">
        <div class="input-group-append">
            <select class="form-control" name="other-tech-category">
                <option value="">Select Institution</option>
                <option value="category-1">Water Research Institution</option>
                <option value="category-2">Soil Research Institution </option>
                <option value="category-3">Animal Research Institution</option>
            </select>
        </div>
    </div>
</div>


                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" name="description" id="description" value="">
                    </div>

                    <div class="form-group">
                        <label for="atributes">Atributes</label>
                        <input type="text" class="form-control" name="description" id="atributes" value="">
                    </div>

                    

                   

                    <div class="form-group">
                        <label for="websitesFax">websitesFax</label>
                        <input type="text" class="form-control" name="websitesFax" id="websitesFax" value="">
                    </div>

                   

                    <div class="form-group">
                        <label for="telephone">telephone</label>
                        <input type="telephone" class="form-control" name="telephone" id="telephone" value="">
                    </div>

                    <div class="form-group">
                        <label for="year">Year</label>
                        <input type="year" class="form-control" name="description" id="year" value="">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="">
                    </div>

                    <div class="form-group">
                        <label for="benefits">Uses and Benefits</label>
                        <input type="text" class="form-control" name="benefits" id="benefits" value="">
                    </div>

                    <div class="form-group">
                        <label for="description">Applicability</label>
                        <input type="text" class="form-control" name="description" id="description" value="">
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