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
                <h2 class="text-[20px] leading-[24px] text-[#003F6C] font-semibold">Business Owner Info</h2>  
            </div>

                <div class="relative inline-block mb-[33px]">
                    <img src="./img/thumbnail-big.jpg" class="rounded-full"/>
                    <button class="bg-[#408FEF1A]/10 w-[37px] absolute bottom-0 right-0 h-[37px] flex items-center justify-center rounded-full border-[4px] border-white"><img class="w-[14px] h-[14px]" src="./img/icon-edit.svg"/></button>
                </div>

            <div class="grid grid-cols-12 gap-[15px] md:gap-[34px] mb-[20px] items-center">
                <div class="col-span-12 md:col-span-6">
                    <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Business Owner Name</label>
                    <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0 text-[#003F6C]"/>
                </div>
                <div class="col-span-12 md:col-span-6">
                    <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Email</label>
                    <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-[15px] md:gap-[34px] mb-[20px] items-center">
                <div class="col-span-12 md:col-span-6 custom-select custom-select-full">
                    <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Country</label>
                    <select id="countries" class="bg-white w-[100%] box-shadow select-custom outline-0 max-w-[100%] montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block w-full px-[14px] py-[18px]">
                    <option selected="">Select Country</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                    </select>
                </div>
                <div class="col-span-12 md:col-span-6">
                    <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">City</label>
                    <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-[15px] md:gap-[34px] mb-[20px] items-center">
                <div class="col-span-12 md:col-span-6">
                    <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">State</label>
                    <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0 text-[#003F6C]"/>
                </div>
                <div class="col-span-12 md:col-span-6">
                    <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Postcode</label>
                    <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0"/>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-[15px] md:gap-[34px] mb-[20px] md:mb-[55px] items-center">
                <div class="col-span-12 md:col-span-6">
                    <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Address</label>
                    <input class="w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0 text-[#003F6C]"/>
                </div>
                <div class="col-span-12 md:col-span-6">
                  
                </div>
            </div>

                <div class="text-right flex items-end justify-end">
                    <button class="w-full md:w-auto bg-[#003F6C] hover:bg-[#002743] box-shadow min-w-[180px] text-white rounded-[10px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px]">Save changes</button>
                </div>

        </div>
    </div>
</div>

<?php include('./footer.php');?>

<?php include('./footer-bot.php');?>