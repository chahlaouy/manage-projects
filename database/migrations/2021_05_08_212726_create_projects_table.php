<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->text('general_notes');
            $table->boolean('completed')->default(false);
            $table->boolean('archived')->default(false);
            $table->json('images')->nullable();
            $table->json('files')->nullable();
            $table->foreignId('owner_id');

            $table->foreign('owner_id')
                        ->references('id')
                            ->on('users')
                                ->onDelete('cascade');

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
        Schema::dropIfExists('projects');
    }
}
