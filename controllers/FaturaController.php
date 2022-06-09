<?php

    use Carbon\Carbon;

class FaturaController extends BaseAuthController
{
    public function index()
    {
            $faturas = Fatura::all();

        $this ->loginFilterByRole(['admin', 'funcionario', 'cliente']);
            $this -> makeView('fatura', 'index', ['faturas' => $faturas]);
    }

    public function show($id)
    {
        $this -> loginFilterByRole(['admin', 'funcionario']);

        $fatura = Fatura::all([$id]);
        if (is_null($fatura)) {
            //TODO redirect to standard error page
        } else {
            //mostrar a vista show passando os dados por parâmetro
            $this->makeView('fatura', 'show', ['book' => $fatura]);
        }
    }

    public function create()
    {
        $this -> loginFilterByRole(['admin', 'funcionario']);

        $lf = LinhaFatura::all();

        $this ->loginFilterByRole(['admin', 'funcionario']);
            $this->makeView('fatura', 'create', ['lf' => $lf]);
    }

    public function store($idCliente)
    {
        $this -> loginFilterByRole(['admin', 'funcionario']);

        //create new resource (activerecord/model) instance with data from POST
        //your form name fields must match the ones of the table fields
        $fatura = new Fatura($_POST);

        if($fatura->is_valid()){
            $fatura->save();
            //redirecionar para o index
                $this->redirectRoute('fatura', 'index');
        } else {
            //mostrar vista create passando o modelo como parâmetro
                $this->makeView('fatura', 'create');
        }
    }

    /*public function selectClient()
    {
        
    }*/
}