<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class check extends Model
{
    use HasFactory;
    // protected $fillable = ['computer_prog', 'innovation','embeded_device', 'standalone', 'act_defferent', 'patient_benefit', 'purpose_sec_12a', 'accesssory'];

     public function scopeFilter($query, array $filters) {
        if($filters['innovation'] ?? false) {
            $query->where('innovation', 'like', '%' . request('tag') . '%');
        }

        if($filters['search'] ?? false) {
            $query->where('embeded_device', 'like', '%' . request('search') . '%')
                ->orWhere('standalone', 'like', '%' . request('search') . '%')
                ->orWhere('computer_prog', 'like', '%' . request('search') . '%');
        }
    }

    // Relationship To User
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
