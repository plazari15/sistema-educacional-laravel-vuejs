@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Novo Usuário</h3>
            {!!
            form($form->add('insert', 'submit', [
            'attr' => ['class' => 'btn btn-success btn-block'
            ],
            'label' => 'Editar Usuário']))
            !!}
        </div>
    </div>
@endsection