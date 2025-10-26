<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbacksTable extends Migration {
    public function up(){
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('slug')->unique();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->boolean('anonymous')->default(false);
            $table->string('status')->default('suggested'); // suggested, planned, in_progress, completed
            $table->string('category')->nullable();
            $table->integer('votes_count')->default(0);
            $table->timestamps();
        });
    }
    public function down(){ Schema::dropIfExists('feedbacks'); }
}
