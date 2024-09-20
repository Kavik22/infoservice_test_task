<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/app.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    const csrfToken = '{{ csrf_token() }}';
  </script>
  <script src="{{ asset('js/changeStatus.js') }}"></script>
  <title>Лиды</title>
</head>

<body>
  <div class="d-flex justify-content-center gap-3 mb-3">
    @foreach ($statuses as $status)
    <div class="card">
      <h3>{{ $status->title }}: {{ count($status->leads) }}</h3>
    </div>
  @endforeach
  </div>
  <div class="card">
    <h2>Заявки</h2>
    <table class="table table-res">
      <thead>
        <tr>
          <th>Id</th>
          <th>Имя</th>
          <th>Фамилия</th>
          <th>Номер телефона</th>
          <th>Дата создания</th>
          <th>Статус</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($leads as $lead)
      <tr>
        <td><?php  echo $lead['id']?></td>
        <td><?php  echo $lead['name'];?></td>
        <td><?php  echo $lead['surname'];?></td>
        <td><?php  echo $lead['phone_number'];?></td>
        <td><?php  echo $lead['created_at']?></td>
        <td>
        <select class="status-select form-select" data-id="{{ $lead['id'] }}">
          @foreach ($statuses as $status)
        <option value="{{ $status->id }}" {{ $lead->status->id == $status->id ? 'selected' : '' }}>
        {{$status->title}}
        </option>
      @endforeach
        </select>
        </td>
        <td>
        <div class="d-flex justify-content-between gap-3">
          <a href="{{ route('info.edit', $lead->id) }}" class="btn btn-primary">Редактировать</a>
          <form action="{{ route('info.delete', $lead->id) }}" method="post">
          @csrf
          @method('delete')
          <input type="submit" class="btn btn-danger" value="Удалить">
          </form>
        </div>
        </td>
      </tr>
    @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>