<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuItemsWpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( config('menu.table_prefix') . config('menu.table_name_items') , function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('label');
            $table->string('link');
            $table->string('type')->nullable()->default('Link');
            $table->unsignedBigInteger('parent_id')->default(0);
            $table->bigInteger('item_id')->default(0);
            $table->integer('sort')->default(0);
            $table->string('class')->nullable();
            $table->unsignedBigInteger('menu_id');
            $table->integer('depth')->default(0);
            $table->timestamps();

            $table->foreign('menu_id')->references('id')
                ->on(config('menu.table_prefix') . config('menu.table_name_menus'))
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( config('menu.table_prefix') . config('menu.table_name_items'));
    }
}
