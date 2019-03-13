<?php

class TestClass
{
    public function actionIndex()
    {
        $this->render(
            'index',
            [
            ]
        );
    }

    public function actionShow()
    {
        $this->render(
            'show',
            [
            ]
        );
    }

    private function render()
    {
        
    }
}
