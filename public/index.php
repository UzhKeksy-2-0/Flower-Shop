<?php
require_once './bootsrap.php';

use app\sds;
use CH\modificators\Auth\Authorization;
use CH\modificators\Log\CH_Log;
use CH\modificators\core\Application;
    try {
        $app = Application::createApplication();
        $app->router->setStaticRoute('','home');
        $app->router->setStaticRoute('error','error404');
        $app->run();
    } catch (Throwable $e) {
        if($e->getCode() == 404){
            header('Location: http://localhost:8080/error');
            return;
        }
        $error = new CH_Log();
        $error->error($e->getMessage() . "\n Stack trace : \n" . $e->getTraceAsString());
    }catch (Exception $e) {
        $error = new CH_Log();
        $error->error($e->getMessage() . "\n Stack trace : \n" . $e->getTraceAsString());
    }catch(ErrorException $e){
        $error = new CH_Log();
        $error->error($e->getMessage() . "\n Stack trace : \n" . $e->getTraceAsString());
    }