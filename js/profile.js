$(function() {
  $(document).on('click','.open-modal',function(e) {
    e.preventDefault();
    $("#get-data").modal("show");
    $.post('modal_profiledata.php', {id:$(this).attr('data-id')},
      function(html) {
        $(".modal-body").html(html);
      });
  });
});