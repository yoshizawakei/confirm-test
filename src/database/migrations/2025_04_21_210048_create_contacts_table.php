<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId("category_id")->constrained()->cascadeOnDelete();
            $table->string("name_first");
            $table->string("name_last");
            $table->string("gender");
            $table->string("email");
            $table->string("tel", 11);
            $table->string("address");
            $table->string("building")->nullable();
            $table->text("detail");
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
        Schema::dropIfExists('contacts');
    }
}
