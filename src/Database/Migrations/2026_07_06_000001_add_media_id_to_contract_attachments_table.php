<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('contract_attachments', function (Blueprint $table) {
            if (!Schema::hasColumn('contract_attachments', 'media_id')) {
                $table->foreignId('media_id')->nullable()->after('file_path')
                    ->constrained('media')->nullOnDelete();
            }
        });
    }

    public function down(): void
    {
        Schema::table('contract_attachments', function (Blueprint $table) {
            if (Schema::hasColumn('contract_attachments', 'media_id')) {
                $table->dropConstrainedForeignId('media_id');
            }
        });
    }
};
