<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Commerces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public $table_name = "commerces";
     public $indice = 'commerces_';

    public function up()
    {
        
        
        Schema::create($this->table_name, function (Blueprint $table) {
            $table->bigIncrements($this->indice . 'id');
            $table->bigInteger($this->indice . 'id_user');
            $table->string($this->indice . 'name');
            $table->string($this->indice . 'url')->unique();
            $table->string($this->indice . 'url_img')->nullable();
            $table->string($this->indice . 'address');
            $table->bigInteger($this->indice . 'id_horarios')->nullable();
            $table->string($this->indice . 'longitude_map')->nullable();
            $table->string($this->indice . 'latitude_map')->nullable();
            $table->integer($this->indice . 'status_comments')->nullable();
            $table->string($this->indice . 'score')->nullable();
            $table->string($this->indice . 'excellent')->nullable();
            $table->string($this->indice . 'very_good')->nullable();
            $table->string($this->indice . 'normal')->nullable();
            $table->string($this->indice . 'regular')->nullable();
            $table->string($this->indice . 'bad')->nullable();
            $table->string($this->indice . 'velocity')->nullable();
            $table->string($this->indice . 'service')->nullable();
            $table->string($this->indice . 'delivery_time')->nullable();
            $table->string($this->indice . 'shipping_cost')->nullable();
            $table->string($this->indice . 'minimum_order')->nullable();
            $table->string($this->indice . 'online_payment')->nullable();
            $table->string($this->indice . 'delivery_payment')->nullable();
            $table->string($this->indice . 'payment_tipes_online')->nullable();
            $table->string($this->indice . 'payment_tipes_delivery')->nullable();
            $table->string($this->indice . 'category_tag')->nullable();
            $table->string($this->indice . 'level_tag')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commerces');
    }
}
