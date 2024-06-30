<?= $this->extend('layouts\Apps.php') ?>
<?= $this->section('content') ?>

<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"> Control Panel <small>Pelindo</small></h1>
            </div>
            <div class="col-sm-6">

            </div>
        </div>
    </div>
</div>


<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">PANEL</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body align-center" style="display: block;">
                        <label class="switch">
                            <input class="cb" type="checkbox" />
                            <span class="toggle">
                                <span class="left">OFF</span>
                                <span class="right">ON</span>
                            </span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>