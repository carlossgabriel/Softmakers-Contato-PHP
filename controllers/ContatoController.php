<?php

namespace app\controllers;

use Yii;
use app\models\ContatoModel;
use app\models\ContatoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ContatoController implements the CRUD actions for ContatoModel model.
 */
class ContatoController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ContatoModel models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ContatoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ContatoModel model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ContatoModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ContatoModel();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->foto = UploadedFile::getInstance($model, 'foto');
            if ($model->foto!==null) {
                $arquivo = $model->nome.'-'.$model->idContato;
                $model->foto->saveAs('pictureUpload/'.$arquivo.'.'.$model->foto->extension);
                $model->url = 'pictureUpload/'.$arquivo.'.'.$model->foto->extension;
            }
            $model->save();
            
            return $this->redirect(['view', 'id' => $model->idContato]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ContatoModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->foto = UploadedFile::getInstance($model, 'foto');
            if ($model->foto!==null) {
                $arquivo = $model->nome.'-'.$model->idContato;
                $model->foto->saveAs('pictureUpload/'.$arquivo.'.'.$model->foto->extension);
                $model->url = 'pictureUpload/'.$arquivo.'.'.$model->foto->extension;
            }
            $model->save();

            return $this->redirect(['view', 'id' => $model->idContato]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ContatoModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ContatoModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ContatoModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ContatoModel::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
