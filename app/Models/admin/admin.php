<?php

namespace App\Models\admin;
use App\Models\admin\Role;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = ['name', 'email', 'phone', 'password', 'account_type', 'status', 'role_id'];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function Role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }



    public function hasAccess($config_permission)
    {
        dd('تم استدعاء الدالة'); // تحقق من استدعاء الدالة
        $role = $this->Role;
        dump($role); // تصحيح: تحقق من الدور
        if (!$role) {
            return false;
        }
        $permissions = json_decode($role->permissions);
        dump($permissions); // تصحيح: تحقق من الأذونات
        foreach ($permissions as $permission) {
            if ($permission == $config_permission ?? false) {
                return true;
            }
        }
        return false;
    }
}
