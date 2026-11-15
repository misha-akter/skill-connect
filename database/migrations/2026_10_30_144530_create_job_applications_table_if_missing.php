
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('job_applications')) {
            Schema::create('job_applications', function (Blueprint $table) {
                $table->id();

                $table->foreignId('job_post_id')
                    ->constrained('job_posts')
                    ->cascadeOnDelete();

                $table->foreignId('user_id')
                    ->constrained('users')
                    ->cascadeOnDelete();

                $table->string('phone')->nullable();
                $table->text('cover_letter')->nullable();
                $table->string('status')->default('pending');
                $table->timestamps();

                $table->unique(['job_post_id', 'user_id']);
            });
        }
    }

    public function down(): void
    {
        // Preserve existing application data.
    }
};
