<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contato".
 *
 * @property int $idContato
 * @property string $nome
 * @property string $sobrenome
 * @property string $foto
 * @property string $telefone
 * @property string $email
 * @property string $endereco
 * @property string $instagram
 */
class ContatoModel extends \yii\db\ActiveRecord
{
    public $url;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contato';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'telefone'], 'required'],
            [['nome'], 'string', 'max' => 125],
            [['sobrenome'], 'string', 'max' => 120],
            [['url'], 'file', 'extensions'=>'jpg,png,jpeg'],
            [['telefone'], 'string', 'min' => 9,'max' => 14],
            [['email'], 'string', 'max' => 200],
            [['endereco'], 'string', 'max' => 200],
            [['instagram'], 'string', 'max' => 125],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idContato' => 'Id Contato',
            'nome' => 'Nome',
            'sobrenome' => 'Sobrenome',
            'foto' => 'Foto',
            'telefone' => 'Telefone',
            'email' => 'Email',
            'endereco' => 'Endereco',
            'instagram' => 'Instagram',
        ];
    }
}
