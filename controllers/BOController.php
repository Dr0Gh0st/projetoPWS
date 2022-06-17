<?php

require_once './controllers/BaseAuthController.php';

class BOController extends BaseAuthController
{
    public function index(){
            $this ->loginFilterByRole(['admin', 'funcionario']);
        $this -> makeView('bo', 'index');
    }

    public function create()
    {
        $this ->loginFilterByRole(['admin', 'funcionario']);
        //mostrar a vista create
        $users = User::all();
        $this->makeView('bo', 'create', ['users' => $users]);
    }

    public function store()
    {
        //create new resource (activerecord/model) instance with data from POST
        //your form name fields must match the ones of the table fields
        $user = new User($_POST);
        if($user->is_valid()){
            $user->save();
            //redirecionar para o index
            $this->redirectRoute('bo', 'index');
        } else {
            //mostrar vista create passando o modelo como parâmetro
            $this->makeView('bo', 'create');
        }
    }

    public function edit($id)
    {
            $this -> loginFilterByRole(['admin', 'funcionario']);
        $user = User::find([$id]);
        if (is_null($user)) {
            //TODO redirect to standard error page
        } else {
            //mostrar a vista show passando os dados por parâmetro
            $this->makeView('bo', 'edit', ['user' => $user]);
        }
    }

    public function update($id)
    {
        //find resource (activerecord/model) instance where PK = $id
        //your form name fields must match the ones of the table fields
        $user = User::find([$id]);
        $user->update_attributes($_POST);

        if($user->is_valid()){
            $user->save();
            //redirecionar para o index
            $this->redirectRoute('bo', 'index');
        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->makeView('bo', 'edit', ['user' => $user]);
        }
    }
}