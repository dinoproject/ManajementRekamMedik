$(function() {
  $(document).on('click','.open-modal-catat',function(e) {
    e.preventDefault();
    $("#get-data-catat").modal("show");
    $.post('modal_catatanrm.php', {id:$(this).attr('data-id')},
      function(html) {
        $(".modal-body-catat").html(html);
      });
  });
});