<!-- <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('userId');
            $table->string('userName',60);
            $table->string('address',80);
            $table->string('email',40)->unique();
            $table->string('facebook');
            $table->string('twitter');
            $table->string('path');
            $table->string('instagram');
            $table->string('password',30);
            $table->string('emailVerifed');
            $table->string('munchitPoint');
            $table->string('userTypeId');
            $table->string('registeredWhen');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
 -->