<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Penanganan extends Authenticatable
{


    
        use HasFactory;
        protected $table = 'tb_penanganan';
        protected $guarded = [];
        protected $primaryKey = 'id_penanganan';
    

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_kategori_penanganan',
        'id_siswa',
        'id',
        'judul_penanganan',
        'status',
        'catatan_penanganan',
        'tindak_lanjut',
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
   
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
     public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
    public function ketpelanggaran()
    {
        return $this->belongsTo(KetPelanggaran::class, 'id_kategori_pelanggaran');
    }
    
}
