$(function() {
  $(document).on('click','.open-modal-isi',function(e) {
    e.preventDefault();
    $("#get-data-isi").modal("show");
    $.post('modal_pengisianrm.php', {id:$(this).attr('data-id')},
      function(html) {
        $(".modal-body-isi").html(html);
      });
  });
});