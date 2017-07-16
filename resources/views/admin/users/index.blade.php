@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Listagem Usuário</h3>
            {!! Button::primary(Icon::create('pencil') . ' Novo Usuário')->asLinkTo(route('admin.users.create')) !!}
        </div>

        <div class="row">
            {!! Table::withContents($users->items())->striped()->callback('Ações', function($field, $model){
                $linkEdit = route('admin.users.edit', ['user' => $model->id]);
                $linkShow = route('admin.users.show', ['user' => $model->id]);

                return Button::link(Icon::create('pencil') . ' Editar')->asLinkTo($linkEdit) . '|' . Button::link(Icon::create('folder-open') . ' Ver')->asLinkTo($linkShow);
            }) !!}
        </div>

        {!! $users->links() !!}
    </div>
@endsection