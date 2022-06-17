<?php

class EmpresaController extends BaseAuthController
{
    public function index(){
        $empresas = Empresa::all();
        //mostrar a vista index passando os dados por parâmetro
            $this->makeView('empresa', 'index', ['empresas' => $empresas]);
    }

    public function show($id)
    {
            $this -> loginFilter();
        $empresa = Empresa::find([$id]);

        if (is_null($empresa)) {
            //TODO redirect to standard error page
        } else {
            //mostrar a vista show passando os dados por parâmetro
            $this->makeView('empresa', 'show', ['empresa' => $empresa]);
        }
    }

    public function edit($id)
    {
            $this -> loginFilterByRole(['admin', 'funcionario']);
        $empresa = Empresa::find([$id]);
        if (is_null($empresa)) {
            //TODO redirect to standard error page
        } else {
            //mostrar a vista show passando os dados por parâmetro
            $this->makeView('empresa', 'edit', ['empresa' => $empresa]);
        }
    }

    public function update($id)
    {
        //find resource (activerecord/model) instance where PK = $id
        //your form name fields must match the ones of the table fields
        $empresa = Empresa::find([$id]);
        $empresa->update_attributes($_POST);

        if($empresa->is_valid()){
            $empresa->save();
            //redirecionar para o index
            $this->redirectRoute('empresa', 'index');
        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->makeView('empresa', 'edit', ['empresa' => $empresa]);
        }
    }
}