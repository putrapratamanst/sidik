<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Peserta;
use Codeception\Coverage\Filter;
use yii\data\ArrayDataProvider;

/**
 * PesertaSearch represents the model behind the search form of `app\models\Peserta`.
 */
class PesertaSearch extends Peserta
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nip'], 'integer'],
            [['nama', 'unit_kerja', 'jabatan', 'tmt_jabatan', 'type', 'pangkat'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params, $dataDiklat, $filter)
    {
        $query = Peserta::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 50,
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        // $query->andFilterWhere([
        //     'id' => $this->id,
        //     'nip' => $this->nip,
        //     'tmt_jabatan' => $this->tmt_jabatan,
        // ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'unit_kerja', $this->unit_kerja])
            ->andFilterWhere(['like', 'jabatan', $this->jabatan])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andWhere(['type' => $dataDiklat['type']]);

        if ($filter == true) {
            $query->orderBy(['tmt_jabatan' => SORT_ASC]);
            if ($dataDiklat['type'] == "struktural_pkn") {
                $query
                    ->orFilterWhere(['like', 'nip', "198108082009041005"])
                    ->orFilterWhere(['like', 'nip', "198005162005021001"])
                    ->orFilterWhere(['like', 'nip', "198409042009041007"])  ;
            }
        }

        return $dataProvider;
    }

    public function searchFilter($dataDiklat)
    {
        $query = Peserta::find()->where(['type' => $dataDiklat['type']]);
        if ($dataDiklat['type'] == "struktural_pkn") {
            $query = $query->limit(8)->orderBy(['tmt_jabatan' => SORT_ASC])->all();
        }
        if ($dataDiklat['type'] == "struktural_pka") {
            $query =  $query->limit(15)->orderBy(['tmt_jabatan' => SORT_ASC])->all();
        }
        if ($dataDiklat['type'] == "struktural_pkp") {
            $query = $query->limit(10)->orderBy(['tmt_jabatan' => SORT_ASC])->all();
        }
        if ($dataDiklat['type'] == "teknis_camat") {
            $query = $query->limit(5)->orderBy(['tmt_jabatan' => SORT_ASC])->all();
        } 
        if ($dataDiklat['type'] == "fungsional_kepsek") {
            $query = $query->all();
        } 

        // $query->orderBy(['tmt_jabatan' => SORT_ASC])->all();
        // add conditions that should always apply here

        $dataProvider = new ArrayDataProvider( [ 'allModels' => $query , 'pagination' => [ 'pageSize' => false ] ]);
        return $dataProvider;
    }
}
