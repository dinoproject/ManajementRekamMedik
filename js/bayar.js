$(function() {
  $(document).on('click','.open-modal-bayar',function(e) {
    e.preventDefault();
    $("#get-data-bayar").modal("show");
    $.post('modal_bayar.php', {id:$(this).attr('data-id')},
      function(html) {
        $(".modal-body-bayar").html(html);
      });
  });
});