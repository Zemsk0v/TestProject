<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->string('client_name'); // Имя клиента
            $table->date('event_date'); //  Дата мероприятия
            $table->time('event_time'); //  Время начала мероприятия
            $table->string('venue'); // Место проведения
            $table->string('guest_count'); // Количество гостей
            $table->text('description'); // Описание
            $table->decimal('budget', 10, 2); // Бюджет
            $table->string('theme'); // Тематика мероприятия

            $table->timestamps();

            $table->unsignedBigInteger('type_of_events_id')->nullable();
            $table->index('type_of_events_id', 'event_type_of_events_idx');
            $table->foreign('type_of_events_id', 'event_type_of_events_fk')->on('type_of_events')->references('id');

            $table->unsignedBigInteger('status_id')->nullable();
            $table->index('status_id', 'event_status_idx');
            $table->foreign('status_id', 'event_status_id_fk')->on('event_statuses')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};
