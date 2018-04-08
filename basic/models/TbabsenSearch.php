<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tbabsen;

/**
 * TbabsenSearch represents the model behind the search form about `app\models\Tbabsen`.
 */
class TbabsenSearch extends Tbabsen
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_absen', 'id_mahasiswa'], 'integer'],
            [['alasan', 'waktu_keluar', 'waktu_masuk', 'status'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
    public function search($params)
    {
        $query = Tbabsen::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_absen' => $this->id_absen,
            'id_mahasiswa' => $this->id_mahasiswa,
            'waktu_keluar' => $this->waktu_keluar,
            'waktu_masuk' => $this->waktu_masuk,
        ]);

        $query->andFilterWhere(['like', 'alasan', $this->alasan])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
