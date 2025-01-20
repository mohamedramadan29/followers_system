<?php

namespace App\Models\admin;
use App\Models\admin\Role;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'phone', 'password', 'account_type', 'status','role_id'];
    public function Role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
    public function hasAccess($config_permission)
    {
        $role = $this->Role;
        dd($role);
        if (!$role) {
            return false;
        }
       // dd($role, json_decode($role->permissions, true), $config_permission);
        $permissions = json_decode($role->permissions);
        foreach ($permissions as $permission) {
            if ($permission == $config_permission ?? false) {
                return true;
            }
        }
    }
}
