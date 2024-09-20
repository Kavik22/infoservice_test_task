@extends('layouts.app')

@section('content')
<div class="toForm">
  <div class="card">
    <h2 class="mb-3">{{ $lead->name }}, Ваша заявка принята</h2>
    <a href="{{ route('main.index') }}" class="btn btn-primary">Создать ещё одну заявку</a>
  </div>
</div>
@endsection