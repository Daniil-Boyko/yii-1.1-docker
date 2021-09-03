<?php

class MyController extends Controller
{
    public function actionOne ()
    {
        echo $this -> one();
    }

    private function one ()
    {
        return 'This is my controller, what are you doing here?';
    }
}
