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

        <div class="bg-gradient-white2 p-[35px] rounded-[20px]">
            <div class="flex justify-between items-center mb-[47px] flex-wrap md:flex-nowrap">
                <h2 class="text-[20px] leading-[24px] text-[#003F6C] font-semibold">All Staff</h2>  
                            <a href="" class="w-full md:w-auto mt-[30px] md:mt-0 justify-center md:justify-start whitespace-nowrap montserrat flex items-center py-[16px] px-[14px] rounded-[10px] bg-[#408FEF1A]  hover:bg-[#408FEF]/20 text-[#0D7AFF] font-semibold text-[14px] leading-[17px]">
                                <span class="mr-[12px] plus-icon"></span>
                                Add New Staff
                            </a>  
            </div>

            <div class="grid grid-cols-12 gap-[15px] items-center py-[14px] pl-[17px] hidden md:grid bg-silver-light rounded-[10px]">
                <div class="col-span-3">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline mr-[26px]">#</p>
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">Name</p>
                </div>
                <div class="col-span-3">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">EMAIL</p>
                </div>
                <div class="col-span-3">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">DESIGNATION</p>
                </div>
                <div class="col-span-3">
                    <p class="text-[#A9AFB5] text-[10px] leading-[15px] tracking-[1px] font-semibold inline uppercase">ROLE</p>
                </div>
            </div>

            <div class="grid grid-cols-12 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-7 md:col-span-3">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mr-[26px] hidden md:inline">1</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] font-semibold inline">John Smith</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mt-[12px] md:hidden">johnsmith@mail.com</p>
                </div>
                <div class="col-span-6 md:col-span-3 text-right md:text-left hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">johnsmith@mail.com</p>
                </div>
                <div class="col-span-5 md:col-span-3">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">Designation</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mt-[12px] md:hidden">Role name</p>
                </div>
                <div class="col-span-6 md:col-span-3 text-right md:text-left hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">Role name</p>
                </div>

            </div>

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-12 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-7 md:col-span-3">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mr-[26px] hidden md:inline">1</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] font-semibold inline">John Smith</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mt-[12px] md:hidden">johnsmith@mail.com</p>
                </div>
                <div class="col-span-6 md:col-span-3 text-right md:text-left hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">johnsmith@mail.com</p>
                </div>
                <div class="col-span-5 md:col-span-3">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">Designation</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mt-[12px] md:hidden">Role name</p>
                </div>
                <div class="col-span-6 md:col-span-3 text-right md:text-left hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">Role name</p>
                </div>

            </div>       

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-12 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-7 md:col-span-3">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mr-[26px] hidden md:inline">1</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] font-semibold inline">John Smith</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mt-[12px] md:hidden">johnsmith@mail.com</p>
                </div>
                <div class="col-span-6 md:col-span-3 text-right md:text-left hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">johnsmith@mail.com</p>
                </div>
                <div class="col-span-5 md:col-span-3">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">Designation</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mt-[12px] md:hidden">Role name</p>
                </div>
                <div class="col-span-6 md:col-span-3 text-right md:text-left hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">Role name</p>
                </div>

            </div>       

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-12 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-7 md:col-span-3">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mr-[26px] hidden md:inline">1</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] font-semibold inline">John Smith</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mt-[12px] md:hidden">johnsmith@mail.com</p>
                </div>
                <div class="col-span-6 md:col-span-3 text-right md:text-left hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">johnsmith@mail.com</p>
                </div>
                <div class="col-span-5 md:col-span-3">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">Designation</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mt-[12px] md:hidden">Role name</p>
                </div>
                <div class="col-span-6 md:col-span-3 text-right md:text-left hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">Role name</p>
                </div>

            </div>       

            <hr class="bg-[#E4E4E4]"/>

            <div class="grid grid-cols-12 gap-[15px] items-center py-[17px] md:pl-[17px]">
                <div class="col-span-7 md:col-span-3">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mr-[26px] hidden md:inline">1</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] font-semibold inline">John Smith</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mt-[12px] md:hidden">johnsmith@mail.com</p>
                </div>
                <div class="col-span-6 md:col-span-3 text-right md:text-left hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">johnsmith@mail.com</p>
                </div>
                <div class="col-span-5 md:col-span-3">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">Designation</p>
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px] mt-[12px] md:hidden">Role name</p>
                </div>
                <div class="col-span-6 md:col-span-3 text-right md:text-left hidden md:block">
                    <p class="text-[#3E3E3E] text-[14px] leading-[21px]">Role name</p>
                </div>

            </div>       


        </div>
    </div>
</div>

<?php include('./footer.php');?>

<?php include('./footer-bot.php');?>