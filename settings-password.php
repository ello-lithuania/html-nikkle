<?php include('./header.php'); ?>

<div class="flex md:pb-[84px]">
    <?php include('./sidebar.php'); ?>
    <div class="bg-[#EBF4F8] py-[16px] pb-[48px] px-[9px] lg:p-[27px] lg:rounded-[40px] w-full lg:mr-[40px]">

        <div class="flex flex-wrap md:flex-nowrap mb-[35px] px-[16px] md:px-0">
            <a href="./settings.php" class="bg-white text-[#003F6C] mb-[15px] md:mb-0 hover:bg-[#0D7AFF] hover:text-white rounded-[20px] font-semibold text-[14px] leading-[21px] mr-[15px] px-[20px] py-[10px] flex items-center justify-center">General</a>
            <a href="./settings-password.php" class="bg-white text-[#003F6C] mb-[15px] md:mb-0 hover:bg-[#0D7AFF] hover:text-white rounded-[20px] font-semibold text-[14px] leading-[21px] mr-[15px] px-[20px] py-[10px] flex items-center justify-center">Password</a>
            <a href="./settings-bussiness.php" class="bg-white text-[#003F6C] mb-[15px] md:mb-0 hover:bg-[#0D7AFF] hover:text-white rounded-[20px] font-semibold text-[14px] leading-[21px] mr-[15px] px-[20px] py-[10px] flex items-center justify-center">Business</a>
            <a href="./settings-invoice.php" class="bg-white text-[#003F6C] mb-[15px] md:mb-0 hover:bg-[#0D7AFF] hover:text-white rounded-[20px] font-semibold text-[14px] leading-[21px] mr-[15px] px-[20px] py-[10px] flex items-center justify-center">Invoice</a>
            <a href="./settings-roles.php" class="bg-white text-[#003F6C] mb-[15px] md:mb-0 hover:bg-[#0D7AFF] hover:text-white rounded-[20px] font-semibold text-[14px] leading-[21px] mr-[15px] px-[20px] py-[10px] flex items-center justify-center">Roles</a>
            <a href="./settings-permissions.php" class="bg-white text-[#003F6C] mb-[15px] md:mb-0 hover:bg-[#0D7AFF] hover:text-white rounded-[20px] font-semibold text-[14px] leading-[21px] mr-[15px] px-[20px] py-[10px] flex items-center justify-center">Permissions</a>
            <a href="./settings-staff.php" class="bg-white text-[#003F6C] mb-[15px] md:mb-0 hover:bg-[#0D7AFF] hover:text-white rounded-[20px] font-semibold text-[14px] leading-[21px] px-[20px] py-[10px] flex items-center justify-center">Staff</a>
        </div>

        <div class="bg-gradient-white2 px-[21px] py-[26px] md:p-[35px] rounded-[20px]">
            <div class="flex justify-between items-center mb-[47px]">
                <h2 class="text-[20px] leading-[24px] text-[#003F6C] font-semibold">Change Password</h2>  
            </div>

            <div class="grid grid-cols-12 gap-[15px] md:gap-[30px] mb-[35px] md:mb-[54px] items-center">
                <div class="col-span-12 md:col-span-4 relative">
                    <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Old Password</label>
                    <input type="password" class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0 text-[#003F6C]" />
                    <button class="show-password absolute right-[14px] bottom-[15px]"><img src="./img/icon-show-password.svg"/></button>
                </div>
                <div class="col-span-12 md:col-span-4 relative">
                    <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">New Password</label>
                    <input type="password" class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                    <button class="show-password absolute right-[14px] bottom-[15px]"><img src="./img/icon-show-password.svg"/></button>
                </div>
                <div class="col-span-12 md:col-span-4 relative">
                    <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Confirm New Password</label>
                    <input type="password" class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                    <button class="show-password absolute right-[14px] bottom-[15px]"><img src="./img/icon-show-password.svg"/></button>
                </div>
            </div>

                <div class="text-right flex items-end justify-end">
                    <button class="bg-[#003F6C] w-full md:w-auto hover:bg-[#002743] box-shadow min-w-[180px] text-white rounded-[10px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px]">Change</button>
                </div>

        </div>
    </div>
</div>

<?php include('./footer.php');?>

<?php include('./footer-bot.php');?>