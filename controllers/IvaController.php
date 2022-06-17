<?php

class IvaController extends BaseAuthController
{
    public function index(){
        $ivas = Iva::all();
            $this ->loginFilterByRole(['admin', 'funcionario']);
        $this -> makeView('iva', 'index', ['ivas' => $ivas]);
    }

    public function edit($id)
    {
        $iva = Iva::find([$id]);
        if (is_null($iva)) {
            //TODO redirect to standard error page
        } else {
            //mostrar a vista show passando os dados por parâmetro
            $this->makeView('iva', 'edit', ['iva' => $iva]);
        }
    }

    public function update($id)
    {
        //find resource (activerecord/model) instance where PK = $id
        //your form name fields must match the ones of the table fields
        $iva = Iva::find([$id]);
        $iva->update_attributes($_POST);

        if($iva->is_valid()){
            $iva->save();
            //redirecionar para o index
            $this->redirectRoute('iva', 'index');
        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->makeView('iva', 'edit', ['iva' => $iva]);
        }
    }
}