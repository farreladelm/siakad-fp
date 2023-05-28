<!-- header -->
<?php $this->load->view('_template/header') ?>
<!-- sidebar -->
<?php $this->load->view('_template/sidebar') ?>


<div class="page-heading">
    <h3><?= $page_title ?></h3>
</div>
<div class="page-content">
    <section class="row">
        <?= $body ?>
    </section>
</div>

<!-- footer -->
<?php $this->load->view('_template/footer') ?>