<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Drop view dulu jika sudah ada (untuk menghindari error)
        DB::statement('DROP VIEW IF EXISTS rekap_nilai_view');

        // Buat view
        DB::statement("
            CREATE VIEW rekap_nilai_view AS
            SELECT 
                users.id AS id,
                users.id AS user_id,
                materi.id AS materi_id,
                
                -- Ambil nilai pretest
                (
                    SELECT nilai 
                    FROM nilai_test 
                    WHERE user_id = users.id AND materi_id = materi.id AND tipe_test = 'pretest'
                    LIMIT 1
                ) AS nilai_pretest,

                -- Ambil nilai posttest
                (
                    SELECT nilai 
                    FROM nilai_test 
                    WHERE user_id = users.id AND materi_id = materi.id AND tipe_test = 'posttest'
                    LIMIT 1
                ) AS nilai_posttest,

                -- Ambil nilai OJT (rata-rata teori & praktek)
                (
                    SELECT ROUND((nilai_teori + nilai_praktek) / 2, 2)
                    FROM nilai_ojt 
                    WHERE user_id = users.id AND materi_id = materi.id
                    LIMIT 1
                ) AS nilai_ojt,

                -- Status kelulusan (jika semua nilai terisi dan posttest >= 70 dan nilai_ojt >= 70)
                CASE
                    WHEN 
                        (
                            (SELECT nilai FROM nilai_test WHERE user_id = users.id AND materi_id = materi.id AND tipe_test = 'pretest' LIMIT 1) IS NOT NULL
                            AND
                            (SELECT nilai FROM nilai_test WHERE user_id = users.id AND materi_id = materi.id AND tipe_test = 'posttest' LIMIT 1) IS NOT NULL
                            AND
                            (SELECT ROUND((nilai_teori + nilai_praktek)/2, 2) FROM nilai_ojt WHERE user_id = users.id AND materi_id = materi.id LIMIT 1) IS NOT NULL
                        )
                    THEN 
                        CASE
                            WHEN
                                (
                                    (SELECT nilai FROM nilai_test WHERE user_id = users.id AND materi_id = materi.id AND tipe_test = 'posttest' LIMIT 1) >= 70
                                    AND
                                    (SELECT ROUND((nilai_teori + nilai_praktek)/2, 2) FROM nilai_ojt WHERE user_id = users.id AND materi_id = materi.id LIMIT 1) >= 70
                                )
                            THEN 'lulus'
                            ELSE 'gagal'
                        END
                    ELSE NULL
                END AS status
            FROM users
            CROSS JOIN materi
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP VIEW IF EXISTS rekap_nilai_view');
    }
};
