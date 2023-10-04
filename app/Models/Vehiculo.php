<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vehiculo
 *
 * @property $id
 * @property $TipoVehiculo
 * @property $Marca
 * @property $Modelo
 * @property $Año
 * @property $Kilometraje
 * @property $Estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Conductore[] $conductores
 * @property Mantenimiento[] $mantenimientos
 * @property Notificacione[] $notificaciones
 * @property Pieza[] $piezas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Vehiculo extends Model
{
    
    static $rules = [
		'TipoVehiculo' => 'required',
		'Marca' => 'required',
		'Modelo' => 'required',
		'Año' => 'required',
		'Kilometraje' => 'required',
		'Estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['TipoVehiculo','Marca','Modelo','Año','Kilometraje','Estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function conductores()
    {
        return $this->hasMany('App\Models\Conductore', 'id_vehiculos', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mantenimientos()
    {
        return $this->hasMany('App\Models\Mantenimiento', 'id_vehiculos', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notificaciones()
    {
        return $this->hasMany('App\Models\Notificacione', 'id_vehiculos', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function piezas()
    {
        return $this->hasMany('App\Models\Pieza', 'id_vehiculos', 'id');
    }
    

}
