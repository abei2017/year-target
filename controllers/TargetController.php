<?php
/**
 * Created by PhpStorm.
 * User: abei2017
 * Date: 17-9-20
 * Time: 下午3:14
 */

namespace app\controllers;

use Yii;
use app\models\Target;
use yii\web\Controller;

class TargetController extends Controller {

    public function actionIndex(){
        return $this->render('index');
    }

    public function actionCreate(){
        $model = new Target();
        if(Yii::$app->request->isPost){
            $model->load(Yii::$app->request->post());
            if($model->save()){
                return $this->redirect(['/target/view','id'=>$model->id]);
            }
        }

        return $this->render('create',[
            'model'=>$model
        ]);
    }
}