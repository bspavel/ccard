<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\People;

/**
 * PeopleSearch represents the model behind the search form about `app\models\People`.
 */
class PeopleSearch extends People
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'dept_id', 'job_id', 'edu_lvl_id', 'edu_spec_id', 'listener_id'], 'integer'],
            [['surname', 'name', 'patronymic', 'login', 'password', 'email', 'sot', 'published', 'postaddress', 'cellphone', 'homephone'], 'safe'],
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
        $query = People::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'dept_id' => $this->dept_id,
            'job_id' => $this->job_id,
            'edu_lvl_id' => $this->edu_lvl_id,
            'edu_spec_id' => $this->edu_spec_id,
            'listener_id' => $this->listener_id,
        ]);

        $query->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'patronymic', $this->patronymic])
            ->andFilterWhere(['like', 'login', $this->login])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'sot', $this->sot])
            ->andFilterWhere(['like', 'published', $this->published])
            ->andFilterWhere(['like', 'postaddress', $this->postaddress])
            ->andFilterWhere(['like', 'cellphone', $this->cellphone])
            ->andFilterWhere(['like', 'homephone', $this->homephone]);

        return $dataProvider;
    }
}
