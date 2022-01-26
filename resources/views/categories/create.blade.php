@extends("template")
@section("content")
<div class="col-9 central mb-3">
    @if(isset($data))
        <span class="p-2 bg-title text-light text-uppercase h5 mb-0 text-branco"><i class="fas fa-plus-circle"></i> Editar categoria</span>
        <form action="{{ route('categories.update', $data->id) }}" method="Post">
        @method("PUT")
    @else
        <span class="p-2 bg-title text-light text-uppercase h5 mb-0 text-branco"><i class="fas fa-plus-circle"></i> Cadastrar categoria</span>
        <form action="{{ route('categories.store') }}" method="Post">
    @endif
        @csrf
        <div class="col-6 d-block m-auto rows px-5 py-5">
            <div class="col-12 mb-3">
                <label class="text-label">Nome</label>	
                <input type="text" name="name" value="{{ isset($data->name) ? $data->name : null }}" class="form-campo" placeholder="Digite o nome da categoria">
            </div>
            <div class="col-12 mt-3 mb-5">
                <input type="hidden" name="id_categoria" value="">
                @if(isset($data))
                    <input type="submit" name="" value="Editar categoria" class="btn btn-laranja d-block m-auto">
                @else
                    <input type="submit" name="" value="Inserir categoria" class="btn btn-laranja d-block m-auto">
                @endif
            </div>
        </div>
    </form>
</div>
@stop