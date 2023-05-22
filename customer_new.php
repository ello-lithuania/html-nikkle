<?php include('./header.php'); ?>

<div class="flex md:pb-[84px]">
    <?php include('./sidebar.php'); ?>
    <div class="bg-[#EBF4F8] py-[16px] pb-[48px] px-[9px] lg:p-[27px] lg:rounded-[40px] w-full lg:mr-[40px]">

        <div class="bg-gradient-white2 p-[19px] md:p-[35px] rounded-[20px] md:px-[25%]">
            <div class="flex justify-between items-center mb-[26px] flex-wrap md:flex-nowrap">
                <h2 class="text-[24px] leading-[36px] text-[#003F6C] font-semibold">Add new customer</h2>
                <a href="./sales_customers.php" class="montserrat font-bold text-[12px] leading-[14.6px] text-[#0D7AFF]">Back</a>     
            </div>

            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Customer name*</label>
            <input class="mb-[20px] w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0 text-[#003F6C]">

            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Email</label>
            <input class="mb-[20px] w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0 text-[#003F6C]">

            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Phone</label>
            <input class="mb-[20px] w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0 text-[#003F6C]">

            <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Address</label>
            <input class="mb-[40px] w-full rounded-[10px] min-h-[45px] bg-[#003F6C0D] border-2 border-[#003F6C0D] focus:bg-white focus:border-[#0D7AFF] py-[11px] px-[15px] placeholder:text-[#003F6C] outline-0 text-[#003F6C]">

            <hr class="bg-[#E4E4E4] mb-[33px]"/>

            <h2 class="text-[24px] leading-[36px] text-[#003F6C] font-semibold mb-[25px]">Add new customer</h2>

                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Country</label>
                <div class="mb-[20px]">
                <div class="md:mb-0 custom-select custom-select7">
                    <select id="countries" class="bg-white md:w-auto box-shadow select-custom outline-0 min-w-[337px] max-w-[100%] montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block w-full px-[14px] py-[18px]">
                    <option selected>All customers</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                    </select>
                </div>
                </div>

                <div class="mb-[40px]">
                <label class="mb-[5px] text-[#A9AFB5] text-[12px] leading-[18px]">Currency</label>
                <div class="md:mb-0 custom-select custom-select7">
                    <select id="countries" class="bg-white md:w-auto box-shadow select-custom outline-0 min-w-[337px] max-w-[100%] montserrat font-semibold text-[14px] leading-[17px] text-[#3E3E3E] text-sm rounded-[10px] block w-full px-[14px] py-[18px]">
                    <option selected>All customers</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                    </select>
                </div>
                </div>

                <div class="text-right flex items-end justify-end">
                    <button class="bg-[#003F6C] hover:bg-[#002743] w-full md:w-auto box-shadow text-white rounded-[10px] min-w-[180px] montserrat font-semibold text-[14px] leading-[17px] px-[37px] py-[15px]">Save</button>
                </div>

        </div>
    </div>
</div>

<?php include('./footer.php');?>

<?php include('./footer-bot.php');?>