<?php if ($this->session->flashdata('message_type')): ?>
<div class="alert alert-<?php echo $this->session->flashdata('message_type'); ?> alert-dismissible fade show" role="alert">
    <?php echo $this->session->flashdata('message'); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>