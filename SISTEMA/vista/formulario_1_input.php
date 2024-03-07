<?php
require('header.php');
?>

<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12 col-md-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Formulario con 1 Input</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form">
                            <div class="row">
                                <div class="col-12 pb-4">
                                    <div class="form-group">
                                        <label for="first-name-column">First Name</label>
                                        <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname-column">
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-danger me-1 mb-1">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // Basic multiple Column Form section end -->

<?php
require('footer.php');
?>