<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'password', 'remember_token', 'senha',
        'genero',
        'cpf',
        'rg',
        'rg_expedicao',
        'nasc',
        'naturalidade',
        'estado_civil',
        'avatar',  
        //Endereço      
        'cep', 'rua', 'num', 'complemento', 'bairro', 'uf', 'cidade',
        //Contato
        'telefone', 'celular', 'whatsapp', 'skype', 'telegram', 'email', 'email_adicional',
        //Social
        'facebook', 'twitter', 'instagram', 'linkedin', 'vimeo', 'youtube', 'fliccr', 
        // Cargo
        'admin', 'client', 'editor', 'superadmin',
        'status',
        'notasadicionais'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Accerssors and Mutators
    */

    //Exibe a função do usuário
    public function getFuncao() {
        if($this->admin == 1 && $this->client == 0 && $this->superadmin == 0){
            return 'Administrador';
        }elseif($this->admin == 0 && $this->client == 1 && $this->superadmin == 0){
            return 'Cliente';
        }elseif($this->admin == 0 && $this->client == 0 && $this->editor == 1 && $this->superadmin == 0){
            return 'Editor';
        }elseif($this->admin == 1 && $this->client == 1 && $this->superadmin == 0){
            return 'Administrador/Cliente'; 
        }else{
            return 'Super Administrador'; 
        }
    }
}
