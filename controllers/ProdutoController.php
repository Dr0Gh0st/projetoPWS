<?php

class ProdutoController extends BaseAuthController
{
    public function index(){
        $produtos = Produto::all();
            $this ->loginFilterByRole(['admin', 'funcionario']);
        $this -> makeView('produto', 'index', ['produtos' => $produtos]);
    }

    public function edit($id)
    {
        $produto = Produto::find([$id]);
        if (is_null($produto)) {
            //TODO redirect to standard error page
        } else {
            //mostrar a vista show passando os dados por parâmetro
            $this->makeView('produto', 'edit', ['produto' => $produto]);
        }
    }

    public function update($id)
    {
        //find resource (activerecord/model) instance where PK = $id
        //your form name fields must match the ones of the table fields
        $produto = Produto::find([$id]);
        $produto->update_attributes($_POST);

        if($produto->is_valid()){
            $produto->save();
            //redirecionar para o index
            $this->redirectRoute('produto', 'index');
        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->makeView('produto', 'edit', ['produto' => $produto]);
        }
    }
}