<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\Models\Peserta;
use Codeception\Coverage\Filter;

/**
 * PesertaSearch represents the model behind the search form of `app\Models\Peserta`.
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
            [['nama', 'unit_kerja', 'jabatan', 'tmt_jabatan', 'type'], 'safe'],
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
        $query->andFilterWhere([
            'id' => $this->id,
            'nip' => $this->nip,
            'tmt_jabatan' => $this->tmt_jabatan,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'unit_kerja', $this->unit_kerja])
            ->andFilterWhere(['like', 'jabatan', $this->jabatan])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andWhere(['type' => $dataDiklat['type']]);
        
        if ($filter == true) {
            $query->orderBy(['tmt_jabatan' => SORT_ASC]);
        }

        return $dataProvider;
    }
}
