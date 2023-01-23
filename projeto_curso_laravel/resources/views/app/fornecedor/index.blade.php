<h3>Fornecedor</h3>

{{-- @if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem varios fornecedores cadastrados</h3>
@else
    <h3>Ainda nao existem fornecedores cadastrados</h3>
@endif --}}


{{-- @dd($fornecedores) --}}

@isset($fornecedores)
    Fornecedor: {{$fornecedores[0]['nome']}}
    <br>
    Status: {{$fornecedores[0]['status']}}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{$fornecedores[0]['cnpj']}}
        @empty($fornecedores[0]['cnpj'])
            - Vazio
        @endempty        
    @endisset
@endisset

{{-- @if (!($fornecedores[0]['status'] == 'S'))
    Fornecedor inativo    
@endif
<br> --}}
{{-- @unless ($fornecedores[0]['status'] == 'S')
    Fornecedor inativo 
@endunless --}}