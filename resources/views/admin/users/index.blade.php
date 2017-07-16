@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Listagem Usuário</h3>
            {!! Button::primary('Novo Usuário')->asLinkTo(route('admin.users.create')) !!}
        </div>

        <div class="row">
            {!! Table::withContents($users->items()) !!}
        </div>

        {!! $users->links() !!}
    </div>
@endsection