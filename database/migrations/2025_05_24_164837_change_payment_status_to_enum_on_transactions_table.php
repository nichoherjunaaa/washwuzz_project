<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangePaymentStatusToEnumOnTransactionsTable extends Migration
{
    public function up()
    {
        // Ganti semua nilai yang tidak valid agar tidak error saat enum diatur ulang
        DB::table('transactions')->whereNotIn('payment_status', ['menunggu', 'sukses', 'gagal'])
            ->update(['payment_status' => 'menunggu']);

        // Drop kolom payment_status dulu
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropColumn('payment_status');
        });

        // Tambahkan kembali kolom payment_status dengan tipe enum
        Schema::table('transactions', function (Blueprint $table) {
            $table->enum('payment_status', ['menunggu', 'sukses', 'gagal'])->default('menunggu');
        });
    }

    public function down()
    {
        // Kembalikan ke string jika di-rollback
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropColumn('payment_status');
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->string('payment_status')->default('menunggu');
        });
    }
}
