<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Empleado;

/**
 * EmpleadoSearch represents the model behind the search form about `backend\models\Empleado`.
 */
class EmpleadoSearch extends Empleado
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'persona_id', 'cargo_id', 'sede_id'], 'integer'],
            [['telefono_movil', 'estado'], 'safe'],
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
        $query = Empleado::find();

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
            'persona_id' => $this->persona_id,
            'cargo_id' => $this->cargo_id,
            'sede_id' => $this->sede_id,
        ]);

        $query->andFilterWhere(['like', 'telefono_movil', $this->telefono_movil])
            ->andFilterWhere(['like', 'estado', $this->estado]);

        return $dataProvider;
    }
}
