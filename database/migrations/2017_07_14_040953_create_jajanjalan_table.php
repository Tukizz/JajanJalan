<!-- <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJajanjalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mi_company', function (Blueprint $table) {
            $table->increments('companyId');
            $table->string('companyName',50);
            $table->string('companyLogoUrl',70);
            $table->string('companyPhone',30);
            $table->string('companyWebsite',30);
            $table->string('companyNotes',50);
            $table->string('companyStatus',30);
            $table->string('companyEnteredById',30);
            $table->string('companyEnteredByWhen',30);
            $table->timestamps();
        });
        Schema::create('mi_brand', function (Blueprint $table) {
            $table->increments('brandId');
            $table->string('brandName',70);
            $table->string('brandWebsite',40);
            $table->string('brandPicture',50);
            $table->string('brandPointRules',30);
            $table->string('companyIdFK',30);
            $table->string('brandEnteredById',30);
            $table->string('brandEnteredByWhen',30);
            $table->timestamps();
        });
        Schema::create('mi_branch', function (Blueprint $table) {
            $table->increments('branchId');
            $table->string('branchName',70);
            $table->string('branchAddress',70);
            $table->string('branchContactName',50);
            $table->string('branchContactNo',30);
            $table->string('branchVenue',30);
            $table->string('branchVoucher',30);
            $table->string('branchTradingHours',30);
            $table->string('branchNews',30);
            $table->string('branchPointRules',30);
            $table->string('companyIdFK',30);
            $table->string('branchEnteredById',30);
            $table->string('branchEnteredByWhen',30);
            $table->string('membershipValidFrom',30);
            $table->string('membershipValidUntil',30);
            $table->string('branchBrandId',30);
            $table->timestamps();
        });
            Schema::create('mi_review', function (Blueprint $table) {
            $table->increments('reviewId');
            $table->string('branchId',30);
            $table->string('reviewDescription',120);
            $table->string('reviewById',30);
            $table->string('reviewWhen',30);
            $table->string('reviewApproved',30);
            $table->string('reviewApprovedById',30);
            $table->string('reviewApprovedWhen',30);
            $table->timestamps();
        });
            Schema::create('mi_venue', function (Blueprint $table) {
            $table->increments('venueId');
            $table->string('venueName',60);
            $table->string('venueStatus',30);
            $table->string('brachIdFK',30);
            $table->timestamps();
        });
            Schema::create('mi_voucher', function (Blueprint $table) {
            $table->increments('voucherId');
            $table->string('voucherName',60);
            $table->string('voucherDescription',120);
            $table->string('voucherValidUntil',30);
            $table->string('voucherValidFrom',30);
            $table->string('voucherStatus',30);
            $table->string('VoucherBranchId',30);
            $table->string('voucherReqPoint',30);
            $table->string('voucherReqPointType',30);
            $table->string('voucherBarcode',30);
            $table->string('voucherMaxLimit',30);
            $table->timestamps();
        });
            Schema::create('mi_resto_category', function (Blueprint $table) {
            $table->increments('categoryId');
            $table->string('categoryBranchId',30);
            $table->string('categoryType',30);
            $table->string('categoryRank',30);
            $table->timestamps();
        });
            Schema::create('mi_reward', function (Blueprint $table) {
            $table->increments('rewardId');
            $table->string('rewardName',50);
            $table->string('rewardEarnedPoint',30);
            $table->string('rewardBranchId',30);
            $table->string('rewardValidFrom',30);
            $table->string('rewardValidUntil',30);
            $table->string('rewardStatus',30);
            $table->string('rewardDescription',120);
            $table->timestamps();
        });
            Schema::create('mi_redeemedVoucher', function (Blueprint $table) {
            $table->increments('redeemedId');
            $table->string('redeemedVoucherId',30);
            $table->string('redeemedUserId',30);
            $table->string('redeemedWhen',30);
            $table->string('redeemedStatus',30);
            $table->string('redeemedNote',120);
            $table->timestamps();
        });
            Schema::create('mi_user_types', function (Blueprint $table) {
            $table->increments('userTypeId');
            $table->string('userType',30);
            $table->timestamps();
        });
            Schema::create('mi_contact_person', function (Blueprint $table) {
            $table->increments('contactId');
            $table->string('contactName',70);
            $table->string('contactEmail',80);
            $table->string('contactPosition',30);
            $table->string('contactIdFK',30);
            $table->timestamps();
        });
            Schema::create('mi_membership', function (Blueprint $table) {
            $table->increments('membershipId');
            $table->string('userId',30);
            $table->string('companyId',30);
            $table->timestamps();
        });
            Schema::create('mi_user_action', function (Blueprint $table) {
            $table->increments('actionId');
            $table->string('actionUserId',30);
            $table->string('actionType',30);
            $table->string('actionPoint',30);
            $table->string('actionDescription',120);
            $table->string('actionWhen',30);
            $table->string('actionBranchId',30);
            $table->string('actionStatus',30);
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
        Schema::drop('mi_company');
        Schema::drop('mi_brand');
        Schema::drop('mi_branch');
        Schema::drop('mi_review');
        Schema::drop('mi_venue');
        Schema::drop('mi_voucher');
        Schema::drop('mi_resto_category');
        Schema::drop('mi_reward');
        Schema::drop('mi_redeemedVoucher');
        Schema::drop('mi_user_action');
        Schema::drop('mi_user_types');
        Schema::drop('mi_contact_person');
        Schema::drop('mi_membership');
    }
}
 -->