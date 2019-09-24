<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "cliente";

    protected $primaryKey = "cliente_id";

    const CREATED_AT = "data_criacao";

    const UPDATED_AT = "data_atualizacao";

    protected $guarded = [];
}
