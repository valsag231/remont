$(document).ready(function(){
  $('#myModal').on('show.bs.modal', function (event) {
 var button = $(event.relatedTarget);
  var id_avto = button.data('id_avto');
  var marka_model = button.data('marka_model');
  var modal = $(this);
 modal.find('.modal-title').text('Заказать '+marka_model);
 modal.find('.modal-body #id_avto').val(id_avto);
})
});