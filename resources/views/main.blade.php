<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/app.css">
  <title>Form</title>
</head>

<body>
  <div class="card">
    <h2>Отправка заявки</h2>
    <form action="{{route('form.store')}}" method="post" style="min-width: 500px">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Имя</label>
        <input type="text" class="form-control" name="name" placeholder="Введите имя" value="{{ old('name') }}">
        @if ($errors->has('name'))
          <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
      </div>
      <div class="mb-3">
        <label for="surname" class="form-label">Фамилия</label>
        <input type="text" class="form-control" name="surname" placeholder="Введите фамилию" value="{{ old('surname') }}">
        @if ($errors->has('surname'))
          <span class="text-danger">{{ $errors->first('surname') }}</span>
        @endif
      </div>
      <div class="mb-3">
        <label for="phone_number" class="form-label">Номер телефона</label>
        <input type="text" class="form-control" name="phone_number" placeholder="Введите номер телефона" maxlength="11" value="{{ old('phone_number') }}">
        @if ($errors->has('phone_number'))
          <span class="text-danger">{{ $errors->first('phone_number') }}</span>
        @endif
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Почта</label>
        <input type="email" class="form-control" name="email" placeholder="Введите почту" value="{{ old('email') }}">
        @if ($errors->has('email'))
          <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Текст обращения</label>
        <textarea type="text" class="form-control" name="body" placeholder="Опишите вашу проблему"> {{ old('body') }}</textarea>
        @if ($errors->has('body'))
          <span class="text-danger">{{ $errors->first('body') }}</span>
        @endif
      </div>
      <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
  </div>
</body>

</html>