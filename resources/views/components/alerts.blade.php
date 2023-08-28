<!--
alert-primary
alert-success
alert-danger
alert-warning
alert-info
-->
<div class="alert alert-dismissible fade show alert-{{ $type }}" role="alert">
  {{ $message }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>