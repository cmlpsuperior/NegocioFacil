<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    protected $table = 'DocumentType';
    protected $primaryKey = 'idDocumentType';

    public $timestamps = false;
}
