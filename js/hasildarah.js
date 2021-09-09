$(function() {
  $(document).on('click','.open-modal-darah',function(e) {
    e.preventDefault();
    $("#get-data-darah").modal("show");
    $.post('modal_hasildarah.php', {id:$(this).attr('data-id')},
      function(html) {
        $(".modal-body-darah").html(html);
      });
  });
});