<?php

class DefaultController extends Controller {

    public function actionIndex() {
        $this->redirect(array('format'));
    }
    
    public function actionFormat() {
        $model = new DaterangeConfig();
        if (isset($_POST['DaterangeConfig'])) {
            $model->attributes = $_POST['DaterangeConfig'];
            if ($model->validate()) {
                
            }
        }
        $this->render('contact', array('model' => $model));
    }

}
