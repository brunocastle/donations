<?php

use App\Models\RequestCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->tinyInteger('type')->after('email');
            $table->tinyInteger('language')->default(1)->after('type');
            $table->string('confirmation_token')->nullable()->after('remember_token');
            $table->softDeletes();
        });

        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->text('address');
            $table->string('logo')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('request_categories', function (Blueprint $table) {
            $table->id();
            $table->string('token');
            $table->smallInteger('days_until_expire');
            $table->string('image')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        $this->createRequestCategories();

        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->tinyInteger('status');
            $table->unsignedBigInteger('request_category_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('organization_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('request_category_id')->references('id')->on('request_categories');
            $table->foreign('organization_id')->references('id')->on('organizations');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('request_id');
            $table->unsignedBigInteger('user_id');
            $table->tinyInteger('status');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('request_id')->references('id')->on('requests');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down(): void
    {
        //
    }

    protected function createRequestCategories(): void
    {
        collect([
            [
                'token' => 'food',
                'days_until_expire' => 30,
            ],
            [
                'token' => 'clothing',
                'days_until_expire' => 180,
            ],
            [
                'token' => 'books',
                'days_until_expire' => 180,
            ],
            [
                'token' => 'medications',
                'days_until_expire' => 90,
            ],
            [
                'token' => 'school_supplies',
                'days_until_expire' => 90,
            ],
            [
                'token' => 'toys',
                'days_until_expire' => 180,
            ],
        ])
            ->each(function (array $data) {
                RequestCategory::create($data);
            });
    }
};
