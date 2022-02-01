@extends("template")
@section("content")

<div class="col-9 central mb-3">
    <span class="p-2 bg-title text-light text-uppercase h5 mb-0 text-branco"><i class="fas fa-plus-circle"></i> Cadastrar produto</span>
    @if($errors->any())
    <div class="alert alert-warning">
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>    
    @endif
    
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="rows p-4"> 
        <div class="col-4">
            <div class="py-1 px-2 mt-3 border text-center">
                <img src="{{ asset('storage/upload/semproduto.png') }}" class="img-fluido opaco">
            </div>
        </div>
        <div class="col-8 px-2">
            <div class="rows">
                <div class="col-12 mb-3">
                    <label class="text-label">Titulo do produto</label>
                    <input type="text" value="" name="name" placeholder="Digite aqui..." class="form-campo">
                </div>
                <div class="col-6 mb-3">
                    <label class="text-label">Categoria</label>
                    <select class="form-campo" name="category_id">
                        <option value="">Escolha uma categoria</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach 
                    </select>
                </div>
                <div class="col-6 mb-3">
                    <label class="text-label">Unidade</label>
                    <select class="form-campo" name="unit_id">
                        <option value="">Selecione uma unidade</option> 
                        @foreach($units as $unit)
                        <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-6 mb-3">
                    <label class="text-label">Upload da imagem</label>
                    <input type="file" name="image" class="form-campo">
                </div>
                <div class="col-6 mb-3">
                    <label class="text-label">Nome do arquivo</label>
                    <input type="text" value="" name="nome_do_arquivo" placeholder="Digite aqui..." class="form-campo">
                </div>
                <div class="col-4 mb-3">
                    <label class="text-label">Preço Alto</label>
                    <input type="text" name="high_price" value="" placeholder="Digite aqui..." class="form-campo">
                </div>
                <div class="col-4 mb-3">
                    <label class="text-label">Preço atual</label>
                    <input type="text" name="price" value="" placeholder="Digite aqui..." class="form-campo">
                </div>												

                <div class="col-3 mb-3">
                    <label class="text-label">Ativo</label>
                    <select class="form-campo" name="ativo">
                        <option value="Y">Sim</option>                                                 
                        <option value="N">Não</option> 
                    </select>
                </div>
                <div class="col-3 mb-3">
                    <label class="text-label">Produto</label>
                    <select class="form-campo" name="is_product">
                        <option value="Y">Sim</option>                                                 
                        <option value="N">Não</option> 
                    </select>
                </div>
                <div class="col-3 mb-3">
                    <label class="text-label">Insumo</label>
                    <select class="form-campo" name="is_material">
                        <option value="Y">Sim</option>                                                 
                        <option value="N">Não</option> 
                    </select>
                </div>
                <div class="col-12 mt-2">
                    <input type="hidden" name="id_produto" value="">
                    <input type="submit" value="Salvar" class="btn btn-laranja btn-medio d-block m-auto">
                </div>	
            </div>
        </div>
    </div>
    </form>
</div>
@stop