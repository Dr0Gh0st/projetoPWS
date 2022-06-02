 <?php

 class BaseController
    {
        public function makeView($controllerPrefix, $action, $params=[]): void
        {
            extract($params);

            $auth = new Auth();

            if ($auth->isLoggedIn()) {
                $username = $auth->getUsername();
                $userRole = $auth->getUserRole();
            }

            require_once './views/layout/header.php';
            require_once './views/' . $controllerPrefix . '/' . $action . '.php';
            require_once './views/layout/footer.php';
        }

        public function redirectRoute($controllerPrefix, $action, $params=[]): void
        {

            $url = 'Location: router.php?c='.$controllerPrefix.'&a='.$action;
            foreach ($params as $paramKey => $paramValue){
                $url.='&'.$paramKey.'='.$paramValue;
            }
            header($url);
        }
    }