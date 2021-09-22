<?php

namespace app\controllers;

use app\Models\Peserta;
use app\Models\PesertaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;

use function PHPSTORM_META\type;

/**
 * PesertaController implements the CRUD actions for Peserta model.
 */
class PesertaController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    public function getType()
    {
        $request = Yii::$app->request;

        $diklat = "";
        $type = $request->get('type');
        switch ($type) {
            case 'struktural_pkn':
                $diklat = "PKN (Pelatihan Kepemimpinan Nasional)";
                break;
            case 'struktural_pka':
                $diklat = "PKA (Pelatihan Kepemimpinan Administrasi)";
                break;
            case 'struktural_pkp':
                $diklat = "PKP (Pelatihan Kepemimpinan Pengawas)";
                break;
            case 'fungsional_kepsek':
                $diklat = "Diklat Calon Kepala Sekolah";
                break;
            case 'teknis_bencana':
                $diklat = "Diklat Darurat Bencana";
                break;
            case 'teknis_kebakaran':
                $diklat = "Diklat Pemadam Kebakaran";
                break;
            case 'teknis_camat':
                $diklat = "Diklat Camat";
                break;

            default:
                # code...
                break;
        }

        return [
            "diklat" => $diklat,
            "type" => $type
        ];
    }

    /**
     * Lists all Peserta models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataDiklat = $this->getType();

        $searchModel = new PesertaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams, $dataDiklat, false);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'dataDiklat' => $dataDiklat,
        ]);
    }

        /**
     * Lists all Peserta models.
     * @return mixed
     */
    public function actionFilter()
    {
        $dataDiklat = $this->getType();
        $searchModel = new PesertaSearch();
        $filter = true;
        if ($dataDiklat['type'] == "fungsional_kepsek") {
            $filter = false;
        }
        $dataProvider = $searchModel->search($this->request->queryParams, $dataDiklat, $filter);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'dataDiklat' => $dataDiklat,
        ]);
    }

    /**
     * Displays a single Peserta model.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $dataDiklat = $this->getType();

        return $this->render('view', [
            'model' => $this->findModel($id),
            'dataDiklat' => $dataDiklat,
        ]);
    }

    /**
     * Creates a new Peserta model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Peserta();
        $dataDiklat = $this->getType();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->type = $dataDiklat['type'];
                $model->save();
                return $this->redirect(['view', 'id' => $model->id, 'type' => $dataDiklat['type']]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'dataDiklat' => $dataDiklat,
        ]);
    }

    /**
     * Updates an existing Peserta model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $dataDiklat = $this->getType();

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'type' => $dataDiklat['type']]);
        }

        return $this->render('update', [
            'model' => $model,
            'dataDiklat' => $dataDiklat,
        ]);
    }

    /**
     * Deletes an existing Peserta model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Peserta model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Peserta the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Peserta::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}