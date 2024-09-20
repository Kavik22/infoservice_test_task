$(document).ready(function () {
  $('.status-select').change(function () {
    var selectedStatus = $(this).val();
    var requestId = $(this).data('id');

    $.ajax({
      url: '/form/' + requestId,
      method: 'PATCH',
      data: {
        status_id: selectedStatus,
        _token: csrfToken,
      },
      success: function (response) {
        if (response.success) {
          alert('Статус обновлён успешно!');
        }
      },
      error: function (xhr) {
        alert('Произошла ошибка при обновлении статуса.');
      }
    });
  });
});