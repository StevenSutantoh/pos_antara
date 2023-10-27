<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'barangs';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['kode_barang', 'kode_kategori', 'nama_barang', 'merk', 'kuantitas', 'harga_beli', 'harga_jual', 'stok'];

    
}
